<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Tasks;

use App\Containers\TravelBlogs\AdminContainer\Models\AdminModel;
use App\Containers\TravelBlogs\BlogsContainer\Models\BlogsModel;
use App\Ship\Parents\Tasks\Task;
use JWTAuth;

class UpdateBlogTask extends Task
{
    protected BlogsModel $data;
    public function __construct(BlogsModel $data)
    {
        $this->data=$data;
    }

    public function run($blogId,string $name,string $price,string $country,string $description,string $rating,string $image)
    {
        $token = JWTAuth::getToken();
        $details = JWTAuth::getPayload($token)->toArray();
        $Admin_id = $details["sub"];
        
        $adminPresent = AdminModel::where('id', $Admin_id)->value('id');
        $blogIdPresent = BlogsModel::where('id', $blogId)->value('id');
        if(!$blogIdPresent){
            $warning="No Blog is availbale with that ID";
            return $warning;
        }
        $blogsAdmin = BlogsModel::where('id', $blogId)->value('admin_id');
        
        if($adminPresent == $blogsAdmin){   
            $this->data->where('id', $blogIdPresent)->update([
                'admin_id' => $Admin_id,
                'name'=>$name,
                'price'=>$price,
                'country'=>$country,
                'description'=>$description,
                'rating'=>$rating,
                'image'=>$image
            ]);
            return $message = "Blog updated successfully";
        }
      //} 
     }
}
