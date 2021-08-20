<?php

namespace App\Containers\TravelBlogs\BlogsContainer\UI\API\Controllers;

use App\Containers\TravelBlogs\BlogsContainer\UI\API\Requests\CreateBlogsContainerRequest;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Requests\DeleteBlogsContainerRequest;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Requests\GetAllBlogsContainersRequest;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Requests\FindBlogsContainerByIdRequest;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Requests\UpdateBlogsContainerRequest;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Transformers\BlogsContainerTransformer;
use App\Containers\TravelBlogs\BlogsContainer\Actions\CreateBlogsContainerAction;
use App\Containers\TravelBlogs\BlogsContainer\Actions\FindBlogsContainerByIdAction;
use App\Containers\TravelBlogs\BlogsContainer\Actions\GetAllBlogsContainersAction;
use App\Containers\TravelBlogs\BlogsContainer\Actions\UpdateBlogsContainerAction;
use App\Containers\TravelBlogs\BlogsContainer\Actions\DeleteBlogsContainerAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createBlogsContainer(CreateBlogsContainerRequest $request): JsonResponse
    {
        $blogscontainer = app(CreateBlogsContainerAction::class)->run($request);
        return $this->created($this->transform($blogscontainer, BlogsContainerTransformer::class));
    }

    public function findBlogsContainerById(FindBlogsContainerByIdRequest $request): array
    {
        $blogscontainer = app(FindBlogsContainerByIdAction::class)->run($request);
        return $this->transform($blogscontainer, BlogsContainerTransformer::class);
    }

    public function getAllBlogsContainers(GetAllBlogsContainersRequest $request): array
    {
        $blogscontainers = app(GetAllBlogsContainersAction::class)->run($request);
        return $this->transform($blogscontainers, BlogsContainerTransformer::class);
    }

    public function updateBlogsContainer(UpdateBlogsContainerRequest $request): array
    {
        $blogscontainer = app(UpdateBlogsContainerAction::class)->run($request);
        return $this->transform($blogscontainer, BlogsContainerTransformer::class);
    }

    public function deleteBlogsContainer(DeleteBlogsContainerRequest $request): JsonResponse
    {
        app(DeleteBlogsContainerAction::class)->run($request);
        return $this->noContent();
    }
}
