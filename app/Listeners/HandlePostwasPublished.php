<?php

namespace App\Listeners;

use App\Events\PostwasPublishedEvent;
use Mail;
use App;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class HandlePostwasPublished
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    protected $id,$news_title,$author_name,$author_email;
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PostwasPublished  $event
     * @return void
     */
    public function handle(PostwasPublishedEvent $event)
    {

        $news_id=$this->id=$event->id;
        $news_title=$this->news_title=$event->news_title;
        $author_name=$this->author_name=$event->author_name;
        $author_email=$this->author_email=$event->author_email;
        $data=[$news_id,$news_title,$author_name,$author_email];





        Mail::send('news-portal.admin.publishedmail',['news_title'=>$data[1],'author_name'=>$data[2]], function($message) use ($data) {
            $message->from('shramik41@gmail.com', "TechNews");
            $message->subject("Post Published");
            $message->to($data[3]);
        });

        $notifytext=$news_title." "."has been published";
        $pusher = App::make('pusher');

        $pusher->trigger( 'postpublished-channel',
            'postpublished-notification',
            array('text' =>$notifytext));




    }
}
