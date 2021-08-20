<?php

namespace App\Containers\TravelBlogs\AdminContainer\Tasks;

use App\Containers\TravelBlogs\AdminContainer\Data\Repositories\AdminContainerRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllAdminContainersTask extends Task
{
    protected AdminContainerRepository $repository;

    public function __construct(AdminContainerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
