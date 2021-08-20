<?php

namespace App\Containers\TravelBlogs\UserContainer\Tasks;

use App\Ship\Parents\Tasks\Task;
use App\Containers\TravelBlogs\UserContainer\Models\UserModel;
use Hash;
use DB;

class CreateUserByDetailsTask extends Task
{
    protected UserModel $repository;
    public function __construct(UserModel $repository)
    {
        $this->repository = $repository;
    }

    public function run(string $fullName,string $email,string $mobile,string $password)
    {
        
            $user=$this->repository->create([
                'fullName' => $fullName,
                'email' => $email,
                'mobile' => $mobile,
                'password' => Hash::make($password)
            ]);
          
            return $user;
      
    }
}
