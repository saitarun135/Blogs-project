<?php

namespace App\Containers\TravelBlogs\AdminContainer\Actions;

use App\Containers\TravelBlogs\AdminContainer\Tasks\DeleteAdminContainerTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteAdminContainerAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteAdminContainerTask::class)->run($request->id);
    }
}
