<?php
Route::get('/display', function () {
    return view('layout');
});
Route::get('/create','postController@create');
Route::get('/show','postController@show');
Route::post('/show','postController@give');
Route::get('/onePost/{post}','postController@one');
Route::get('/delete/{post}','postController@delete');
Route::get('/changeDialog/{post}','postController@dia');
Route::post('/modify/{take}','postController@editPost');
Route::post('/addComment/{post}/comments','CommentController@addComment');
Route::get('/commentDelete/{post}','CommentController@deleteComment');
Route::get('/commentEdit/{post}','CommentController@editComment');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
