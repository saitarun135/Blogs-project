<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Tasks;

use App\Containers\TravelBlogs\BlogsContainer\Data\Repositories\BlogsContainerRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateBlogsContainerTask extends Task
{
    protected BlogsContainerRepository $repository;

    public function __construct(BlogsContainerRepository $repository)
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
