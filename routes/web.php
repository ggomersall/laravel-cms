<?php

use App\Post;
use App\User;
use App\Country;

/*
|--------------------------------------------------------------------------
| Web Routess
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

/*
|--------------------------------------------------------------------------
| Eloquent Relationships
|--------------------------------------------------------------------------
*/

// has one 
// Route::get('user/{id}/post', function ($id) {
//     return User::find($id)->post->title;
// });

// belongs to
// Route::get('/post/{id}/user', function ($id) {
//     return Post::find($id)->user;
// });

// one to many
// Route::get('posts', function () {
//    $user = User::find(1);

//    foreach ($user->posts as $post) {
//         echo $post;
//     }
// });

// belong to many
// Route::get('user/{id}/roles', function ($id) {
//     // // way one
//     // $user = User::find($id);
//     // foreach ($user->roles as $role) {
//     //     echo $role->role; 
//     // }

//     // way two
//     // $user = User::find($id)->roles()->orderBy('id', 'asc')->get();
//     // return $user;
// });


// accessing pivot / look up table table
// Route::get('user/pivot', function () {
//     $user = User::find(1);

//     foreach($user->roles as $role) {
//         echo $role->pivot;
//     }
// });

// has many through
Route::get('user/country/{id}', function ($id) {
    $country = Country::find($id);
    foreach($country->posts as $post) {
        echo $post->title;
    }
});

/*
|--------------------------------------------------------------------------
| Eloquent ORM
|--------------------------------------------------------------------------
*/

// READ
// Route::get('/read', function() {
//     $posts = Post::all();
//     foreach($posts as $post) {
//         return $post->title;
//     }
// });

// FIND
// Route::get('/find', function() {
//     $post = Post::find(2);
//     return $post->title;
// });

// FIND WHERE
// Route::get('/find-where', function() {
//     $posts = Post::where('isAdmin', 0) // 0 means false
//         ->orderBy('id', 'asc')
//         ->take(3)
//         ->get();
//     return $posts;
// });

// FIND MORE
// Route::get('/find-more', function () {
//     // method 1
//     // $posts = Post::findOrFail(3);
//     // return $posts;

//     // method 2
//     $posts = Post::where('isAdmin', '<', 50)
//         ->firstOrFail();
//     return $posts;
// });

// INSERT
// Route::get('/insert', function() {
//     $post = new Post;
//     $post->id = 3;
//     $post->title = 'blah ORM Title';
//     $post->body = 'Wow awesome stuff going on here';
//     $post->image = 'image2.png';
//     $post->isAdmin = true;

//     $post->save();

//     return $post;
// });

// UPDATE
// Route::get('/update', function () {
//     // method one
// //     $post = Post::find(3);
// //     $post->title = 'SHIT it works';
// //     $post->body = 'ok this really does work and is way cooler than i thought';
// //     $post->save();
// //     return $post;

//     // method two
//     Post::where('id', 2)
//         ->where('isAdmin', 0)
//         ->update([
//             'title' => 'BLAH NEW PHP LARAVEL TITLE',
//             'body' => 'i love this course',
//         ]);
// });

// CREATE
// Route::get('/create', function() {
//     Post::create([
//         'title'=>'the NEW create method',
//         'body'=>'wow learning so much from this course',
//         'image'=>'image_new-blah.jpg',
//     ]);
// });

// DELETE
// Route::get('/delete', function () {
//     // method one
//     // $post = Post::find(7);
//     // $post->delete();

//     // method two single
//     Post::destroy(8);

//     // method two multiple
//     // Post::destroy([
//     //     2,
//     //     3,
//     // ]);
// });

// SOFT DELETE / MOVE TO TRASH
// Route::get('/trash', function() {
//     Post::find(10)
//         ->delete();
// });

// RETRIEVE TRASH ITEMS
// Route::get('/get-trash', function() {

//     // return all items - even if trashed
//     // $post = Post::withTrashed()->where('isAdmin', 0)->get();
//     // return $post;

//     //return only trashed items
//     $post = Post::onlyTrashed()->where('isAdmin', 0)->get();
//     return $post;
// });

// RESTORE TRASH ITEMS
// Route::get('/restore', function () {
//     Post::withTrashed()->where('isAdmin', 0)->restore();
// });

// Force DELETE TRASH
// Route::get('/force-delete', function() {
//     Post::onlyTrashed()->where('isAdmin', 0)->forceDelete();
// });




/*
|--------------------------------------------------------------------------
| Database Raw SQL Queries
|--------------------------------------------------------------------------
*/

// INSERT
// Route::get('/insert', function() {

//     DB::insert('insert into posts(title, body, image) values(?, ?, ?)', ['FOOEEEE', 'Laravel is the best coool', 'image2.jpg']);
// });


// READ
// Route::get('/read', function(){
//     $results = DB::select('select * from posts where id = ?', [1]);

//     foreach method
//     foreach($results as $post) {
//         return $post->title;
//     }

//     // return array method
//     // return $results;

//     // var_dump() method
//     // return var_dump($results); 
// });

// UPDATE
// Route::get('/update', function() {
//     $updated = DB::update('update posts set title = "New Updated Title" where id = ?', [1]);

//     return $updated;
// });

// DELETE
// Route::get('/delete', function() {
//     $deleted = DB::delete('delete from posts where id = ?', [1]);
//     return $deleted;
// });