<?php

namespace App\Containers\TravelBlogs\AdminContainer\UI\API\Transformers;

use App\Containers\TravelBlogs\AdminContainer\Models\AdminModel;
use App\Ship\Parents\Transformers\Transformer;

class AdminLoginTransformer extends Transformer
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
        $response = [$data
            // 'message'=>'welcome to the Admin-Dashboard',
            // 'bearer'=>$token,
            // 'object' => $adminmodel->getResourceKey(),
            // 'id' => $adminmodel->getHashedKey(),
            // 'created_at' => $adminmodel->created_at,
            // 'updated_at' => $adminmodel->updated_at,
            // 'readable_created_at' => $adminmodel->created_at->diffForHumans(),
            // 'readable_updated_at' => $adminmodel->updated_at->diffForHumans(),

        ];

        // $response = $this->ifAdmin([
        //     'real_id'    => $adminmodel->id,
        //     // 'deleted_at' => $adminmodel->deleted_at,
        // ], $response);

        return $response;
    }
}
