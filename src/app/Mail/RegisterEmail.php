<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
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
    public function build()
    {
        eturn $this->to('aaa@example.com')             // 宛先
                    ->subject('会員登録が完了しました')     // 件名
                    ->view('mail.WelcomeEmail')         // 本文（HTMLメール）
                    ->text('mail.WelcomeEmail_text');   // 本文（プレーンテキストメール）
    }
}
