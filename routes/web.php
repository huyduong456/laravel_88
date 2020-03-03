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

// Route::get('/admin/longbau', function () {
//     return view('welcome');
// });

// Route::get('user', function () {
//     echo "hi hi he he";
// });

// Route::get('', function () {
//     echo "trang chu";
// });

// // route động
// Route::get('user/{name}', function ($name) {
//     echo $name;

// });
// //route nhiều tham số động
// Route::get('hihi/{id}/{hi}-{he}', function ($id,$hi,$he) {

//     echo $id;
//     echo '<br/>';
//     echo $hi;
//     echo '<br/>';
//     echo $he;
// });

use Illuminate\Routing\Route;

Route::group([
    'prefix' => 'user',
    'middleware' => 'guest'
], function(){

Route::get('','usercontroller@getuser');

Route::get('/edit/{idUser}','edituser@getedit_user');
Route::post('/edit/{idUser}','edisetur@postedit_user');

Route::get('/add','adduser@getadd_user');
Route::post('/add', 'adduser@postadd_user');

Route::get('/del/{idUser}','usercontroller@delUser');
});
