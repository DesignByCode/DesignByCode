<?php

    namespace App\Http\Controllers\Posts;

    use App\Http\Controllers\Controller;
    use App\Models\Post;
    use Illuminate\View\View;

    class PostsIndexController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(Post $posts): View
        {
            return view('posts.index', [
                'posts' => $posts->with('user')->paginate(10)
            ]);
        }
    }
