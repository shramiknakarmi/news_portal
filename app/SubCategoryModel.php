<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoryModel extends Model
{
    protected $table="subcategory";
    protected $fillable = ['subcategory_name','category_id'];


    public function category(){

        return $this->belongsTo('App\CatergoryModel');
    }

    public function news(){

        return $this->belongsTo('App\NewsModel');
    }




}
