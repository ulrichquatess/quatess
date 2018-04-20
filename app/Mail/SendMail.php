<?php

namespace App\Mail;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Sendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
    {
        return $this->view('quatess.message', ['aaa' => $request->message, 'email' => $request->email , 'name' => $request->name , 'subject' => $request->subject  ] )->to('ulrichquatess@gmail.com');
    }
}
