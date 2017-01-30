<?php

namespace App\Http\Controllers\NewsPortalController\NewsWriter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CatergoryModel;
use Validator;
use DB;
class CategoryController extends Controller
{

     public  function __construct()
     {
         $this->middleware('auth');
     }

    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

//        $categories=CatergoryModel::all();
//
//         return view ('news-portal.newswriter.category_index')->with('categories',$categories);

        $categories = DB::table('category')->orderBy('category.id','DESC')->paginate(10);


//        $items = NewsModel::orderBy('news_id')->paginate(5);




        return view('news-portal.newswriter.category_index',compact('categories'))

            ->with('i', ($request->input('page', 1) - 1) * 10);

    }
    /**
     * Store a newly created category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'category_name' => 'required',
            'publication_status' => 'required',
        ]);



        CatergoryModel::create($request->all());
        return redirect()->route('categories.index')

            ->with('success','Category added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Validator::make($request->all(), [
            'category_name' => 'required',
            'publication_status' => 'required',
        ]);


        CatergoryModel::find($id)->update($request->all());

        return redirect()->route('categories.index')

            ->with('success','Category updated successfully');


    }

    /**
     * Remove the specified category from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CatergoryModel::find($id)->delete();

        return redirect()->route('categories.index')

            ->with('success','Category deleted successfully');
    }
}
