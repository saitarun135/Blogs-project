<?php

namespace App\Containers\TravelBlogs\UserContainer\Actions;

use App\Containers\TravelBlogs\UserContainer\Tasks\DeleteUserContainerTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteUserContainerAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteUserContainerTask::class)->run($request->id);
    }
}
