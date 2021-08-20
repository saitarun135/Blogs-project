<?php

namespace App\Containers\TravelBlogs\AdminContainer\UI\API\Controllers;

use App\Containers\TravelBlogs\AdminContainer\UI\API\Requests\CreateAdminContainerRequest;
use App\Containers\TravelBlogs\AdminContainer\UI\API\Requests\DeleteAdminContainerRequest;
use App\Containers\TravelBlogs\AdminContainer\UI\API\Requests\GetAllAdminContainersRequest;
use App\Containers\TravelBlogs\AdminContainer\UI\API\Requests\FindAdminContainerByIdRequest;
use App\Containers\TravelBlogs\AdminContainer\UI\API\Requests\UpdateAdminContainerRequest;
use App\Containers\TravelBlogs\AdminContainer\UI\API\Transformers\AdminContainerTransformer;
use App\Containers\TravelBlogs\AdminContainer\Actions\CreateAdminContainerAction;
use App\Containers\TravelBlogs\AdminContainer\Actions\FindAdminContainerByIdAction;
use App\Containers\TravelBlogs\AdminContainer\Actions\GetAllAdminContainersAction;
use App\Containers\TravelBlogs\AdminContainer\Actions\UpdateAdminContainerAction;
use App\Containers\TravelBlogs\AdminContainer\Actions\DeleteAdminContainerAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createAdminContainer(CreateAdminContainerRequest $request): JsonResponse
    {
        $admincontainer = app(CreateAdminContainerAction::class)->run($request);
        return $this->created($this->transform($admincontainer, AdminContainerTransformer::class));
    }

    public function findAdminContainerById(FindAdminContainerByIdRequest $request): array
    {
        $admincontainer = app(FindAdminContainerByIdAction::class)->run($request);
        return $this->transform($admincontainer, AdminContainerTransformer::class);
    }

    public function getAllAdminContainers(GetAllAdminContainersRequest $request): array
    {
        $admincontainers = app(GetAllAdminContainersAction::class)->run($request);
        return $this->transform($admincontainers, AdminContainerTransformer::class);
    }

    public function updateAdminContainer(UpdateAdminContainerRequest $request): array
    {
        $admincontainer = app(UpdateAdminContainerAction::class)->run($request);
        return $this->transform($admincontainer, AdminContainerTransformer::class);
    }

    public function deleteAdminContainer(DeleteAdminContainerRequest $request): JsonResponse
    {
        app(DeleteAdminContainerAction::class)->run($request);
        return $this->noContent();
    }
}
