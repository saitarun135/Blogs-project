<?php

namespace App\Containers\TravelBlogs\AdminContainer\Tasks;

use App\Containers\TravelBlogs\AdminContainer\Data\Repositories\AdminContainerRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateAdminContainerTask extends Task
{
    protected AdminContainerRepository $repository;

    public function __construct(AdminContainerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
