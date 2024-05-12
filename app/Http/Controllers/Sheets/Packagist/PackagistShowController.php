<?php

    namespace App\Http\Controllers\Sheets\Packagist;

    use App\Http\Controllers\Controller;
    use App\Sheets\Packagist;
    use Illuminate\View\View;

    class PackagistShowController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(Packagist $packagist): View
        {
            return view('packagist.show', compact('packagist'));
        }
    }
