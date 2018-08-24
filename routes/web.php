<?php

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




/*
|--------------------------------------------------------------------------
| Database Raw SQL Queries
|--------------------------------------------------------------------------
*/

// INSERT
// Route::get('/insert', function() {

//     DB::insert('insert into posts(title, body, image) values(?, ?, ?)', ['PHP with Laravel', 'Laravel is the best thing ever', 'image.jpg']);
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