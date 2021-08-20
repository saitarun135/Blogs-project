<?php

/**
 * @apiGroup           AdminContainer
 * @apiName            findAdminContainerById
 *
 * @api                {GET} /v1/register/:id Endpoint title here..
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

use App\Containers\TravelBlogs\AdminContainer\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('register/{id}', [Controller::class, 'findAdminContainerById'])
    ->name('api_admincontainer_find_admin_container_by_id')
    ->middleware(['auth:api']);

