<?php

namespace App\Containers\TravelBlogs\AdminContainer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class AdminContainerRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
