<?php

namespace App\Helpers\Classes;

use App\Exceptions\InvalidBase64ImageException;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ImageUploadEngine
{
    /**
     * Validate if a string is a base64 encoded image.
     *
     * @param string $base64Image
     * @return bool
     */
    public static function isImage(string $base64Image): bool
    {
        if (!preg_match('/^data:image\/(\w+);base64,/', $base64Image, $type)) {
            return false;
        }

        $imageData = base64_decode(substr($base64Image, strpos($base64Image, ',') + 1));
        if ($imageData === false) {
            return false;
        }

        $image = @imagecreatefromstring($imageData);
        if (!$image) {
            return false;
        }

        imagedestroy($image);
        return true;
    }

    /**
     * Process and save a Base64 image.
     *
     * @param string $base64Image
     * @param string|null $folderPath
     * @param string|null $fileName
     * @param bool $convertToWebp
     * @param array|null $resizeDimensions [width, height]
     * @param string|null $oldFileName
     * @return string Saved file name
     *
     * @throws InvalidBase64ImageException
     */
    public static function process(
        string $base64Image,
        ?string $folderPath = null,
        ?string $fileName = null,
        bool $convertToWebp = false,
        ?array $resizeDimensions = null,
        ?string $oldFileName = null
    ): string {
        if (!preg_match('/^data:image\/(\w+);base64,/', $base64Image, $type)) {
            throw new InvalidBase64ImageException("The provided string is not a valid Base64 image.");
        }

        $imageData = base64_decode(substr($base64Image, strpos($base64Image, ',') + 1));
        $type = strtolower($type[1]);

        if (!in_array($type, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
            throw new InvalidBase64ImageException("Invalid image type: {$type}");
        }

        $source = @imagecreatefromstring($imageData);
        if (!$source) {
            throw new InvalidBase64ImageException("Failed to create image from provided data.");
        }

        // Resize if needed
        if ($resizeDimensions && count($resizeDimensions) === 2) {
            $imageData = self::resizeImage($source, $type, $resizeDimensions[0], $resizeDimensions[1]);
        }

        imagedestroy($source);

        // Final file extension
        $extension = $convertToWebp ? 'webp' : $type;
        $fileName = ($fileName ?? Str::random(12)) . '.' . $extension;

        // Build full path
        $basePath = public_path('images');
        $fullPath = $folderPath ? $basePath . '/' . trim($folderPath, '/') : $basePath;

        if (!file_exists($fullPath)) {
            mkdir($fullPath, 0777, true);
        }

        $filePath = $fullPath . '/' . $fileName;

        // Convert to WebP if needed
        if ($convertToWebp) {
            $imageData = self::convertToWebp($imageData);
        }

        file_put_contents($filePath, $imageData);

        // Delete old file if requested
        if ($oldFileName) {
            self::deleteImage($fullPath . '/' . $oldFileName);
        }

        return $fileName;
    }

    /**
     * Resize image and return binary data.
     *
     * @param resource $source
     * @param string $type
     * @param int $newWidth
     * @param int $newHeight
     * @return string
     */
    private static function resizeImage($source, string $type, int $newWidth, int $newHeight): string
    {
        $originalWidth = imagesx($source);
        $originalHeight = imagesy($source);

        $resizedImage = imagecreatetruecolor($newWidth, $newHeight);

        // Preserve transparency
        if (in_array($type, ['png', 'gif'])) {
            imagealphablending($resizedImage, false);
            imagesavealpha($resizedImage, true);
            $transparent = imagecolorallocatealpha($resizedImage, 0, 0, 0, 127);
            imagefill($resizedImage, 0, 0, $transparent);
        }

        imagecopyresampled(
            $resizedImage,
            $source,
            0, 0, 0, 0,
            $newWidth, $newHeight,
            $originalWidth, $originalHeight
        );

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
        $data = ob_get_clean();

        imagedestroy($resizedImage);
        return $data;
    }

    /**
     * Convert binary image data to WebP format.
     *
     * @param string $imageData
     * @return string
     * @throws Exception
     */
    private static function convertToWebp(string $imageData): string
    {
        $source = @imagecreatefromstring($imageData);
        if (!$source) {
            throw new Exception("Failed to create an image from the provided data.");
        }

        ob_start();
        imagewebp($source, null, 80);
        $webpImage = ob_get_clean();

        imagedestroy($source);
        return $webpImage;
    }

    /**
     * Delete an image from storage.
     *
     * @param string $filePath
     * @return void
     */
    public static function deleteImage(string $filePath): void
    {
        if (File::exists($filePath)) {
            File::delete($filePath);
            Log::info("Deleted old image: {$filePath}");
        }
    }
}
