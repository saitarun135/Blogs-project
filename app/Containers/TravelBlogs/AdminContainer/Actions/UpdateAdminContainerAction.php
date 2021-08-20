<?php

namespace App\Containers\TravelBlogs\AdminContainer\Actions;

use App\Containers\TravelBlogs\AdminContainer\Models\AdminContainer;
use App\Containers\TravelBlogs\AdminContainer\Tasks\UpdateAdminContainerTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateAdminContainerAction extends Action
{
    public function run(Request $request): AdminContainer
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateAdminContainerTask::class)->run($request->id, $data);
    }
}
