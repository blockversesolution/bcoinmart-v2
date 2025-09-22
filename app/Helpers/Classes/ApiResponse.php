<?php

namespace App\Helpers\Classes;

use App\Http\Resources\ApiResponseResource;
use Illuminate\Http\JsonResponse;

class ApiResponse
{
    /**
     * Return a success API response.
     */
    public static function success(int $code = 200, string $message = 'Success', mixed $data = null): JsonResponse
    {
        return ApiResponseResource::success($data, $message, $code)->response(request());
    }

    /**
     * Return an error API response.
     */
    public static function error(int $code, string $message, mixed $errors = null)    {
        return ApiResponseResource::error($message, $code, $errors)->response(request());
    }

    /**
     * Return a validation error response.
     */
    public static function validationError(array $errors, int $code = 422, string $message = 'The given data was invalid.'): JsonResponse
    {
        return self::error($code, $message, $errors);
    }

    /**
     * Return a not found response.
     */
    public static function notFound(int $code = 404, string $message = 'Resource not found', mixed $errors = null): JsonResponse
    {
        return self::error($code, $message, $errors);
    }

    /**
     * Return an unauthorized response.
     */
    public static function unauthorized(int $code = 401, string $message = 'Unauthorized', mixed $errors = null): JsonResponse
    {
        return self::error($code, $message, $errors);
    }

    /**
     * Return a forbidden response.
     */
    public static function forbidden(int $code = 403, string $message = 'Forbidden', mixed $errors = null): JsonResponse
    {
        return self::error($code, $message, $errors);
    }
}
