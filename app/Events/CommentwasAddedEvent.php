<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CommentwasAddedEvent
{
    use InteractsWithSockets, SerializesModels;

    public $name;
    public $email;
    public $comment;
    public $news_title;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($name,$email,$comment,$news_title)
    {
        $this->name-$name;
        $this->email=$email;
        $this->comment=$email;
        $this->news_title=$news_title;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return [];
    }
}
