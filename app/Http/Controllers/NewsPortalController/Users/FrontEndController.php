<?php

namespace App\Http\Controllers\NewsPortalController\Users;

use App\CommentModel;
use App\NewsModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontEndController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }



     public function searchNews(){
         if ($this->request->get('q')== NULL){
           return redirect()->back();
         }

         $query = $this->request->get('q');
         $items=NewsModel::where('news_title','LIKE','%'.$query.'%')->get();
         return view('news-portal.users.search')
             ->withItems($items)
             ->withQuery($query);


//         $data=array();
//         foreach ($items as $item) {
//             $data[]=array('value'=>$item->news_title,'id'=>$item->id);
//         }
//         if (count($data)) {
//            return $data;
//        } else {
//            return ['value' => 'No Result Found', 'id' => ''];
//        }
    }


    public function autocomplete(Request $request)

    {
        $data = NewsModel::select("news_title as name")->where("news_title","LIKE","%{$request->input('query')}%")->get();

        return response()->json($data);

    }

    public function getNews(){

        $items=NewsModel::where('publication_status','=',1)->orderBy('created_at','DESC')->limit(6)->get();
        return view('news-portal.users.front_show')->withItems($items);

    }

    public function fetchSingle($id) {
        //fetch the comments that belonged to the particular news id
        $comments=CommentModel::where('news_id','=',$id)
            ->where('comment_status','=',1)
            ->get();

        // fetch from the DB based on id
        $item = NewsModel::where('id', '=', $id)->first();
        dd($item);
        // return the view and pass in the post object
        return view('news-portal.users.single')
            ->withItem($item)
            ->withComments($comments);
    }

  /* public function fetchSingle($id){
        $item=NewsModel::find($id);
        return view('news-portal.users.single',compact('item'));
    }*/


    
   





}

