<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatergoryModel extends Model
{
  protected $table = 'category';

    protected $fillable = [
        'category_name','publication_status'];

    public function news()
    {
        return $this->hasMany('App\NewsModel');
    }

    public function subcategory()
    {

        return $this->hasMany('App\SubCategoryModel');
    }
}
