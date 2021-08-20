<?php

namespace App\Containers\TravelBlogs\BlogsContainer\UI\API\Transformers;

use App\Containers\TravelBlogs\BlogsContainer\Models\BlogsModel;
use App\Ship\Parents\Transformers\Transformer;

class UpdateBlogTransformer extends Transformer
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

    public function transform(): array
    {
        $response = [
            'message'=>'success',
            // 'object' => $blogsmodel->getResourceKey(),
            // 'id' => $blogsmodel->getHashedKey(),
            // 'created_at' => $blogsmodel->created_at,
            // 'updated_at' => $blogsmodel->updated_at,
            // 'readable_created_at' => $blogsmodel->created_at->diffForHumans(),
            // 'readable_updated_at' => $blogsmodel->updated_at->diffForHumans(),

        ];

        // $response = $this->ifAdmin([
        //     'real_id'    => $blogsmodel->id,
        //     // 'deleted_at' => $blogsmodel->deleted_at,
        // ], $response);

        return $response;
    }
}
