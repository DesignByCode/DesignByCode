<?php

namespace App\Http\Controllers\Sheets;

use App\Http\Controllers\Controller;
use App\Sheets\Package;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SheetPackageShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Package $package): View
    {
        return view('packages.show', compact('package'));
    }
}
