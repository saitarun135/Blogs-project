<?php

namespace App\Containers\TravelBlogs\AdminContainer\Tasks;

use App\Containers\TravelBlogs\AdminContainer\Data\Repositories\AdminContainerRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindAdminContainerByIdTask extends Task
{
    protected AdminContainerRepository $repository;

    public function __construct(AdminContainerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
