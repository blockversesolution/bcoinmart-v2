<?php

namespace App\Services\SmsGateway;

use Twilio\Rest\Client;

class TwilioService
{
    protected $client;
    protected $from;

    public function __construct()
    {
        $this->client = new Client(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'));
        $this->from = env('TWILIO_NUMBER');
    }

    /**
     * Send SMS using Twilio
     *
     * @param string $to      Recipient phone number with country code
     * @param string $message Message text
     * @return \Twilio\Rest\Api\V2010\Account\MessageInstance
     */
    public function sendSms(string $to, string $message): \Twilio\Rest\Api\V2010\Account\MessageInstance
    {
        return $this->client->messages->create($to, [
            'from' => $this->from,
            'body' => $message,
        ]);

    }

    /**
     * Send bulk SMS
     *
     * @param array $recipients Array of phone numbers with country code
     * @param string $message
     * @return array $results
     */
    public function sendBulkSms(array $recipients, string $message): array
    {
        $results = [];

        foreach ($recipients as $to) {
            try {
                $results[] = $this->client->messages->create($to, [
                    'from' => $this->from,
                    'body' => $message,
                ]);
            } catch (\Exception $e) {
                $results[] = [
                    'to' => $to,
                    'error' => $e->getMessage(),
                ];
            }
        }

        return $results;
    }
}
