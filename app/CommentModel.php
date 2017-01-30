<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    protected $table="comment";
    protected $fillable=['name','email','comment','news_id','news_title','news_author_email','comment_status'];

    public function news(){
        return $this->belongsTo('App\NewsModel');
    }


    public function scopeListMessage()
    {
        return $this->orderBy('created_at','DESC')->get();
    }

    public function scopeCountNewMessage()
    {
        return $this->where('comment_status',0)->get();
    }

    public function scopeUpdateSeen($query,$id)
    {
        return $query->where('id',$id)->update(['comment_status'=>1]);
    }

    public function scopeDetailMessage($query,$id)
    {
        return $query->find($id)->toArray();
    }


}
