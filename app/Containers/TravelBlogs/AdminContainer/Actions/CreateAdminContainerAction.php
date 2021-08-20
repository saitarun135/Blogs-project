<?php

namespace App\Containers\TravelBlogs\AdminContainer\Actions;

use App\Containers\TravelBlogs\AdminContainer\Models\AdminContainer;
use App\Containers\TravelBlogs\AdminContainer\Tasks\CreateAdminContainerTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateAdminContainerAction extends Action
{
    public function run(Request $request): AdminContainer
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateAdminContainerTask::class)->run($data);
    }
}
