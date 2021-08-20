<?php

namespace App\Containers\TravelBlogs\UserContainer\Actions;

use App\Containers\TravelBlogs\UserContainer\Models\UserModel;
use App\Containers\TravelBlogs\UserContainer\UI\API\Requests\UserLoginRequest;
use App\Ship\Parents\Actions\Action;
use App\Containers\TravelBlogs\UserContainer\Tasks\CreateLoginTask;
use JWTAuth;

class UserLoginAction extends Action
{
    public function run(UserLoginRequest $request)
    {
        
        // $sanitizedData = $request->sanitizeInput([
        //     'email',
        //     'password',
        // ]);
        $user = app(CreateLoginTask::class)->run(
            true,
            $request->email,
            $request->password,
        );
        $email = $request->get('email');
        $user = UserModel::where('email', $email)->first();
        $token = JWTAuth::fromUser($user);
        return $token;
    }
}
