<?php
use App\Models\Post;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   $posts = Post::all();
   ddd($posts[0]);
    return view('posts', [
'posts' => $posts
    ]);
});

Route::get('posts/{post}', function ($slug) {

return view('post', [
  'post' => Post::find($slug)

]);
})->where('post', '[A-z_\-]+');
