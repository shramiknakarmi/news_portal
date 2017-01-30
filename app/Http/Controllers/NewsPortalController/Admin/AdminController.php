<?php

namespace App\Http\Controllers\NewsPortalController\Admin;

use App\NewsModel;
use App\Events\PostwasPublishedEvent;
use App\User;
use Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request=$request;
    }

    public function getNewsList(){
        if (\Auth::user()->role==0) {
            $items = NewsModel::orderBy('id', 'DESC')->paginate(15);
            return view('news-portal.admin.news_list', compact('items'))
                /* ->with('created_diff_date',$created_diff_date)
                 ->with('updated_diff_date',$updated_diff_date)*/
                ->with('i', ($this->request->input('page', 1) - 1) * 15);
        }
        else{
            return redirect()->back();
        }
    }
    public function changeStatus($id)
    {
        $item=NewsModel::find($id);


// pending news changing into published news
        if ($item->publication_status==0){



            $event[]= Event::fire(new PostwasPublishedEvent($item->id,$item->news_title,$item->author_name,$item->author_email));
            if (count($event)>0) {
                $item->update(['publication_status' => 1]);
                $item->save();
                return redirect()->route('news_list')
                    ->with('flash_message', 'Your Post has been Published, Please Check out your Email...');
            }
            else{
                return redirect()->route('news_list')
                    ->with('flash_message', 'Sorry, the post could not be published...'  );
            }
        }
        else{
            // if the status is true,make it false
            $item->update(['publication_status'=>0]);
            $item->save();
            return redirect()->route('news_list')
                ->with('flash_message', 'Status Changed to Pending ');
        }



    }

    public function notifyWriterAboutStatus($id){
        $item=NewsModel::find($id);
        $admin_email=Auth::user()->email;

        $resp=$item->notify(new \App\Notifications\PostPublished($admin_email,$item->news_title,$item->author_name,$item->author_email));

        return $resp;

    }
}
