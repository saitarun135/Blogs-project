<?php

namespace App\Containers\TravelBlogs\AdminContainer\Tasks;

use App\Containers\TravelBlogs\AdminContainer\Data\Repositories\AdminContainerRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteAdminContainerTask extends Task
{
    protected AdminContainerRepository $repository;

    public function __construct(AdminContainerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): ?int
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
