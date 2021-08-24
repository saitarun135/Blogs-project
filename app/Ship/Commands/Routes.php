<?php

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

use Illuminate\Foundation\Inspiring;
use App\Console\Commands\Hello;
use App\Jobs\greetingsJob;

Artisan::command('inspire', function () {
   $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('make:greetings', function () {
    return Log::info('Hello world,welcome to payarc');
 });
 
Artisan::command('my:job',function(){
dispatch(new greetingsJob());
});