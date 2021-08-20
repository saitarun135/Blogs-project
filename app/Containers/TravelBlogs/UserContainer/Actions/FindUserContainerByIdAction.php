<?php

namespace App\Containers\TravelBlogs\UserContainer\Actions;

use App\Containers\TravelBlogs\UserContainer\Models\UserContainer;
use App\Containers\TravelBlogs\UserContainer\Tasks\FindUserContainerByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindUserContainerByIdAction extends Action
{
    public function run(Request $request): UserContainer
    {
        return app(FindUserContainerByIdTask::class)->run($request->id);
    }
}
