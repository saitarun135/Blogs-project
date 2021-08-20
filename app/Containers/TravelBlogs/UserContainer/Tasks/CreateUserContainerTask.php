<?php

namespace App\Containers\TravelBlogs\UserContainer\Tasks;

use App\Containers\TravelBlogs\UserContainer\Data\Repositories\UserContainerRepository;
use App\Containers\TravelBlogs\UserContainer\Models\UserModel;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Hash;

// use Ramsey\Uuid\Type\Integer;

// use Hash;
// use Illuminate\Support\Facades\Hash as FacadesHash;

class CreateUserContainerTask extends Task
{
    protected UserModel $repository;

    public function __construct(UserModel $repository)
    {
        $this->repository = $repository;
    }

    public function run(string $fullName,string $email,string $password,int $mobile)
    {
        try {
            return $this->repository->create([
                'fullName' => $fullName,
                'mobile' => $mobile,
                'email' => $email,
                'password' =>  Hash::make($password)
            ]);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
