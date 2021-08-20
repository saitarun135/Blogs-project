<?php

namespace App\Containers\TravelBlogs\AdminContainer\UI\API\Transformers;

use App\Containers\TravelBlogs\AdminContainer\Models\AdminContainer;
use App\Ship\Parents\Transformers\Transformer;

class AdminContainerTransformer extends Transformer
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

    public function transform(AdminContainer $admincontainer): array
    {
        $response = [
            'object' => $admincontainer->getResourceKey(),
            'id' => $admincontainer->getHashedKey(),
            'created_at' => $admincontainer->created_at,
            'updated_at' => $admincontainer->updated_at,
            'readable_created_at' => $admincontainer->created_at->diffForHumans(),
            'readable_updated_at' => $admincontainer->updated_at->diffForHumans(),

        ];

        $response = $this->ifAdmin([
            'real_id'    => $admincontainer->id,
            // 'deleted_at' => $admincontainer->deleted_at,
        ], $response);

        return $response;
    }
}
