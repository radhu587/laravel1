<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function addComment(Post $post){
        
        // Comment::create([
        //     'body' => request('com'),
        //     'post_id' => 1
        // ]);
    }
}
