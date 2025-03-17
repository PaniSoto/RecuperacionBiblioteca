<?php

namespace App\Mail;

use Illuminate\Mail\Mailables\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ForHireDeleted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $forHire;
    public function __construct($forHire)
    {
        $this->forHire = $forHire;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('admin@iesincagarcilaso.com', 'Administrador'),
            subject: 'Préstamo eliminado',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.forHireDeleted',
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

     /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.forHireDeleted')
                    ->subject('Préstamo Eliminado')
                    ->with(['forHire' => $this->forHire]);
    }
}
