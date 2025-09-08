<?php
use Illuminate\Support\Facades\Http;

if (! function_exists('isEmailValid')) {
    /**
     * Validate if the given string is a valid email address.
     *
     * @param string $email
     * @return bool
     */
    function isEmailValid(string $email): bool
    {
        $token = env('SENDBRIDGE_API_TOKEN');

        $response = Http::get("https://api.sendbridge.com/v1/validate/{$token}/{$email}")->json();

        return isset($response['valid_syntax'], $response['valid_tld'], $response['rcpt_exists'], $response['temporarily_undeliverable'])
            && $response['valid_syntax'] === true
            && $response['valid_tld'] === true
            && $response['rcpt_exists'] === true
            && $response['temporarily_undeliverable'] === false;

    }

}
