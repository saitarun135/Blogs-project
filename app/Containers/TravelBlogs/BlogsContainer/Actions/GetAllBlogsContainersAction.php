<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Actions;

use App\Containers\TravelBlogs\BlogsContainer\Tasks\GetAllBlogsContainersTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllBlogsContainersAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllBlogsContainersTask::class)->addRequestCriteria()->run();
    }
}
