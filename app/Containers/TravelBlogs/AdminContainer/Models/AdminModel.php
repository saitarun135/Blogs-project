<?php

namespace App\Containers\TravelBlogs\AdminContainer\Models;

use App\Ship\Parents\Models\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
class AdminModel extends Model implements JWTSubject
{
    protected $table="admins";
    protected $fillable = [
        'firstName','lastName','email','mobile','password'
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
    protected string $resourceKey = 'AdminModel';
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
    public function blogs()
    {
     return $this->hasMany(BlogsModel::class, 'admin_id');
    }
}
