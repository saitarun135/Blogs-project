<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Tasks;

use App\Containers\TravelBlogs\BlogsContainer\Data\Repositories\BlogsContainerRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindBlogsContainerByIdTask extends Task
{
    protected BlogsContainerRepository $repository;

    public function __construct(BlogsContainerRepository $repository)
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
