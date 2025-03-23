<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user; // 👈 Hacemos pública la variable

    /**
     * Recibe el usuario cuando se instancia
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject('¡Bienvenido a Activity 9!')
                    ->view('emails.welcome')
                    ->with([
                        'user' => $this->user // 👈 Pasamos el usuario a la vista
                    ]);
    }
}


