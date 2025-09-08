<?php

namespace App\Helpers;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use App\Exceptions\InvalidBase64ImageException;

class ImageUploadEngine
{
    /**
     * Check if the provided string is a valid image.
     *
     * @param string $base64Image The base64 encoded image string
     * @return bool Returns true if the string is a valid image, false otherwise
     */
    public static function isImage($base64Image): bool
    {
        if (!is_string($base64Image)) {
            return false;
        }

        // Check if the string matches base64 image pattern
        if (!preg_match('/^data:image\/(\w+);base64,/', $base64Image, $type)) {
            return false;
        }

        $image = substr($base64Image, strpos($base64Image, ',') + 1);
        $type = strtolower($type[1]);

        // Validate image type
        if (!in_array($type, ['jpg', 'jpeg', 'gif', 'png', 'webp'])) {
            return false;
        }

        // Try to decode and create image resource
        $image = base64_decode($image);
        if ($image === false) {
            return false;
        }

        $source = @imagecreatefromstring($image);
        if ($source === false) {
            return false;
        }

        imagedestroy($source);
        return true;
    }

    /**
     * The function processes a base64 image, saves it to a specified folder path, and optionally
     * converts it to WebP format and resizes it.
     *
     * @param base64Image The base64 encoded image string
     * @param folderPath The subdirectory within the base directory where the image will be saved
     * @param fileName The name of the file that will be saved
     * @param convertToWebp Boolean flag to convert the image to WebP format
     * @param resizeDimensions Optional array with width and height for resizing [width, height]
     * @return The file name of the saved image file
     */
    public static function process($base64Image, $folderPath = null, $fileName = null, $convertToWebp = false, $resizeDimensions = null, $oldFileName = null): string
    {
        // Check if the image is a valid base64 format
        if (preg_match('/^data:image\/(\w+);base64,/', $base64Image, $type)) {
            $image = substr($base64Image, strpos($base64Image, ',') + 1);
            $type = strtolower($type[1]); // jpg, png, gif

            // Validate the image type
            if (!in_array($type, ['jpg', 'jpeg', 'gif', 'png', 'webp'])) {
                throw new InvalidBase64ImageException("Invalid image type: {$type}");
            }

            // Decode the base64 image
            $image = base64_decode($image);
            if ($image === false) {
                throw new InvalidBase64ImageException("Failed to decode the Base64 image.");
            }

            // Create image resource for resizing
            $source = imagecreatefromstring($image);
            if (!$source) {
                throw new InvalidBase64ImageException("Failed to create image from provided data.");
            }

            // Handle resizing if dimensions are provided
            if ($resizeDimensions && is_array($resizeDimensions) && count($resizeDimensions) === 2) {
                $newWidth = (int) $resizeDimensions[0];
                $newHeight = (int) $resizeDimensions[1];

                if ($newWidth > 0 && $newHeight > 0) {
                    $originalWidth = imagesx($source);
                    $originalHeight = imagesy($source);

                    // Create new image resource for resized image
                    $resizedImage = imagecreatetruecolor($newWidth, $newHeight);

                    // Preserve transparency for PNG and GIF
                    if ($type === 'png' || $type === 'gif') {
                        imagealphablending($resizedImage, false);
                        imagesavealpha($resizedImage, true);
                        $transparent = imagecolorallocatealpha($resizedImage, 0, 0, 0, 127);
                        imagefill($resizedImage, 0, 0, $transparent);
                    }

                    // Resize the image
                    imagecopyresampled(
                        $resizedImage,
                        $source,
                        0, 0, 0, 0,
                        $newWidth, $newHeight,
                        $originalWidth, $originalHeight
                    );

                    // Update the image data
                    ob_start();
                    switch ($type) {
                        case 'png':
                            imagepng($resizedImage, null, 9);
                            break;
                        case 'gif':
                            imagegif($resizedImage);
                            break;
                        default: // jpg, jpeg
                            imagejpeg($resizedImage, null, 90);
                    }
                    $image = ob_get_contents();
                    ob_end_clean();
                    imagedestroy($resizedImage);
                }
            }

            // Free up original image resource
            imagedestroy($source);

            // If no file name is passed, generate a unique file name
            if (is_null($fileName)) {
                $fileName = Str::random(12) . '.' . ($convertToWebp ? 'webp' : $type);
            } else {
                $fileName = $fileName . '.' . $type;
            }

            // Determine the base path (public/images)
            $basePath = public_path('images');

            // If a folder path is passed, append it to the base path
            $fullPath = $folderPath ? $basePath . '/' . $folderPath : $basePath;

            // Ensure the directory exists
            if (!file_exists($fullPath)) {
                mkdir($fullPath, 0777, true);
            }

            // Define the full file path
            $filePath = $fullPath . '/' . $fileName;

            // Convert the image to WebP if the flag is set
            if ($convertToWebp) {
                $image = self::convertToWebp($image); // Convert the image to WebP
                $fileName = Str::replaceLast($type, 'webp', $fileName); // Ensure filename is set to .webp
            }

            // Save the file to the public directory using file_put_contents
            file_put_contents($filePath, $image);

            if ($oldFileName) {
                $oldFilePath = $fullPath . '/' . $oldFileName;
                Log::info($oldFilePath);
                if (File::exists($oldFilePath)) {
                    File::delete($oldFilePath);
                }
            }

            // Return only the file name
            return $fileName;
        }

        throw new InvalidBase64ImageException("The provided string is not a valid Base64 image.");
    }

    /**
     * Convert image data to WebP format.
     *
     * @param string $image Image data (binary)
     * @return string Encoded WebP image data
     * @throws Exception If conversion fails
     */
    private static function convertToWebp($image)
    {
        // Create an image resource from the binary data
        $source = imagecreatefromstring($image);

        if (!$source) {
            throw new Exception("Failed to create an image from the provided data.");
        }

        // Start buffering the output to capture the WebP image binary data
        ob_start();
        imagewebp($source, null, 80); // Convert image to WebP format with quality 80
        $webpImage = ob_get_contents();
        ob_end_clean();

        // Free up memory
        imagedestroy($source);

        // Return WebP image binary data
        return $webpImage;
    }

    public static function deleteImage($oldFilePath)
    {
        Log::info($oldFilePath);
        if (File::exists($oldFilePath))
        {
            File::delete($oldFilePath);
        }
    }
}
