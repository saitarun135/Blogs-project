<?php

namespace App\Containers\TravelBlogs\AdminContainer\UI\API\Transformers;

use App\Containers\TravelBlogs\AdminContainer\Models\AdminModel;
use App\Ship\Parents\Transformers\Transformer;

class AdminRegisterTransformer extends Transformer
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

    public function transform(AdminModel $adminmodel): array
    {
        $response = [
            'message'=>'admin registered successfully',
            'type'=>"Admin",
            'id' => $adminmodel->getHashedKey(),
            'created_at' => $adminmodel->created_at,
        ];
        return $response;
    }
}
