<?php

    namespace App\Http\Controllers\Sheets\Package;

    use App\Http\Controllers\Controller;
    use App\Sheets\Package;
    use Illuminate\View\View;

    class PackageShowController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(Package $package): View
        {
            return view('packages.show', compact('package'));
        }
    }
