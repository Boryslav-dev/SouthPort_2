<?php

namespace App\Mail;

use App\Http\Controllers\orderMailController;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class orderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @param $data
     */

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): orderMail
    {
        return $this->subject('Южный порт:')
            ->view('orderMail')
            ->attach($this->data['file'])
            ->with('data', $this->data)
            ->from('kuchkov70@gmail.com');
    }
}
