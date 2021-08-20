<?php

/**
 * @apiGroup           AdminContainer
 * @apiName            adminRegistration
 *
 * @api                {POST} /v1/adminsignup Endpoint title here..
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

use App\Containers\TravelBlogs\AdminContainer\UI\API\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::post('adminsignup', [AdminController::class, 'adminRegistration']);
Route::post('adminsignin',[AdminController::class,'adminLogin']);
    // ->name('api_admincontainer_admin_registration')
    // ->middleware(['auth:api']);

