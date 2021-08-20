<?php

namespace App\Containers\TravelBlogs\BlogsContainer\UI\API\Transformers;

use App\Containers\TravelBlogs\BlogsContainer\Models\BlogsModel;
use App\Ship\Parents\Transformers\Transformer;

class DisplayAdminBlogsTransformer extends Transformer
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

    public function transform($myBlogs): array
    {
        $response = [
            $myBlogs
            

        ];

        // $response = $this->ifAdmin([
        //     'real_id'    => $blogsmodel->id,
        //     // 'deleted_at' => $blogsmodel->deleted_at,
        // ], $response);

        return $response;
    }
}
