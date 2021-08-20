<?php

namespace App\Containers\TravelBlogs\UserContainer\Tasks;

use App\Containers\TravelBlogs\UserContainer\Data\Repositories\UserContainerRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllUserContainersTask extends Task
{
    protected UserContainerRepository $repository;

    public function __construct(UserContainerRepository $repository)
    {
        $this->repository = $repository;
    }
    

    public function run()
    {
        return $this->repository->paginate();
    }
}
