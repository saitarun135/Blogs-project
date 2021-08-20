<?php

/**
 * @apiGroup           BlogsContainer
 * @apiName            getAllBlogsContainers
 *
 * @api                {GET} /v1/upload Endpoint title here..
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

Route::get('upload', [Controller::class, 'getAllBlogsContainers'])
    ->name('api_blogscontainer_get_all_blogs_containers')
    ->middleware(['auth:api']);

