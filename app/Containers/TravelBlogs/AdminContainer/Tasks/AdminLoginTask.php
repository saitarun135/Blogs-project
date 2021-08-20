<?php

namespace App\Containers\TravelBlogs\AdminContainer\Tasks;

use App\Containers\TravelBlogs\AdminContainer\Models\AdminModel;
use App\Ship\Parents\Tasks\Task;
use Hash;
use JWTAuth;


class AdminLoginTask extends Task
{
    protected AdminModel $repository;
    public function __construct(AdminModel $data)
    {
        $this->data=$data;
    }

    public function run(string $email,string $password)
    {
        $adminMail=AdminModel::where('email',$email)->first();
        $adminPassword=AdminModel::where('email',$email)->value('password');
        if(!$adminMail){ return $warning ="Email is not registered";}
        if(!Hash::check($password, $adminPassword)){ return $warning="Incorrect password"; }
        $token = JWTAuth::fromUser($adminMail);
        return $token; 
    }
}
