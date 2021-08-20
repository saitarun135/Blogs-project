<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Tasks;

use App\Containers\TravelBlogs\BlogsContainer\Models\BlogsModel;
use App\Ship\Parents\Tasks\Task;
use JWTAuth;


class PostBlogTask extends Task
{
    protected BlogsModel $data;
    public function __construct(BlogsModel $data)
    {
        $this->data=$data;
    }

    public function run(string $name,string $price,string $country,string $description,string $rating,string $image)
    {
        // $token=$tok;
        // $tokenParts = explode(".", $token); 
        // $tokenPayload = base64_decode($tokenParts[1]);
        // $jwtPayload = json_decode($tokenPayload);
        // $id=$jwtPayload->sub();
        $token = JWTAuth::getToken();
        $details = JWTAuth::getPayload($token)->toArray();
        $id = $details["sub"];
        return $this->data->create([
            'name'=>$name,
            'price'=>$price,
            'country'=>$country,
            'description'=>$description,
            'rating'=>$rating,
            'image'=>$image,
            'admin_id'=>$id
        ]);
    }
}
