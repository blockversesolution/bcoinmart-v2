<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class OTPVerificationMailJob implements ShouldQueue
{
    use Queueable;
    private string $to;
    private string $subject;
    private string $mailableClass;
    private array $data;
    private string $viewPath;
    private mixed $attachment;
    /**
     * Create a new job instance.
     */
    public function __construct($to, $subject, $mailableClass,$viewPath, $data=[], $attachment = null)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->mailableClass = $mailableClass;
        $this->viewPath = $viewPath;
        $this->data = $data;
        $this->attachment = $attachment;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->to)->send(new $this->mailableClass($this->subject, $this->viewPath, $this->data, $this->attachment));

    }
}
