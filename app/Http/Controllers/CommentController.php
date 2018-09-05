<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function addComment(Post $post){
        
        Comment::create([
             'body' => request('com'),
             'post_id' => $post->id
         ]);
         return redirect('/show');
    }
    public function editComment($id){
        Comment::where('id',$id)->update([

        ]);
    }
    public function deleteComment($id){
        Comment::where('id',$id)->delete();
        return redirect('/show');
    }
}
