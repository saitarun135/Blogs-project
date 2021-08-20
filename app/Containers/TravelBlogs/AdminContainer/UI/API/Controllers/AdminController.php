<?php

namespace App\Containers\TravelBlogs\AdminContainer\UI\API\Controllers;

use App\Containers\TravelBlogs\AdminContainer\Actions\AdminLoginAction;
use App\Containers\TravelBlogs\AdminContainer\Actions\AdminRegisterAction;
use App\Ship\Parents\Controllers\ApiController;
use App\Containers\TravelBlogs\AdminContainer\Models\AdminModel;
use App\Containers\TravelBlogs\AdminContainer\UI\API\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use JWTAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Containers\TravelBlogs\AdminContainer\UI\API\Requests\AdminRegisterRequest;
use App\Containers\TravelBlogs\AdminContainer\UI\API\Transformers\AdminLoginTransformer;
use App\Containers\TravelBlogs\AdminContainer\UI\API\Transformers\AdminRegisterTransformer;

class AdminController extends ApiController
{
   
    public function adminRegistration(AdminRegisterRequest $request): array{
        $admin=app(AdminRegisterAction::class)->run($request);
        return $this->transform($admin,AdminRegisterTransformer::class);
    }
    
    public function adminLogin(AdminLoginRequest $request): array{
        $adminLogin=app(AdminLoginAction::class)->run($request);
        return $this->transform($adminLogin,AdminLoginTransformer::class);
    }
    
}
