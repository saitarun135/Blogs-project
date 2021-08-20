<?php

namespace App\Containers\TravelBlogs\AdminContainer\Actions;

use App\Containers\TravelBlogs\AdminContainer\Models\AdminModel;
use App\Containers\TravelBlogs\AdminContainer\Tasks\AdminLoginTask;
use App\Containers\TravelBlogs\AdminContainer\UI\API\Requests\AdminLoginRequest;
use App\Ship\Parents\Actions\Action;
use JWTAuth;

class AdminLoginAction extends Action
{
    public function run(AdminLoginRequest $request)
    {
        // $var = app(Task::class)->run($arg1, $arg2);
        $adminLogin=app(AdminLoginTask::class)->run(
            $request->email,
            $request->password
        );
        return $adminLogin;  
    }
}
