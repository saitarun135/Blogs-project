<?php

namespace App\Containers\TravelBlogs\AdminContainer\Actions;

use App\Containers\TravelBlogs\AdminContainer\Tasks\GetAllAdminContainersTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllAdminContainersAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllAdminContainersTask::class)->addRequestCriteria()->run();
    }
}
