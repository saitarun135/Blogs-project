<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Tasks;

use App\Containers\TravelBlogs\BlogsContainer\Models\BlogsModel;
use App\Ship\Parents\Tasks\Task;
use DB;
use JWTAuth;

class UserViewAllBlogsTask extends Task
{
    protected BlogsModel $repository;
    public function __construct(BlogsModel $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {

        return DB::table('blogs')->paginate(3);
    }
}
