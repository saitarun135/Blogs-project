<?php

/**
 * @apiGroup           AdminContainer
 * @apiName            createAdminContainer
 *
 * @api                {POST} /v1/register Endpoint title here..
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

Route::post('register', [Controller::class, 'createAdminContainer'])
    ->name('api_admincontainer_create_admin_container')
    ->middleware(['auth:api']);

