<?php

/**
 * @apiGroup           BlogsContainer
 * @apiName            upload
 *
 * @api                {POST} /v1/postblog Endpoint title here..
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

use App\Containers\TravelBlogs\BlogsContainer\UI\API\Controllers\BlogsController;
use Illuminate\Support\Facades\Route;

Route::post('postblog', [BlogsController::class, 'upload']);
Route::post('updateBlog',[BlogsController::class,'updateBlog']);
Route::post('deleteBlog',[BlogsController::class,'deleteBlog']);
Route::get('myBlogs',[BlogsController::class,'displayAdminBlogs']);
Route::get('getBlogByID/{id}',[BlogsController::class,'displayBlogByID']);
Route::get('getblogs',[BlogsController::class,'displayAllBlogs']);
   
