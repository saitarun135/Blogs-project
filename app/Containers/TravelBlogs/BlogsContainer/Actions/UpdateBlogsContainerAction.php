<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Actions;

use App\Containers\TravelBlogs\BlogsContainer\Models\BlogsContainer;
use App\Containers\TravelBlogs\BlogsContainer\Tasks\UpdateBlogsContainerTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateBlogsContainerAction extends Action
{
    public function run(Request $request): BlogsContainer
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateBlogsContainerTask::class)->run($request->id, $data);
    }
}
