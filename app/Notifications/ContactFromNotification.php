<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactFromNotification extends Notification
{
    use Queueable;

    private $form;

    public function __construct(array $form)
    {
        $this->form = $form;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('FORMULARZ KONTAKTOWY - Baltic Tennis Club Kołobrzeg')
            ->greeting('Cześć!')
            ->line('Imię i nazwisko: ' . $this->form['name'] . ' ' . $this->form['surname'])
            ->line('Email: ' . $this->form['email'])
            ->line('Numer telefonu: ' . $this->form['phoneNumber'])
            ->line('Treść: ' . $this->form['message'])
            ->salutation('      ')
            ->replyTo($this->form['email'], $this->form['name'] . ' ' . $this->form['surname']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
