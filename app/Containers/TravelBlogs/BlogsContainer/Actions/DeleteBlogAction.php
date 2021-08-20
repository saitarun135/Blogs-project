<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Actions;

use App\Containers\TravelBlogs\BlogsContainer\Tasks\DeleteBlogTask;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Requests\DeeleteBlogRequest;
use App\Ship\Parents\Actions\Action;

class DeleteBlogAction extends Action
{
    public function run(DeeleteBlogRequest $request)
    {
       
        $delete=app(DeleteBlogTask::class)->run($request);
        return $delete;
    }
}
