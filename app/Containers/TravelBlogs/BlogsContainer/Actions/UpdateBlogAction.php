<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Actions;

use App\Containers\TravelBlogs\BlogsContainer\Tasks\UpdateBlogTask;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Requests\UpdateBlogRequest;
use App\Ship\Parents\Actions\Action;

class UpdateBlogAction extends Action
{
    public function run(UpdateBlogRequest $request)
    {
        $updateBlog=app(UpdateBlogTask::class)->run(
            $request->id,
            $request->name,
            $request->price,
            $request->country,
            $request->description,
            $request->rating,
            $request->image,
        );
        return $updateBlog;
    }
}
