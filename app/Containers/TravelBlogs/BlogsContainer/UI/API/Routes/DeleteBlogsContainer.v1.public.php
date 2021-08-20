<?php

/**
 * @apiGroup           BlogsContainer
 * @apiName            deleteBlogsContainer
 *
 * @api                {DELETE} /v1/upload/:id Endpoint title here..
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

Route::delete('upload/{id}', [Controller::class, 'deleteBlogsContainer'])
    ->name('api_blogscontainer_delete_blogs_container')
    ->middleware(['auth:api']);

