<?php

/**
 * @apiGroup           BlogsContainer
 * @apiName            createBlogsContainer
 *
 * @api                {POST} /v1/upload Endpoint title here..
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

Route::post('upload', [Controller::class, 'createBlogsContainer'])
    ->name('api_blogscontainer_create_blogs_container')
    ->middleware(['auth:api']);

