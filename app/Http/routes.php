<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello','Controller@curldemo');

Route::get('test', function () {
     $response = Curl::to('http://intactinnovations.com/pages/search.php?q=intact')
        ->get();
        print_r($response);
        //dd($response);
});

Route::get('test1', function () {
$response = Curl::to('http://intactinnovations.com/img/innerTop.jpg')
        ->withContentType('image/jpg')
        ->download('/path/to/dir/image.png');

});

// captcha code
Route::get('web-register', 'Auth\AuthController@webRegister');
Route::post('web-register', 'Auth\AuthController@webRegisterPost');