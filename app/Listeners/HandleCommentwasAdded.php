<?php

namespace App\Listeners;

use App\Events\CommentwasAddedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandleCommentwasAdded
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    protected $name,$email,$comment,$news_title;
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CommentwasAddedEvent  $event
     * @return void
     */
    public function handle(CommentwasAddedEvent $event)
    {
        $commentername=$this->name=$event->name;
        $commenteremail=$this->email=$event->email;
        $comment=$this->comment=$event->comment;
        $news_title=$this->news_title=$event->news_title;
        $data=[$commentername,$commenteremail,$comment,$news_title];




    }
}
