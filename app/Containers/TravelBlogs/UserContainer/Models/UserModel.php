<?php

namespace App\Containers\TravelBlogs\UserContainer\Models;
use App\Ship\Parents\Models\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;

class UserModel extends Model implements JWTSubject
{
    protected $table="user";
    protected $fillable = [
        'fullName',
        'email',
        'password',
        'mobile'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'UserModel';

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
