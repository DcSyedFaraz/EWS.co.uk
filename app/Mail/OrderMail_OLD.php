<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Request;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $attachmentsPath;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $request, $files)
    {
        $this->data = $request->all();
        $this->attachmentsPath = $files;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->markdown('email.order')->subject('Order Confirmation')->with(["data" => $this->data,]);

        foreach ($this->attachmentsPath as $filePath) {
            $email->attachFromStorage('/public/'. $filePath);
        }

        return $email;

    }
}
