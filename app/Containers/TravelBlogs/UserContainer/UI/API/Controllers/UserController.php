<?php

namespace App\Containers\TravelBlogs\UserContainer\UI\API\Controllers;

use App\Containers\TravelBlogs\UserContainer\Actions\GetAllBlogsAction;
use App\Containers\TravelBlogs\UserContainer\Actions\UserGetAllBlogsAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Containers\TravelBlogs\UserContainer\Models\UserModel;
use Validator;
use JWTAuth;
use DB;
use Hash;
use App\Containers\TravelBlogs\UserContainer\UI\API\Requests\UserRegisterRequest;
use App\Containers\TravelBlogs\UserContainer\UI\API\Requests\UserLoginRequest;
use App\Containers\TravelBlogs\UserContainer\Actions\UserRegisterAction;
use App\Containers\TravelBlogs\UserContainer\Actions\UserLoginAction;
use App\Containers\TravelBlogs\UserContainer\Tasks\CreateLoginTask;
use App\Containers\TravelBlogs\UserContainer\UI\API\Requests\DisplayUserBlogsRequest;
use App\Containers\TravelBlogs\UserContainer\UI\API\Requests\GetBlogsRequest;
use App\Containers\TravelBlogs\UserContainer\UI\API\Requests\UserGetAllBlogsRequest;
use App\Containers\TravelBlogs\UserContainer\UI\API\Transformers\GetAllBlogsTransformer;
use App\Containers\TravelBlogs\UserContainer\UI\API\Transformers\UserContainerTransformer;
use App\Containers\TravelBlogs\UserContainer\UI\API\Transformers\UserGetAllBlogsTransformer;
use App\Containers\TravelBlogs\UserContainer\UI\API\Transformers\UserLoginTransformer;

class UserController extends ApiController
{
   
    public function register(UserRegisterRequest $request): array
    {
        $user = app(UserRegisterAction::class)->run($request);
        return $this->transform($user,UserContainerTransformer::class);
    }

    public function login(UserLoginRequest $request): array
    {
        $user=app(UserLoginAction::class)->run($request);
        return $this->transform($user,UserLoginTransformer::class);
    }

    // public function displayUserBlogs(){ 
    //     //cache::set('data',DB::table('blogs_table')->paginate(6));
    //     //return  Cache::get('data');
    //     return DB::table('blogs')->paginate('6');
    // }
}
