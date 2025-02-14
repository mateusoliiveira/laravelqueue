<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\ProcessRabbitMQMessage;

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

Route::get("/send-message", function () {
    ProcessRabbitMQMessage::dispatch();

    return 'Message sent to RabbitMQ!';
});
