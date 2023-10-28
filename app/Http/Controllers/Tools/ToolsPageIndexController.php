<?php

    namespace App\Http\Controllers\Tools;

    use App\Http\Controllers\Controller;
    use Illuminate\View\View;

    class ToolsPageIndexController extends Controller
    {
        /**
         * Handle the incoming request.
         */
        public function __invoke(): View
        {
            return view("tools.index");
        }
    }
