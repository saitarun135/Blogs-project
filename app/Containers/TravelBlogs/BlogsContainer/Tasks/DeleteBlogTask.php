<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Tasks;

use App\Containers\TravelBlogs\BlogsContainer\Models\BlogsModel;
use App\Ship\Parents\Tasks\Task;
use JWTAuth;
use Log;

class DeleteBlogTask extends Task
{
    protected BlogsModel $repository;
    public function __construct(BlogsModel $repository)
    {
        $this->repository=$repository;
        // ..
    }

    public function run($id)
    {
                $blog=BlogsModel::findOrFail($id);
                $token = JWTAuth::getToken();
                $details = JWTAuth::getPayload($token)->toArray();
                $Admin_id = $details["sub"];
                $adminPresent = BlogsModel::where('admin_id', $Admin_id)->value('admin_id');
                if($adminPresent){     
                   $deleted= $blog->each->delete();
                   return $deleted;
               }
          
                   
    }
}
