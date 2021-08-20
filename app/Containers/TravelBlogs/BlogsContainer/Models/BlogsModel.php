<?php

namespace App\Containers\TravelBlogs\BlogsContainer\Models;

use App\Ship\Parents\Models\Model;

class BlogsModel extends Model
{
    protected $table="blogs";
    protected $fillable = [
        'name','price','image','country','rating','description','admin_id'
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
    protected string $resourceKey = 'BlogsModel';
    public function admin(){
          return $this->belongsTo(AdminModel::class,'admin_id');
        //return $this->belongsTo('C:\apiato-project\apiato\app\Containers\UserRegistration\UserContainer\Models\AdminModel.php','admin_id');
    }
}
