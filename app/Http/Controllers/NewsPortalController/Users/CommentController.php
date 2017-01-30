<?php

namespace App\Http\Controllers\NewsPortalController\Users;

use App\CommentModel;
use App\Events\CommentwasAddedEvent;
use Session;
use Auth;
use Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function __construct(Request $request)
    {
       $this->request=$request;

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $comments=CommentModel::where('news_author_email',Auth::user()->email)->orderBy('id','DESC')->paginate(5);



            return view('news-portal.newswriter.comments_list', compact('comments'))
                ->with('i', ($this->request->input('page', 1) - 1) * 5);





    }


    public function changeCommentStatus($id){
        $comment=CommentModel::find($id);
        if($comment->comment_status==1){
            $comment->update(['comment_status'=>0]);
            $comment->save();
            return redirect()->route('comment_index')
                ->with('flash_message', 'Comment Status Changed to Pending');
        }
        else{
            $comment->update(['comment_status'=>1]);
            $comment->save();
            return redirect()->route('comment_index')
                ->with('flash_message', 'Comment Status Changed to Published');
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $comm=new CommentModel();
        $comm->name=$this->request->get('name');
        $comm->email=$this->request->get('email');
        $comm->comment=$this->request->get('comment');
        $comm->comment_status=$this->request->get('comment_status');
        $comm->news_id=$this->request->get('news_id');
        $comm->news_title=$this->request->get('news_title');
        $comm->news_author_email=$this->request->get('news_author_email');
        $comm->save();

       // Event::fire(new CommentwasAddedEvent($comm->name,$comm->email,$comm->comment,$comm->news_title));

        Session::flash('flash_message',"Comment Success");
        return redirect()->back();



    /*
            $comment=Request::all();
            CommentModel::create($comment);
            $id = DB::getPdo()->lastInsertId();
            $arr = Message::DetailMessage($id);
            $arr['new_count_message'] = count(CommentModel::CountNewMessage());
            $arr['success'] = true;
            $arr['notif'] = '<div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 alert alert-success" role="alert"> <i class="fa fa-check"></i><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Message sent ...</div>';

            return json_encode($arr);*/
    }






    public function indexNotifications(){

        $contents['ListMessage']      = CommentModel::ListMessage();
        $contents['CountNewMessage']  = count(CommentModel::CountNewMessage());

        return view('news-portal.commonlayouts.writer_admin_navbar',$contents);

    }

    public function updateSeen($id){
        $arr= CommentModel::find($id);
        CommentModel::UpdateSeen($id);
        $arr['update_count_message'] = count(CommentModel::CountNewMessage());
        return json_encode($arr);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {/*
        $comments = NewsModel::find($id)->comments;


        return view('news-portal.users.single', compact('comments'));*/

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




}
