<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter\parseFile;

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
    $document = YamlFrontMatter::parseFile(
        resource_path('posts/my-fourth-post.html')
    );

    ddd($document);

 //   return view('posts', [
//'posts' => Post::all()
//  ]);
});

Route::get('posts/{post}', function ($slug) {

return view('post', [
  'post' => Post::find($slug)

]);
})->where('post', '[A-z_\-]+');
