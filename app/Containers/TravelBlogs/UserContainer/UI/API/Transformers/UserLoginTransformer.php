<?php

namespace App\Containers\TravelBlogs\UserContainer\UI\API\Transformers;

use App\Containers\TravelBlogs\UserContainer\Models\UserModel;
use App\Ship\Parents\Transformers\Transformer;

class UserLoginTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    public function transform($token): array
    {
        $response = [
            'message'=>"User login successfully",
            'token'=>$token,
            // 'object' => $usermodel->getResourceKey(),
            // 'id' => $usermodel->getHashedKey(),
            // 'created_at' => $usermodel->created_at,
            // 'updated_at' => $usermodel->updated_at,
            // 'readable_created_at' => $usermodel->created_at->diffForHumans(),
            // 'readable_updated_at' => $usermodel->updated_at->diffForHumans(),

        ];

        // $response = $this->ifAdmin([
        //     'real_id'    => $usermodel->id,
        //     // 'deleted_at' => $usermodel->deleted_at,
        // ], $response);

        return $response;
    }
}
