<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   protected $fillable = ['name','title','body','editName','editBody','editTitle','comment'];
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function user(){
        return $this->belongsTo(User::class);
    } 

}   
