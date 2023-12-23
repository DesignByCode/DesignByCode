<?php

    namespace App\Http\Controllers\Sheets\Posts;

    use App\Http\Controllers\Controller;
    use App\Sheets\Post;
    use Illuminate\View\View;

    class PostShowController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(Post $post): View
        {
            return view('posts.show', compact('post'));
        }
    }
