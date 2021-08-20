<?php

namespace App\Containers\TravelBlogs\BlogsContainer\UI\API\Transformers;

use App\Containers\TravelBlogs\BlogsContainer\Models\BlogsContainer;
use App\Ship\Parents\Transformers\Transformer;

class BlogsContainerTransformer extends Transformer
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

    public function transform(BlogsContainer $blogscontainer): array
    {
        $response = [
            'object' => $blogscontainer->getResourceKey(),
            'id' => $blogscontainer->getHashedKey(),
            'created_at' => $blogscontainer->created_at,
            'updated_at' => $blogscontainer->updated_at,
            'readable_created_at' => $blogscontainer->created_at->diffForHumans(),
            'readable_updated_at' => $blogscontainer->updated_at->diffForHumans(),

        ];

        $response = $this->ifAdmin([
            'real_id'    => $blogscontainer->id,
            // 'deleted_at' => $blogscontainer->deleted_at,
        ], $response);

        return $response;
    }
}
