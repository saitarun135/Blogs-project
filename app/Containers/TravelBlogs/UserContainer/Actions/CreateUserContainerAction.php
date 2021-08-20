<?php

namespace App\Containers\TravelBlogs\UserContainer\Actions;

use App\Containers\TravelBlogs\UserContainer\Models\UserContainer;
use App\Containers\TravelBlogs\UserContainer\Tasks\CreateUserContainerTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateUserContainerAction extends Action
{
    public function run(Request $request): UserContainer
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateUserContainerTask::class)->run($data);
    }
}
