<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Actions;

use App\Containers\TravelBlogs\BlogsContainer\Models\BlogsContainer;
use App\Containers\TravelBlogs\BlogsContainer\Tasks\FindBlogsContainerByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindBlogsContainerByIdAction extends Action
{
    public function run(Request $request): BlogsContainer
    {
        return app(FindBlogsContainerByIdTask::class)->run($request->id);
    }
}
