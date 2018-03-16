<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $book;
    public function __construct($book)
    {
        $this->book = $book;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

         return $this->from('mrea@upemor.edu.mx', 'Miguel Rea')
          ->subject('Listado de libros disponibles')
          ->view('emails.bookConfirmation')
          ->with([
               'book' => $this->book,
          ]);
    }
}
