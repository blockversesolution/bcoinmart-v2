<?php

namespace App\Services\SmsGateway;

use Vonage\Client;
use Vonage\Client\Credentials\Basic;
use Vonage\SMS\Message\SMS;
class VonageNexmoService
{
    protected Client $client;
    protected string $brand;

    public function __construct()
    {
        $credentials = new Basic(
            config('services.vonage.key'),
            config('services.vonage.secret')
        );

        $this->client = new Client($credentials);
        $this->brand = config('services.vonage.brand');
    }

    /**
     * Send an SMS message.
     *
     * @param string $to Recipient number with country code (e.g., 8801xxxxxxx)
     * @param string $text Message content
     * @return bool        True if sent successfully
     */
    public function send(string $to, string $text): bool
    {
        $response = $this->client->sms()->send(
            new SMS($to, $this->brand, $text)
        );

        $message = $response->current();

        return $message->getStatus() === 0;
    }
}
