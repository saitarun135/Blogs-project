<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Tasks;

use App\Containers\TravelBlogs\BlogsContainer\Models\BlogsModel;
use App\Ship\Parents\Tasks\Task;
use DB;
use JWTAuth;

class DisplayAdminBlogsTask extends Task
{
    protected BlogsModel $data;
    public function __construct(BlogsModel $data)
    {
        // ..
        $this->data=$data;
    }

    public function run()
    {
        
        $token = JWTAuth::getToken();
        $details = JWTAuth::getPayload($token)->toArray();
        $admin_id = $details["sub"];
        $myBlogs=DB::table('blogs')->where('admin_id', $admin_id)->paginate(3);
        return $myBlogs;
    }
}
