<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class reset_pass extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $id;
    public function __construct($id)
    {
        
        $this->id=$id;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('admin.password.mail_reset',compact($this->id));
    }
}
