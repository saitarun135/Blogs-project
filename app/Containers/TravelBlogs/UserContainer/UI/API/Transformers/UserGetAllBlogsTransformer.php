<?php

namespace App\Containers\TravelBlogs\UserContainer\UI\API\Transformers;

use App\Containers\TravelBlogs\UserContainer\Models\BlogsModel;
use App\Ship\Parents\Transformers\Transformer;

class UserGetAllBlogsTransformer extends Transformer
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

    public function transform(BlogsModel $blogsmodel): array
    {
        $response = [
            'object' => $blogsmodel->getResourceKey(),
            'id' => $blogsmodel->getHashedKey(),
            'created_at' => $blogsmodel->created_at,
            'updated_at' => $blogsmodel->updated_at,
            'readable_created_at' => $blogsmodel->created_at->diffForHumans(),
            'readable_updated_at' => $blogsmodel->updated_at->diffForHumans(),

        ];

        $response = $this->ifAdmin([
            'real_id'    => $blogsmodel->id,
            // 'deleted_at' => $blogsmodel->deleted_at,
        ], $response);

        return $response;
    }
}
