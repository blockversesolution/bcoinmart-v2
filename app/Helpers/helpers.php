<?php
use Illuminate\Support\Facades\Http;
use App\Models\GeneralSetting;

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

if (! function_exists('setEnvVariable')) {

    /**
     * Set or update an environment variable in the .env file.
     *
     * @param string $key
     * @param string $value
     * @return bool
     */
    function setEnvVariable(string $key, string $value): bool
    {
        $envPath = base_path('.env');
        if (!file_exists($envPath) || !is_writable($envPath)) {
            return false;
        }

        $env = file_get_contents($envPath);
        $pattern = "/^" . preg_quote($key, '/') . "=.*$/m";
        $value = str_contains($value, ' ') ? "\"{$value}\"" : $value;

        if (preg_match($pattern, $env)) {
            $env = preg_replace($pattern, "{$key}={$value}", $env);
        } else {
            $env .= PHP_EOL . "{$key}={$value}";
        }

        // update runtime config too
        if (config()->has($key)) {
            config()->set($key, $value);
        }

        return file_put_contents($envPath, $env) !== false;
    }
}

if (! function_exists('setToEnv') ){
    /**
     * Set settings to the .env file.
     *
     * @param object|array $setting
     * @param string $type
     * @return void
     */
    function setToEnv($setting, $type = 'email', $provider = null): void
    {
        if ($type == 'email') {
            setEnvVariable('MAIL_MAILER', $setting->mail_driver);
            setEnvVariable('MAIL_HOST', $setting->mail_host ?? '');
            setEnvVariable('MAIL_PORT', $setting->mail_port ?? '');
            setEnvVariable('MAIL_USERNAME', $setting->mail_username ?? '');
            setEnvVariable('MAIL_PASSWORD', $setting->mail_password ?? '');
            setEnvVariable('MAIL_FROM_ADDRESS', $setting->mail_from_address ?? '');
            setEnvVariable('MAIL_FROM_NAME', $setting->mail_from_name ?? '');
        }

        if ($type == 'sms') {
            setEnvVariable('TWILIO_SID', $setting->twilio_sid ?? '');
            setEnvVariable('TWILIO_AUTH_TOKEN', $setting->twilio_auth_token ?? '');
            setEnvVariable('TWILIO_NUMBER', $setting->twilio_number ?? '');
            setEnvVariable('VONAGE_NEXMO_KEY', $setting->vonage_nexmo_key ?? '');
            setEnvVariable('VONAGE_NEXMO_SECRET', $setting->vonage_nexmo_secret ?? '');
            setEnvVariable('VONAGE_NEXMO_BRAND', $setting->vonage_nexmo_brand ?? '');
        }

        if ($type == 'sendbirdge'){
            setEnvVariable('SENDBIRDGE_API_TOKEN', $setting->sendbirdge_api_token ?? '');
        }

        if ($type == 'general'){
            setEnvVariable('APP_NAME', $setting['site_name'] ?? '');
            setEnvVariable('TIMEZONE', $setting['timezone'] ?? '');
            setEnvVariable('DATE_FORMAT', $setting['date_format'] ?? '');
            setEnvVariable('TIME_FORMAT', $setting['time_format'] ?? '');
        }

        if ($type == 'authentication')
        {
            if ($provider == 'google'){
                setEnvVariable('GOOGLE_CLIENT_ID', $setting->provider === 'google' ? $setting->client_id ?? '' : env('GOOGLE_CLIENT_ID', ''));
                setEnvVariable('GOOGLE_CLIENT_SECRET', $setting->provider === 'google' ? $setting->client_secret ?? '' : env('GOOGLE_CLIENT_SECRET', ''));
                setEnvVariable('GOOGLE_REDIRECT_URL', $setting->provider === 'google' ? $setting->redirect_url ?? '' : env('GOOGLE_REDIRECT_URL', ''));
            }
            if ($provider == 'telegram'){
                setEnvVariable('TELEGRAM_BOT_NAME', $setting->provider === 'telegram' ? $setting->bot_name ?? '' : env('TELEGRAM_BOT_NAME', ''));
                setEnvVariable('TELEGRAM_TOKEN', $setting->provider === 'telegram' ? $setting->token ?? '' : env('TELEGRAM_TOKEN', ''));
                setEnvVariable('TELEGRAM_REDIRECT_URL', $setting->provider === 'telegram' ? $setting->redirect_url ?? '' : env('TELEGRAM_REDIRECT_URL', ''));

            }


        }

    }

    if (! function_exists('removeFromEnv')) {

        function removeFromEnv($type, $provider): void
        {
            if ($type == 'email') {
                setEnvVariable('MAIL_MAILER', '');
                setEnvVariable('MAIL_HOST', '');
                setEnvVariable('MAIL_PORT', '');
                setEnvVariable('MAIL_USERNAME', '');
                setEnvVariable('MAIL_PASSWORD', '');
                setEnvVariable('MAIL_FROM_ADDRESS', '');
                setEnvVariable('MAIL_FROM_NAME', '');
            }
            if ($type == 'sms') {
                setEnvVariable('TWILIO_SID', '');
                setEnvVariable('TWILIO_AUTH_TOKEN', '');
                setEnvVariable('TWILIO_NUMBER', '');
                setEnvVariable('VONAGE_NEXMO_KEY', '');
                setEnvVariable('VONAGE_NEXMO_SECRET', '');
                setEnvVariable('VONAGE_NEXMO_BRAND', '');
            }
            if ($type == 'sendbirdge'){
                setEnvVariable('SENDBIRDGE_API_TOKEN', '');
            }
            if ($type == 'authentication')
            {
                if ($provider == 'google'){
                    setEnvVariable('GOOGLE_CLIENT_ID', '');
                    setEnvVariable('GOOGLE_CLIENT_SECRET', '');
                    setEnvVariable('GOOGLE_REDIRECT_URL', '');
                }
                if ($provider == 'telegram'){
                    setEnvVariable('TELEGRAM_BOT_NAME', '');
                    setEnvVariable('TELEGRAM_TOKEN', '');
                    setEnvVariable('TELEGRAM_REDIRECT_URL', '');

                }


            }
        }
    }
}

if (! function_exists('getGeneralSetting')) {
    function getGeneralSetting(string $column)
    {
        $setting = GeneralSetting::first();
        return $setting ? $setting->$column : null;    }
}
