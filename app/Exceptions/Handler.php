<?php

namespace App\Exceptions;

use App\Helpers\Classes\ApiResponse;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler
{
    public function register($exceptions): void
    {
        $exceptions->renderable(function (Throwable $e, $request) {
            // Log the error
            Log::error(sprintf(
                "[%s] %s in %s:%d\nStack trace:\n%s",
                get_class($e),
                $e->getMessage(),
                $e->getFile(),
                (int)$e->getLine(),
                $e->getTraceAsString()
            ));

            if ($request->expectsJson() || $request->is('api/*')) {
                $debugInfo = config('app.debug') ? [
                    'error' => $e->getMessage(),
                    'line' => $e->getLine(),
                    'file' => $e->getFile(),
                ] : null;

                return match (true) {
                    $e instanceof ValidationException => ApiResponse::error(
                        422,
                        'Validation failed',
                        $e->errors()
                    ),
                    $e instanceof AuthenticationException => ApiResponse::error(
                        401,
                        'Unauthenticated.',
                        $debugInfo
                    ),
                    $e instanceof NotFoundHttpException => ApiResponse::error(
                        404,
                        'Record not found.',
                        $debugInfo
                    ),
                    $e instanceof MethodNotAllowedHttpException => ApiResponse::error(
                        405,
                        'Method not allowed.',
                        $debugInfo
                    ),
                    default => ApiResponse::error(
                        500,
                        config('app.debug') ? $e->getMessage() : 'Server Error',
                        $debugInfo
                    ),
                };
            }

            return null;
        });
    }
}
