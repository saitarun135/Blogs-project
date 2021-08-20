<?php

namespace App\Containers\TravelBlogs\AdminContainer\Actions;

use App\Containers\TravelBlogs\AdminContainer\Models\AdminContainer;
use App\Containers\TravelBlogs\AdminContainer\Tasks\FindAdminContainerByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindAdminContainerByIdAction extends Action
{
    public function run(Request $request): AdminContainer
    {
        return app(FindAdminContainerByIdTask::class)->run($request->id);
    }
}
