<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Post;
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
    return view('welcome');
});

Route::get('/start/{id}', function ($id) {
    return 'hi fanyujia '.$id;
});

Route::get('user/profile',['as'=>'profile', function () {
    $url=route('profile');
    return 'hi fanyujia '.$url;
}]);

//Route::get('/post/{id}', 'PostControllers@index' );

//Route::resource('posts','PostControllers');

Route::get('contact/{id}/{name}','PostControllers@create_my_view');
/*
Route::get('/insert', function(){
    DB::insert('insert into posts(title, content) values(?, ?)', ['PHP', 'laravel']);
});
*/
/*
|--------------------------------------------------------------------------
| Eloquent
|--------------------------------------------------------------------------
*/

Route::get('/insert', function(){

    DB::insert('insert into posts(title,description) values(?, ?)',['newest','most newest news']);
});
