<?php

namespace App\Http\Controllers\NewsPortalController\NewsWriter;

use App\NewsModel;
use App\SubCategoryModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\PostwasPublishedEvent;
use Event;
use DB;
use Carbon\Carbon;
use Auth;
use Storage;
use Image;
use App\CatergoryModel;

class NewsController extends Controller {

    public function __construct(Request $request) {
        $this->middleware('auth');
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        // $items=DB::table('news_table')->orderBy('id')->paginate(5);


   /*     $items = DB::table('users')
                        ->join('news', 'users.email', '=', 'news.author_email')
                        ->where('users.email', Auth::user()->email)
                        ->orderBy('news.id','DESC')->paginate(15);*/
        $subcategories = SubCategoryModel::all();
        $categories = CatergoryModel::all();
        $items=NewsModel::where('author_email',Auth::user()->email)->orderBy('id','DESC')->paginate(15);





//        $items = NewsModel::orderBy('news_id')->paginate(5);
/*
        $created_diff_date = array();
foreach ($items as $item) {
    $created_date = $item->created_at;
    //  Parse date with carbon
    $carbonated_date = Carbon::parse($created_date);
    //  Assuming today was 2016-07-27 12:45:32
    $created_diff_date[] = $carbonated_date->diffForHumans(Carbon::now());

}

        $updated_diff_date = array();
        foreach ($items as $item) {
            $updated_date = $item->updated_at;
            //  Parse date with carbon
            $carbonated_date = Carbon::parse($updated_date);
            //  Assuming today was 2016-07-27 12:45:32
            $updated_diff_date[] = $carbonated_date->diffForHumans(Carbon::now());

        }*/



        return view('news-portal.newswriter.index', compact('items'))
           /* ->with('created_diff_date',$created_diff_date)
            ->with('updated_diff_date',$updated_diff_date)*/
                        ->with('i', ($this->request->input('page', 1) - 1) * 15)

            ->withCategories($categories)
            ->with('subcategories', $subcategories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $subcategories = SubCategoryModel::all();
        $categories = CatergoryModel::all();
        return view('news-portal.newswriter.create_news')
                        ->withCategories($categories)
                        ->with('subcategories', $subcategories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        /* Validator::make($this->request->all(), [
          'news_title' => 'required',
          'category_id'=>'required',
          'short_description' => 'required|max:100',
          'long_description' => 'required',
          'image'=>'required',
          ]);


          NewsModel::create($this->request->all());

          return redirect()->route('newsaction.index')

          ->with('flash_message','Item created successfully'); */



        /* $news = new NewsModel(array(
          'news_title' => $request->get('news_title'),
          'category_id'  => $request->get('category_id'),
          'author_email'  => $request->get('author_email'),
          'short_description'  => $request->get('short_description'),
          'subcategory_id'  => $request->get('subcategory_id'),
          'long_description'  => $request->get('long_description'),

          'image'=>$request->file('image')->getClientOriginalName(),

          )); */

        $news = new NewsModel();
        $news->news_title = $request->get('news_title');
        $news->category_id = $request->get('category_id');
        $news->subcategory_id = $request->get('subcategory_id');
        $news->author_name = $request->get('author_name');
        $news->author_email = $request->get('author_email');
        $news->short_description = $request->get('short_description');
        $news->long_description = $request->get('long_description');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/newswriter/' . $fileName);
            Image::make($image)->save($location);
            $news->image = $fileName;
        }

        $news->save();
        /* $imageName = $request->file('image')->getClientOriginalName();

          $request->file('image')->move(
          base_path() . '/public/images/newswriter/', $imageName
          ); */

        return redirect()->route('newsaction.index')
                        ->with('flash_message', 'Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $item = NewsModel::find($id);

        return view('news-portal.newswriter.show_news', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $categories = CatergoryModel::all();
        $item = NewsModel::find($id);

        return view('news-portal.newswriter.edit_news', compact('item'))
                        ->withCategories($categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id) {/*
      Validator::make($this->request->all(), [
      'news_title' => 'required',
      'short_description' => 'required|max:100',
      'long_description' => 'required',
      'image'=>'required',
      ]);

      NewsModel::find($id)->update($this->request->all()); */

        $news = NewsModel::find($id);
        $news->news_title = $this->request->get('news_title');
        $news->category_id = $this->request->get('category_id');
        $news->subcategory_id = $this->request->get('subcategory_id');
        $news->author_name = $this->request->get('author_name');
        $news->author_email = $this->request->get('author_email');
        $news->short_description = $this->request->get('short_description');
        $news->long_description = $this->request->get('long_description');

        if ($this->request->hasFile('image')) {
            //add the new photo
            $image = $this->request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/newswriter/' . $fileName);
            Image::make($image)->save($location);
            $oldFileName = $news->image;

            // update the databsase
            $news->image = $fileName;

            //delete old file
            Storage::delete($oldFileName);
        }

        $news->save();


        return redirect()->route('newsaction.index')
                        ->with('flash_message', 'Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $news = NewsModel::find($id);
        Storage::delete($news->image);
        $news->delete();

        return redirect()->route('newsaction.index')
                        ->with('flash_message', 'Item deleted successfully');
    }

//    public function changeStatus($id){
//
//        $item=NewsModel::find($id);
//
//// pending news changing into published news
//        if ($item->publication_status==0){
//
//
//           $event[]= Event::fire(new PostwasPublishedEvent($item->id,$item->news_title,$item->author_name,$item->author_email));
//            if (count($event)>0) {
//                $item->update(['publication_status' => 1]);
//                $item->save();
//                return redirect()->route('newsaction.index')
//                    ->with('flash_message', 'Your Post has been Published, Please Check out your Email...');
//            }
//            else{
//                return redirect()->route('newsaction.index')
//                    ->with('flash_message', 'Sorry, the post could not be published...'  );
//            }
//
//
//
//
//
//        }
//        else{
//            // if the status is true,make it false
//            $item->update(['publication_status'=>0]);
//            $item->save();
//            return redirect()->route('newsaction.index')
//                ->with('flash_message', 'Status Changed to Pending ');
//        }
//
//     /*   $approvalitem->publication_status=$this->request->get('approve');
//        $approvalitem->save();
//        return redirect()->route('newsaction.index')
//            ->with('flash_message', 'Action Successful');*/
//    }





}
