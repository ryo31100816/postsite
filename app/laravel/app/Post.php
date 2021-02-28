<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable  = [
        'user_id', 'contents'
    ];
    //テーブル名をプロパティ記述しなくてもよい
    //指定すればそのテーブルを見に行くようにもできる
    public function images()
    {
        return $this->hasMany('App\Image', 'post_id', 'id');
    }

}
