<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class ModeratorApproved extends Notification
{

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting(Lang::getFromJson('Your Autorank account have been approved.'))
                    ->line(Lang::getFromJson('Your account have been approved by an admin, you may log in now using the button below:'))
                    ->action(Lang::getFromJson('Log in'), url('/login'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            Lang::getFromJson('Your Autorank account have been approved.'),
            Lang::getFromJson('Your account have been approved by an admin, you may log in now using the button below:'),
            Lang::getFromJson('Log in') . "[" . url('/login') . "]",
        ];
    }

}
