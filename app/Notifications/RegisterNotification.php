<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Crypt;

class RegisterNotification extends Notification
{
    use Queueable;

    protected $name, $otp, $user_id;

    /**
     * Create a new notification instance.
     */
    public function __construct($user_id, $otp, $name)
    {
        $this->user_id = $user_id;
        $this->otp = $otp;
        $this->name = $name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject("Please verify your email")
                    ->greeting("Hi " . $this->name)
                    ->line('Welcome to Happy Habits.')
                    ->line('Please copy the below otp')
                    ->line("OTP: " . $this->otp)
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
