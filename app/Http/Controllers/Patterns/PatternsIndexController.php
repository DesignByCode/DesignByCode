<?php

    namespace App\Http\Controllers\Patterns;

    use App\Http\Controllers\Controller;
    use App\Models\Pattern;
    use Illuminate\View\View;

    class PatternsIndexController extends Controller
    {
        public function __invoke(): View
        {
            return view("patterns.index", [
                'patterns' => Pattern::all()
            ]);
        }
    }
