<?php

namespace App\Containers\TravelBlogs\AdminContainer\Tasks;

use App\Containers\TravelBlogs\AdminContainer\Models\AdminModel;
use App\Ship\Parents\Tasks\Task;
use Hash;

class AdminRegisterTask extends Task
{
    protected AdminModel $repository;
    public function __construct(AdminModel $repository)
    {
        $this->repository=$repository;
    }

    public function run(string $firstName,string $lastName,string $email,string $mobile,string $password)
    {
    
        $admin=$this->repository->create([
            'firstName'=>$firstName,
            'lastName'=>$lastName,
            'email'=>$email,
            'mobile'=>$mobile,
            'password'=>Hash::make($password)
        ]);
        return $admin;
    }
}
