<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Actions;

use App\Containers\TravelBlogs\BlogsContainer\Tasks\DeleteBlogsContainerTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteBlogsContainerAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteBlogsContainerTask::class)->run($request->id);
    }
}
