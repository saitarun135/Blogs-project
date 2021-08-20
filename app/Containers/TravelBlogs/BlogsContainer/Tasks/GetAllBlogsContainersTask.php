<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Tasks;

use App\Containers\TravelBlogs\BlogsContainer\Data\Repositories\BlogsContainerRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllBlogsContainersTask extends Task
{
    protected BlogsContainerRepository $repository;

    public function __construct(BlogsContainerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
