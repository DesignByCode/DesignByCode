<?php

    namespace App\Http\Controllers\Sheets\Packagist;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\View\View;
    use Spatie\Sheets\Facades\Sheets;

    class PackagistIndexController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(Request $request): View
        {
            return view("packagist.index", [
                'packagist' => Sheets::collection('packagist')->all()->sortByDesc('date')
            ]);
        }
    }
