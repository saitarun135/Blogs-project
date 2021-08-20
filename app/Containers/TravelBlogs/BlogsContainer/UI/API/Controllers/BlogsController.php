<?php

namespace App\Containers\TravelBlogs\BlogsContainer\UI\API\Controllers;

use App\Containers\TravelBlogs\BlogsContainer\Actions\DeleteBlogAction;
use App\Containers\TravelBlogs\BlogsContainer\Actions\DisplayAdminBlogsAction;
use App\Containers\TravelBlogs\BlogsContainer\Actions\PostBlogAction;
use App\Containers\TravelBlogs\BlogsContainer\Actions\UpdateBlogAction;
use App\Containers\TravelBlogs\BlogsContainer\Actions\UserGETAllBlogsAction;
use App\Containers\TravelBlogs\BlogsContainer\Models\BlogsModel;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Requests\DeeleteBlogRequest;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Requests\DisplayAdminBlogsRequest;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Requests\PostBlogRequest;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Requests\UpdateBlogRequest;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Requests\UserGetAllBlogsRequest;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Transformers\DeleteBlogTransformer;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Transformers\DisplayAdminBlogsTransformer;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Transformers\PostBlogTransformer;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Transformers\UpdateBlogTransformer;
use App\Containers\TravelBlogs\BlogsContainer\UI\API\Transformers\UserGetAllBlogsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\DB;
class BlogsController extends ApiController
{
    public function upload(PostBlogRequest $request){
        $post=app(PostBlogAction::class)->run($request);
        return $this->transform($post,PostBlogTransformer::class);
    }
   
    public function updateBlog(UpdateBlogRequest $request){
        $update=app(UpdateBlogAction::class)->run($request);
        return $this->transform($update,UpdateBlogTransformer::class);
    }
    
    public function deleteBlog(DeeleteBlogRequest $request){
        $delete=app(DeleteBlogAction::class)->run($request);
        return $this->transform($delete,DeleteBlogTransformer::class);
    }
    public function displayAdminBlogs(DisplayAdminBlogsRequest $request):array
    {
        $myBlogs=app(DisplayAdminBlogsAction::class)->run($request);
        return $this->transform($myBlogs,DisplayAdminBlogsTransformer::class);

    }
  
   public function displayAllBlogs(UserGetAllBlogsRequest $request): array{
    $blogs=app(UserGETAllBlogsAction::class)->run($request);
    return $this->transform($blogs,UserGetAllBlogsTransformer::class);
   }
   
    // public function displayBlogByID(Request $request,$id){
    //     $blogs=BlogsModel::findOrFail($id);
    //     return DB::table('blogs')->where('id',$blogs->id)->get();
    // }
}
