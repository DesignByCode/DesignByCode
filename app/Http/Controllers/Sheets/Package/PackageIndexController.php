<?php

    namespace App\Http\Controllers\Sheets\Package;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\View\View;
    use Spatie\Sheets\Facades\Sheets;

    class PackageIndexController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(Request $request): View
        {
            return view("packages.index", [
                'packages' => Sheets::collection('packages')->all()->sortByDesc('date')
            ]);
        }
    }
