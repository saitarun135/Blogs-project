<?php

/**
 * @apiGroup           UserContainer
 * @apiName            register
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

use App\Containers\TravelBlogs\UserContainer\UI\API\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('register', [UserController::class, 'register']);
Route::post('login',[UserController::class,'login']);
Route::get('getBlogs',[UserController::class,'displayUserBlogs']);


