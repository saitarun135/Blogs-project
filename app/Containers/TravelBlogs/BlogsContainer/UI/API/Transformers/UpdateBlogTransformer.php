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

    public function transform(string $data): array
    {
        $response = [
            'message'=>$data,
           

        ];

   

        return $response;
    }
}
