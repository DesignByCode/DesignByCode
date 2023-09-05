<?php

    namespace App\View\Components;

    use Closure;
    use Illuminate\Contracts\View\View;
    use Illuminate\View\Component;

    class PackageCard extends Component
    {
        /**
         * Create a new component instance.
         */
        public function __construct(public $package = "")
        {
        }

        /**
         * Get the view / contents that represent the component.
         */
        public function render(): View|Closure|string
        {
            return view('packages.partials.package-card');
        }
    }
