<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class BlogsContainerRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
