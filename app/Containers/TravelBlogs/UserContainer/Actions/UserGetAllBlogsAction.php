<?php

namespace App\Containers\TravelBlogs\UserContainer\Actions;

use App\Containers\TravelBlogs\UserContainer\Tasks\UserGetAllBlogsTask;
use App\Ship\Parents\Actions\Action;
use Request;

class UserGetAllBlogsAction extends Action
{
    public function run(Request $request)
    {
        // $var = app(Task::class)->run($arg1, $arg2);
        $blogs=app(UserGetAllBlogsTask::class)->run();
        return $blogs;
    }
}
