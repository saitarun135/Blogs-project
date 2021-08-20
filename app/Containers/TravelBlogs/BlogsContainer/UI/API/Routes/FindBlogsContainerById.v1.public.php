<?php

/**
 * @apiGroup           BlogsContainer
 * @apiName            findBlogsContainerById
 *
 * @api                {GET} /v1/upload/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\TravelBlogs\BlogsContainer\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('upload/{id}', [Controller::class, 'findBlogsContainerById'])
    ->name('api_blogscontainer_find_blogs_container_by_id')
    ->middleware(['auth:api']);

