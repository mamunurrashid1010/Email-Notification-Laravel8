<?php

use App\Models\User;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Notification;
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
    return view('welcome');
});

Route::get('/sendNotification', function () {
    $user=User::first();

    # Using The Notifiable Trait
    $user->notify(new EmailNotification());

    # Using The Notification Facade
    Notification::send($user, new EmailNotification());

    echo "Email notification successfully send";
});

/** send email notification all user */
Route::get('/sendNotificationAllUser',function (){
   $users=User::all();
   foreach($users as $user){
       Notification::send($user, new EmailNotification($user->name));
   }
});
