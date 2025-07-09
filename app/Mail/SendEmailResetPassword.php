<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmailResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $code; // Thêm property để truyền mã 

    /**
     * Create a new message instance.
     */
    public function __construct($code)
    {
        $this->code = $code; // Nhận mã xác nhận từ controller
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mã xác nhận đặt lại mật khẩu', // Cập nhật tiêu đề email
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.ResetPassword', // template email
            with: [
                'code' => $this->code, // Truyền mã xác nhận vào view
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
