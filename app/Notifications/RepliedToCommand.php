<?php

namespace App\Notifications;
use App\Command; 

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RepliedToCommand extends Notification
{
    use Queueable;

    protected $command;

    public function __construct(Command $command)
    {
        $this->command=$command;
    }

  
    public function via($notifiable)
    {
        return ['database'];
    }

   
    public function toArray($notifiable)
    {
        return [
            $data = 'We Have New Command ' .$command->adress ." <br> Added By " . $command->name
        ];
    }
}
