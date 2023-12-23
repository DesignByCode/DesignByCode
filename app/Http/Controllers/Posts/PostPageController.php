<?php

    namespace App\Http\Controllers\Posts;

    use App\Http\Controllers\Controller;
    use App\Models\Post;
    use Illuminate\View\View;

    class PostPageController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(Post $post): View
        {
            $post->load('user');
            return view('posts.show', compact('post'));
        }
    }
