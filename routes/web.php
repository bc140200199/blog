<?php
// use App\Task;
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
// Route::get('/tasks', 'TasksController@index');
// Route::get('/tasks/{task}' , 'TasksController@show');
Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');
Route::post('/posts/{post}/comments', 'commentsController@store');
// Route::get('/', function () {
// 	return view('welcome');
// });

// Route::get('about', function(){
// 	return view('about');
// });
// Route::get('/tasks', function() {
//  $tasks = Task::all();
// 	// $tasks = DB::table('tasks')->get();
// 	// return $tasks;

// 	return view('tasks.index',compact('tasks'));
// });
// Route::get('/', function () {
// 	$tasks = [
// 		'Go to the store',
// 		'Finish my screencast',
// 		'Clean the house'
// 	];
// 	return view ('welcome', compact('tasks'));
// });


// Route::get('/tasks', function() {
// 	$tasks = DB::table('tasks')->latest()->get();
// 	// return $tasks;
// 	// dd($task);
// 	return view('tasks.index',compact('tasks'));
// });
// Route::get('/tasks/{task}', function($id) {
// 	$task =Task::find($id);
// 	// return $tasks;
	// dd($task);
// 	return view('tasks.show',compact('task'));
// });