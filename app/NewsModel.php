<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    protected $table = "news";// the table in database for blog collection purpose

    //the coloumns in the database that are needed to filled with the form:registration
    protected $fillable = [
        'news_title','category_id','subcategory_id','author_name','author_email','short_description','long_description','image','publication_status'
    ];


    public function category(){

        return $this->belongsTo('App\CatergoryModel');
    }

    public function subcategory(){

        return $this->belongsTo('App\SubCategoryModel');
    }
    // news belong to user..news is written by a user
    public function user(){

        return $this->belongsTo('App\User');
    }

    public function comments(){

        return $this->hasMany('App\CommentModel');
    }


}