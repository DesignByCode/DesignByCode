<?php

    namespace App\Http\Controllers\Sheets\Posts;

    use App\Http\Controllers\Controller;
    use Illuminate\View\View;
    use Spatie\Sheets\Facades\Sheets;

    class PostsIndexController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {
            return view('posts.index', [
                'posts' => Sheets::collection('posts')->all()->sortByDesc('date')
            ]);
        }
    }
