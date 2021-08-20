<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Actions;

use App\Containers\TravelBlogs\BlogsContainer\Models\BlogsContainer;
use App\Containers\TravelBlogs\BlogsContainer\Tasks\CreateBlogsContainerTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateBlogsContainerAction extends Action
{
    public function run(Request $request): BlogsContainer
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateBlogsContainerTask::class)->run($data);
    }
}
