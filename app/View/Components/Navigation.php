<?php

    namespace App\View\Components;

    use Closure;
    use Illuminate\Contracts\View\View;
    use Illuminate\View\Component;

    class Navigation extends Component
    {
        /**
         * Get the view / contents that represent the component.
         */
        public function render(): View|Closure|string
        {
            $links = collect([
                (object)[
                    "name" => "Home",
                    "route" => "home",
                    "active" => "/",
                    "children" => null
                ],
                (object)[
                    "name" => "Blog",
                    "route" => "posts.index",
                    "active" => "posts*",
                    "children" => null
                ],
                (object)[
                    "name" => "Open Source",
                    "route" => "packages.index",
                    "active" => "open-source*",
                    "children" => [
                        (object)[
                            "name" => "NPM Packages",
                            "classes" => "",
                            "route" => "packages.index",
                            "active" => "packages*",
                            "description" => "Javascript packages",
                            "icon" => '<svg xmlns="http://www.w3.org/2000/patterns" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" /></svg>'
                        ],
                        (object)[
                            "name" => "Packagist Packages",
                            "classes" => "bg-red-500",
                            "route" => "packagist.index",
                            "description" => "Packages for Laravel and PHP",
                            "icon" => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-2.25-1.313M21 7.5v2.25m0-2.25l-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3l2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75l2.25-1.313M12 21.75V19.5m0 2.25l-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25" /></svg>'
                        ],
                        (object)[
                            "name" => "SVG Patterns",
                            "classes" => "text-blue-500",
                            "route" => "patterns.index",
                            "description" => "Background patterns for website",
                            "icon" => '<svg xmlns="http://www.w3.org/2000/patterns" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" /></svg>'
                        ]
                    ]
                ],
//                (object)[
//                    "name" => "Dev Tools",
//                    "route" => "dev-tools.index",
//                    "active" => "/dev-tools",
//                    "children" => null
//                ]
//            (object) [
//                "name" => "Contact Us",
//                "route" => "contact-us",
//                "active" => "contact-us",
//                "children" => null
//            ],
            ]);


            return view('layouts.partials.navigation', compact('links'));
        }
    }
