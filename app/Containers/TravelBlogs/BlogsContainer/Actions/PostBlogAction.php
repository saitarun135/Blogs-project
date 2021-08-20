<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Actions;

use App\Containers\TravelBlogs\BlogsContainer\Tasks\PostBlogTask;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Requests\PostBlogRequest;
use App\Ship\Parents\Actions\Action;

class PostBlogAction extends Action
{
    public function run(PostBlogRequest $request)
    {
        $postBlog=app(PostBlogTask::class)->run(
            $request->name,
            $request->price,
            $request->country,
            $request->description,
            $request->rating,
            $request->image,
            
        );
        return $postBlog;
    }
}
