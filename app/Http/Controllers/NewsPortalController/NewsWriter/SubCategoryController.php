<?php

namespace App\Http\Controllers\NewsPortalController\NewsWriter;

use App\CatergoryModel;
use App\SubCategoryModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


class SubCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories=CatergoryModel::all();
        $subcategories = SubCategoryModel::orderBy('id','DESC')->paginate(10);;

        return view('news-portal.newswriter.subcategory_index',compact('subcategories'))
        ->withCategories($categories)
        ->with('i', ($request->input('page', 1) - 1) * 10);





    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

          $categories=CatergoryModel::all();
        return view ('news-portal.newswriter.create_subcategory')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SubCategoryModel::create($request->all());
        return redirect()->route('subcategories.index')

            ->with('flash_message','Subcategory Added ✓');


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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

        SubCategoryModel::find($id)->update($request->all());

        return redirect()->route('subcategories.index')

            ->with('success','Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        SubCategoryModel::find($id)->delete();

        return redirect()->route('subcategories.index')

            ->with('success','Subcategory deleted successfully');
    }
}
