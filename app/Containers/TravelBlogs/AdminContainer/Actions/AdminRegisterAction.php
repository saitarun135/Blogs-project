<?php

namespace App\Containers\TravelBlogs\AdminContainer\Actions;

use App\Containers\TravelBlogs\AdminContainer\Tasks\AdminRegisterTask;
use App\Containers\TravelBlogs\AdminContainer\UI\API\Requests\AdminRegisterRequest;
use App\Ship\Parents\Actions\Action;

class AdminRegisterAction extends Action
{
    public function run(AdminRegisterRequest $request)
    {
       $adminRegister=app(AdminRegisterTask::class)->run(
           $request->firstName,
           $request->lastName,
           $request->email,
           $request->mobile,
           $request->password
       );
       return $adminRegister;
    }
}
