<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Tasks;

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

    public function run(string $id,string $name,string $price,string $country,string $description,string $rating,string $image)
    {
        $token = JWTAuth::getToken();
        $details = JWTAuth::getPayload($token)->toArray();
        $Admin_id = $details["sub"];
        
        return $this->data->update([
            'id'=>$id,
            'name'=>$name,
            'price'=>$price,
            'country'=>$country,
            'description'=>$description,
            'rating'=>$rating,
            'image'=>$image,
            'admin_id'=>$Admin_id
         ]);
  
      //} 
     }
}
