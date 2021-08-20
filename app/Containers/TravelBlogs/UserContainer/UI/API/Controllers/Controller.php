<?php

namespace App\Containers\TravelBlogs\UserContainer\UI\API\Controllers;

use App\Containers\TravelBlogs\UserContainer\UI\API\Requests\CreateUserContainerRequest;
use App\Containers\TravelBlogs\UserContainer\UI\API\Requests\DeleteUserContainerRequest;
use App\Containers\TravelBlogs\UserContainer\UI\API\Requests\GetAllUserContainersRequest;
use App\Containers\TravelBlogs\UserContainer\UI\API\Requests\FindUserContainerByIdRequest;
use App\Containers\TravelBlogs\UserContainer\UI\API\Requests\UpdateUserContainerRequest;
use App\Containers\TravelBlogs\UserContainer\UI\API\Transformers\UserContainerTransformer;
use App\Containers\TravelBlogs\UserContainer\Actions\CreateUserContainerAction;
use App\Containers\TravelBlogs\UserContainer\Actions\FindUserContainerByIdAction;
use App\Containers\TravelBlogs\UserContainer\Actions\GetAllUserContainersAction;
use App\Containers\TravelBlogs\UserContainer\Actions\UpdateUserContainerAction;
use App\Containers\TravelBlogs\UserContainer\Actions\DeleteUserContainerAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createUserContainer(CreateUserContainerRequest $request): JsonResponse
    {
        $usercontainer = app(CreateUserContainerAction::class)->run($request);
        return $this->created($this->transform($usercontainer, UserContainerTransformer::class));
    }

    public function findUserContainerById(FindUserContainerByIdRequest $request): array
    {
        $usercontainer = app(FindUserContainerByIdAction::class)->run($request);
        return $this->transform($usercontainer, UserContainerTransformer::class);
    }

    public function getAllUserContainers(GetAllUserContainersRequest $request): array
    {
        $usercontainers = app(GetAllUserContainersAction::class)->run($request);
        return $this->transform($usercontainers, UserContainerTransformer::class);
    }

    public function updateUserContainer(UpdateUserContainerRequest $request): array
    {
        $usercontainer = app(UpdateUserContainerAction::class)->run($request);
        return $this->transform($usercontainer, UserContainerTransformer::class);
    }

    public function deleteUserContainer(DeleteUserContainerRequest $request): JsonResponse
    {
        app(DeleteUserContainerAction::class)->run($request);
        return $this->noContent();
    }
}
