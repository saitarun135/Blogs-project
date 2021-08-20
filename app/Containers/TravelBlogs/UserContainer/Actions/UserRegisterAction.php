<?php

namespace App\Containers\TravelBlogs\UserContainer\Actions;

use App\Containers\TravelBlogs\UserContainer\UI\API\Requests\UserRegisterRequest;
use App\Ship\Parents\Actions\Action;
use App\Containers\TravelBlogs\UserContainer\Models\UserContainer;
use App\Containers\TravelBlogs\UserContainer\Models\UserModel;
use App\Containers\TravelBlogs\UserContainer\Tasks\CreateUserByDetailsTask;
use App\Containers\TravelBlogs\UserContainer\Tasks\CreateUserContainerTask;
use Hash;

class UserRegisterAction extends Action
{
    public function run(UserRegisterRequest $request)
    {
        $user = app(CreateUserByDetailsTask::class)->run(
            $request->fullName,
            $request->email,
            $request->mobile,
            $request->password,        
        );
        return $user;
       
    }
    
}
