<?php

namespace App\Http\Controllers\Admin\Blogs;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    //landing page
    public function landingPage()
    {
        $user = Auth::user();
        $web = GeneralSetting::first();

        return view('dashboards.admin.blogs.posts')
            ->with([
                'user' => $user,
                'web' => $web,
                'siteName'=>$web->name,
                'pageName'=>'Posts',
                'parentMenu'=>'Blog'
            ]);
    }

    public function newBlog()
    {
        $user = Auth::user();
        $web = GeneralSetting::first();

        return view('dashboards.admin.blogs.post_new')
            ->with([
                'user' => $user,
                'web' => $web,
                'siteName'=>$web->name,
                'pageName'=>'Add New Post',
                'parentMenu'=>'Blog'
            ]);
    }
    public function editBlog($id)
    {
        $user = Auth::user();
        $web = GeneralSetting::first();
        $blog = Post::where('id', $id)->firstOrFail();
        return view('dashboards.admin.blogs.post_edit')
            ->with([
                'user' => $user,
                'web' => $web,
                'siteName'=>$web->name,
                'pageName'=>'Edit: '.$blog->title,
                'parentMenu'=>'Blog',
                'post'=>$blog
            ]);
    }
}
