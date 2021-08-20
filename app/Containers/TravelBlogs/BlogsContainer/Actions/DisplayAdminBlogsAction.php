<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Actions;

use App\Containers\TravelBlogs\BlogsContainer\Tasks\DisplayAdminBlogsTask;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Requests\DisplayAdminBlogsRequest;
use App\Ship\Parents\Actions\Action;

class DisplayAdminBlogsAction extends Action
{
    public function run(DisplayAdminBlogsRequest $request)
    {
        // $var = app(Task::class)->run($arg1, $arg2);
        $myblogs=app(DisplayAdminBlogsTask::class)->run();
        return $myblogs;
    }
}
