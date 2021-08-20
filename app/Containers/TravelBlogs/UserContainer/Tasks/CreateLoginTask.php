<?php

namespace App\Containers\TravelBlogs\UserContainer\Tasks;

use App\Containers\TravelBlogs\UserContainer\Actions\UserLoginAction;
use App\Containers\TravelBlogs\UserContainer\Models\UserModel;
use App\Ship\Parents\Tasks\Task;
use JWTAuth;
use Illuminate\Support\Facades\Auth;

class CreateLoginTask extends Task
{
    protected UserModel $repository;
    public function __construct()
    {
       // $this->repository = $repository;
    }

    public function run(string $token)
    {   
        return $token;
     
    }
}
