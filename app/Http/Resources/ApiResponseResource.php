<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApiResponseResource extends JsonResource
{
    protected int $statusCode;
    protected string $message;
    protected mixed $data;
    protected mixed $errors;

    public function __construct(mixed $data = null, int $code = 200, string $message = 'Success', mixed $errors = null)
    {
        parent::__construct(null);
        $this->statusCode = $code;
        $this->message = $message;
        $this->data = $data;
        $this->errors = $errors;
    }

    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        $response = [
            'code' => $this->statusCode,
            'message' => $this->message,
            'data' => $this->data ?? [],
        ];

        if (!empty($this->errors)) {
            $response['errors'] = $this->errors;
        }

        return $response;
    }

    /**
     * Customize the outgoing response for the resource.
     */
    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->setStatusCode($this->statusCode);
    }

    /**
     * Create a success response.
     */
    public static function success(mixed $data = null, string $message = 'Success', int $code = 200): self
    {
        return new self($data, $code, $message);
    }

    /**
     * Create an error response.
     */
    public static function error(string $message = 'Error', int $code = 500, mixed $errors = null): self
    {
        return new self([], $code, $message, $errors);
    }
}
