<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;
class NewAccess extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->view('mails.newAccess')->with([
            'name' => $this->user->name,
            'email' => $this->user->email,
            'dateTime' => now()->setTimezone('America/Sao_Paulo')->format('d-m-Y H:i:s'),
        ])->attach(base_path().'arquivos/arquivos.pdf');
    }
}
