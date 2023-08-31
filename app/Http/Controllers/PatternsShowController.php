<?php

    namespace App\Http\Controllers;

    use App\Models\Pattern;
    use Illuminate\View\View;

    class PatternsShowController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(Pattern $pattern): View
        {

            return view('patterns.show', compact('pattern'));
        }
    }
