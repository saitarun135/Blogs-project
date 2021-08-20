<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Actions;

use App\Containers\TravelBlogs\BlogsContainer\Tasks\UserViewAllBlogsTask;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Requests\UserGetAllBlogsRequest;
use App\Ship\Parents\Actions\Action;

class UserGETAllBlogsAction extends Action
{
    public function run(UserGetAllBlogsRequest $request)
    {
        // $var = app(Task::class)->run($arg1, $arg2);
        $blog=app(UserViewAllBlogsTask::class)->run();
        return $blog;
    }
}
