<?php
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

    return view ('Welcome');

});

/*


Route::get('/about', function () {

    return "Hi about page";

});

Route::get('/contact', function () {

    return "Hi I am contact";

});


Route::get('/post/{id}/{name}', function ($id, $name) {

    return "This is post number ". $id . " " . $name;

});

Route::get('admin/posts/example', array('as'=>'admin.home' ,function(){

    $url = route('admin.home');

    return "this url is ". $url;
}));

*/
//Route::get('/post/{id}', '\App\Http\Controllers\PostsController@index');


//Route::resource('posts', 'PostsController');

/*
    The way the tutorial shows was not working.
    The route resource below was copied from Laravel
    Documenttation on # Resource Controllers

*/

//use App\Http\Controllers\PostsController;

//Route::resource('posts', PostsController::class);

/*
Route::get('/contact', '\App\Http\Controllers\PostsController@contact'); 



Route::get('post/{id}/{name}/{password}', '\App\Http\Controllers\PostsController@show_post');
 
 



Route::get('/insert', function(){

   DB::insert('insert into posts(title, content) values(?, ?)', ['Whats with you', 'Whats Up']);
 //   DB::insert('insert into users(name, email, password, remember_token) values(?, ?, ?, ?)', ['Malachi', 'Malachi@gmail.com', 'password', 'Ball_scratcher']);
 // DB::insert('insert into roles(name) values(?)', ['subscriber']);
 //DB::insert('insert into role_user(user_id, role_id) values(?, ?)', ['2', '2']);


});



//DATABASE Raw SQL Queries

/*
Route::get('/read', function(){

  $results = DB::select('select * from posts where id = ?', [1]); 

  foreach($results as $post){

    return $post->title;
  }

});
*/


/*

Route::get('/update', function(){

    $updated = DB::update('update posts set title = "Update title" where id = ?', [5]);

    return $updated;


});



Route::get('/delete', function(){

    $deleted = DB::delete('delete from posts where id = ?', [1]);
    
});

*/


/*
Eloquent----------------------------------------------------------------
*/

/*
Route::get('/read', function(){

$posts = Post::all();


foreach($posts as $post) {

    return $post->title;

}

});
*/

/*

Route::get('/find', function(){


    $posts = App/Models/Posts::find(2);
    
    return $post->title;
    

    
    
});









Route::get('/findwhere', function(){

    $posts = Post::where('id', 2)->orderBy('id', 'desc')->get();

    return $posts;

});


Route::get('/basicinsert', function(){

$post = new Post;

$post->title = 'New Eloquent title insert';
$post->content = 'Wow eloquent is really cool, look at this content';

$post->save();

});




/*
Route::get('/softdelete', function(){

    Post::find(1)->delete();
    
});
*/
/*
Route::get('/readsoftdelete', '\App\Http\Controllers\PostController@readsoftdelete', function(){
    $post = Post::withTrashed()->where('id', 1)->get();
    return $post;
});
*/

//////////////////////////////////////////////////////////////////////////   
//                    Eloquent Relationships                            //
//////////////////////////////////////////////////////////////////////////
/*
/////////////       One to One Relationship             //////////////////
Route::get('/user/{id}/post', function($id){
    return User::find($id)->post->title;
});
*/

/*
/////////           Inverse Rekationship                //////////////////
Route::get('/post/{id}/user', function($id){
    return Post::find($id)->user->name;
});
*//*
///////         One to Many Relationships               //////////////////
Route::get('/posts', function($id){
    $user = User::find(1);
    foreach($user->posts as $post) {
      echo $post->title . "<br>";  
    }
});

//////      Many to Many relationships //////////////////
Route::get('/user/{id}/role', function($id){
    $user = User::find($id);

    foreach($user->roles as $role){
        return $role->name;
    }
});

////// Accessing the  intermediate table / pivot //////////////////
Route::get('user/pivot', function(){
    $user = User::find(1);
    foreach($user->roles as $role){
        return $role->created_at;
    }
});

*/
//////////////////////////////////////////////////////////////////////////   
//                    CRUD Application                            //
//////////////////////////////////////////////////////////////////////////

use App\Http\Controllers\PostsController;
//Route::resource('/post','PostsController');
Route::resource('posts', PostsController::class);