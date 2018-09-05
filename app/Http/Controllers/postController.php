<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class postController extends Controller
{
    function create(){
        return view('posts.createPost');
    }
    function show(){
        $take = Post::latest()->get();
        return view('posts.showPost',compact('take'));
    }
    function give(){
        $this->validate(request(),[
            'name' => 'required',
            'title' => 'required',
            'body' => 'required'
        ]);
        Post::create([
            'name' => request('name'),
            'title' => request('title'),
            'body' => request('body')
        ]);
       return redirect('/show');
    }
    function one(Post $post){
        return view('posts.showOne',compact('post'));
    }
    function delete($id){
        Post::where('id',$id)->delete();
        Comment::where('post_id',$id)->delete();
        return redirect('/show');
    }
    function dia(Post $post){
        return view('posts.modifyPost',compact('post'));
    }
    function editPost($id){
       Post::where('id',$id)->update([
           'name' => request('editName'),
           'title' => request('editTitle'),
           'body' => request('editBody')
       ]);
       return redirect('/show');
    } 
}
