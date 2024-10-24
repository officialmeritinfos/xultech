<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //blog page
    public function index(Request $request)
    {
        $web = GeneralSetting::first();

        $blogs = Post::where('status','published')->orderBy('created_at','DESC')->paginate(10);

        if ($request->ajax()) {
            return response()->json([
                'products' => view('home.resources.components.post_list', compact('blogs'))->render(),
                'nextPage' => $blogs->currentPage() + 1,
                'hasMorePages' => $blogs->hasMorePages()
            ]);
        }

        return view('home.resources.blogs')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Blog Page',
                'blogs' =>$blogs,
            ]);
    }
    //blog detail
    public function blogDetail($slug)
    {
        $web = GeneralSetting::first();

        $blog = Post::where('slug',$slug)->firstOrFail();
        $visitorIdentifier = null;

        // Check if the user is logged in or not
        if (auth()->check()) {
            // Logged-in user
            $userId = auth()->id();
            $visitorIdentifier = $blog->viewers()->where('user_id', $userId)->first();

            if (!$visitorIdentifier) {
                // Add user as viewer
                $blog->viewers()->create([
                    'user_id' => $userId,
                ]);
            }
        } else {
            // Guest user: track by IP address
            $ipAddress = request()->ip();
            $visitorIdentifier = $blog->viewers()->where('ip_address', $ipAddress)->first();

            if (!$visitorIdentifier) {
                // Add IP as viewer
                $blog->viewers()->create([
                    'ip_address' => $ipAddress,
                ]);
            }
        }

        return view('home.resources.blog_detail')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => $blog->title,
                'post' => $blog,
                'tags'=>$blog->tags,
            ]);
    }
    //blog category posts
    public function blogCategoryPosts(Request $request, $category){
        $web = GeneralSetting::first();

        $blogs = Post::where([
            'category' => $category,
            'status' => 'published'
        ])->orderBy('created_at','DESC')->paginate(15);

        if ($request->ajax()) {
            return response()->json([
                'products' => view('home.resources.components.post_list', compact('blogs'))->render(),
                'nextPage' => $blogs->currentPage() + 1,
                'hasMorePages' => $blogs->hasMorePages()
            ]);
        }

        return view('home.resources.blog_category_posts')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => "Posts in ".ucfirst($category)." Category",
                'blogs' =>$blogs,
            ]);
    }
    //blog author posts
    public function blogAuthor(Request $request, $author){

        $web = GeneralSetting::first();

        $user = User::where('username',$author)->firstOrFail();

        $blogs = Post::where([
            'user_id' => $user->id,
            'status' => 'published'
        ])->orderBy('created_at','DESC')->paginate(15);

        if ($request->ajax()) {
            return response()->json([
                'products' => view('home.resources.components.post_list', compact('blogs'))->render(),
                'nextPage' => $blogs->currentPage() + 1,
                'hasMorePages' => $blogs->hasMorePages()
            ]);
        }

        return view('home.resources.blog_author_posts')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => "Posts By ".$user->name,
                'blogs' =>$blogs,
            ]);
    }
}
