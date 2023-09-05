<?php

    namespace Database\Seeders;

    use App\Models\Pattern;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Str;

    class PatternSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(): void
        {
            $patterns = [
                [
                    "name" => "Scales",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="-42" x="-2" patternTransform="rotate(0) skewX(0) scale(1)"><rect transform="skewX(28)" x="-22" y="-1" rx="10" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Scales alt",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="-42" x="-2" patternTransform="rotate(55) skewX(0) scale(1)"><rect transform="skewX(28)" x="-22" y="-1" rx="10" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Square grid",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><rect width="50" height="50" fill="none" stroke="currentColor" stroke-width="1.5" rx="0"/><rect width="30" height="30" x="10" y="10" fill="none" stroke="currentColor" stroke-width="1.5" rx="0"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Skewed Square grid",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(0) skewX(45) scale(1)" patternUnits="userSpaceOnUse"><rect width="50" height="50" fill="none" stroke="currentColor" stroke-width="1.5" rx="0"/><rect width="30" height="30" x="10" y="10" fill="none" stroke="currentColor" stroke-width="1.5" rx="0"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Diamond grid",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(45) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><rect width="50" height="50" fill="none" stroke="currentColor" stroke-width="1.5" rx="0"/><rect width="30" height="30" x="10" y="10" fill="none" stroke="currentColor" stroke-width="1.5" rx="0"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Pixel grid",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0" patternTransform="rotate(0) skewX(0) scale(1)"><path fill="currentColor" d="M-20-20h40v40h-40zm0 100h40v40h-40zM80-20h40v40H80zm0 100h40v40H80zM25 25h10v10H25zm20 20h10v10H45zm20 20h10v10H65zm0-40h10v10H65zM25 65h10v10H25z"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Pixel diamond grid",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0" patternTransform="rotate(45) skewX(0) scale(1)"><path fill="currentColor" d="M-20-20h40v40h-40zm0 100h40v40h-40zM80-20h40v40H80zm0 100h40v40H80zM25 25h10v10H25zm20 20h10v10H45zm20 20h10v10H65zm0-40h10v10H65zM25 65h10v10H25z"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Slanted grid",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="50" y="0" x="0" patternTransform="rotate(0) skewX(45) scale(1)"><path fill="none" stroke="currentColor" stroke-width="1.5" d="M0 0 L100 0 L100 50 L0 50 L0 0"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Slanted grid reversed",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="50" y="0" x="0" patternTransform="rotate(0) skewX(-45) scale(1)"><path fill="none" stroke="currentColor" stroke-width="1.5" d="M0 0 L100 0 L100 50 L0 50 L0 0"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Double square grid",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(0) skewX(0) scale(1)"><rect x="0" y="0" rx="0" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="10" y="10" rx="0" width="30" height="30" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Double diamond grid",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(45) skewX(0) scale(1)"><rect x="0" y="0" rx="0" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="10" y="10" rx="0" width="30" height="30" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Triple square grid",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><rect width="50" height="50" fill="none" stroke="currentColor" stroke-width="1.5" rx="0"/><rect width="30" height="30" x="10" y="10" fill="none" stroke="currentColor" stroke-width="1.5" rx="0"/><rect width="15" height="15" x="17" y="17" fill="none" stroke="currentColor" stroke-width="1.5" rx="0"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Triple diamond grid",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(45) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><rect width="50" height="50" fill="none" stroke="currentColor" stroke-width="1.5" rx="0"/><rect width="30" height="30" x="10" y="10" fill="none" stroke="currentColor" stroke-width="1.5" rx="0"/><rect width="15" height="15" x="17" y="17" fill="none" stroke="currentColor" stroke-width="1.5" rx="0"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded squares grid",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><rect width="50" height="50" fill="none" stroke="currentColor" stroke-width="1.5" rx="10"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded diamond grid",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(45) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><rect width="50" height="50" fill="none" stroke="currentColor" stroke-width="1.5" rx="10"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded squares with space",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><rect width="40" height="40" x="5" y="5" fill="none" stroke="currentColor" stroke-width="1.5" rx="10"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded diamond with space",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(45) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><rect width="40" height="40" x="5" y="5" fill="none" stroke="currentColor" stroke-width="1.5" rx="10"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded layered squares",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><rect width="40" height="40" x="5" y="5" fill="none" stroke="currentColor" stroke-width="1.5" rx="10"/><rect width="30" height="30" x="5" y="5" fill="none" stroke="currentColor" stroke-width="1.5" rx="8"/><rect width="20" height="20" x="6" y="6" fill="currentColor" stroke-width="1.5" rx="6"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded layered diamond",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(45) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><rect width="40" height="40" x="5" y="5" fill="none" stroke="currentColor" stroke-width="1.5" rx="10"/><rect width="30" height="30" x="5" y="5" fill="none" stroke="currentColor" stroke-width="1.5" rx="8"/><rect width="20" height="20" x="6" y="6" fill="currentColor" stroke-width="1.5" rx="6"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Polka dots",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><circle id="dbc-r-[random]" cx="25" cy="25" r="5" fill="currentColor" stroke="none"/><use x="25" y="25" href="#dbc-r-[random]"/><use x="25" y="-25" href="#dbc-r-[random]"/><use x="-25" y="25" href="#dbc-r-[random]"/><use x="-25" y="-25" href="#dbc-r-[random]"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Polka dots large",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><circle id="dbc-r-[random]" cx="25" cy="25" r="15" fill="currentColor" stroke="none"/><use x="25" y="25" href="#dbc-r-[random]"/><use x="25" y="-25" href="#dbc-r-[random]"/><use x="-25" y="25" href="#dbc-r-[random]"/><use x="-25" y="-25" href="#dbc-r-[random]"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Polka dots 2",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="15" fill="currentColor"/><circle id="dbc-r-[random]" cx="0" cy="0" r="5" fill="currentColor" stroke="none"/><use x="50" y="50" href="#dbc-r-[random]"/><use y="50" href="#dbc-r-[random]"/><use x="50" href="#dbc-r-[random]"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Polka dots 3",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="15" fill="none" stroke="currentColor" stroke-width="2.5"/><circle id="dbc-r-[random]" cx="0" cy="0" r="5" fill="currentColor" stroke="none"/><use x="50" y="50" href="#dbc-r-[random]"/><use y="50" href="#dbc-r-[random]"/><use x="50" href="#dbc-r-[random]"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Polka dots 4",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="15" fill="none" stroke="currentColor" stroke-width="2.5"/><circle cx="25" cy="25" r="5" fill="none" stroke="currentColor" stroke-width="1.5"/><circle id="dbc-r-[random]" cx="0" cy="0" r="5" fill="currentColor" stroke="none"/><use x="50" y="50" href="#dbc-r-[random]"/><use y="50" href="#dbc-r-[random]"/><use x="50" href="#dbc-r-[random]"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Polka dots grid",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><path fill="none" stroke="currentColor" stroke-width="1.5" d="M0 0h50v50H0z"/><circle id="dbc-r-[random]" cx="25" cy="25" r="5" fill="currentColor" stroke="none"/><use x="25" y="25" href="#dbc-r-[random]"/><use x="-25" y="-25" href="#dbc-r-[random]"/><use x="-25" y="25" href="#dbc-r-[random]"/><use x="25" y="-25" href="#dbc-r-[random]"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Polka dots diamond grid",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="50" height="50" x="0" y="0" patternTransform="rotate(45) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><path fill="none" stroke="currentColor" stroke-width="1.5" d="M0 0h50v50H0z"/><circle id="dbc-r-[random]" cx="25" cy="25" r="5" fill="currentColor" stroke="none"/><use x="25" y="25" href="#dbc-r-[random]"/><use x="-25" y="-25" href="#dbc-r-[random]"/><use x="-25" y="25" href="#dbc-r-[random]"/><use x="25" y="-25" href="#dbc-r-[random]"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Bricks",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="100" height="100" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><path fill="none" stroke="currentColor" stroke-width="1.5" d="M0 .5h100v50H0zm-50 50H50v50H-50z"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded waves",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="100" height="100" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><circle id="dbc-c-[random]" cx="0" cy="0" r="50" fill="none" stroke="currentColor" stroke-width="1.5"/><use x="100" y="100" href="#dbc-c-[random]"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded triple waves",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0" patternTransform="rotate(0) skewX(0) scale(1)"><circle r="50" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="5"/><circle r="50" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="5"/><circle r="40" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="60" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="60" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="40" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded triple waves with circles",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0" patternTransform="rotate(0) skewX(0) scale(1)"><circle r="5" cx="50" cy="50" fill="none" stroke="currentColor" stroke-width="2"/><circle r="30" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="30" cx="100" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="30" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="30" cx="0" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="50" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="5"/><circle r="50" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="5"/><circle r="40" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="60" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="60" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="40" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Stacked circles",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0" patternTransform="rotate(0) skewX(0) scale(1)"><circle id="dbc-r-[random]" r="100" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><use href="#dbc-r-[random]" x="100" y="0"/><use href="#dbc-r-[random]" x="0" y="100"/><use href="#dbc-r-[random]" x="100" y="100"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Overlaid circles",
                    "premium" => false,
                    "snippet" => '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="100" height="100" patternUnits="userSpaceOnUse" patternTransform="scale(1)"><circle id="dbc-circle-[random]" r="40" cy="50" cx="50" fill="none" stroke-width="2" stroke="currentColor"/><use href="#dbc-circle-[random]" x="-50" y="-50"/><use href="#dbc-circle-[random]" x="50" y="-50"/><use href="#dbc-circle-[random]" x="-50" y="50"/><use href="#dbc-circle-[random]" x="50" y="50"/></pattern></defs><rect fill="url(#dbc-[random])" width="100%" height="100%"></rect></svg>'
                ],
                [
                    "name" => "Hearts outline",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="100" height="100" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><path fill="none" stroke="currentColor" stroke-width="1.5" d="M72 42.3C73.2 49.5 53.7 64 50 69L31.3 50.2C19.9 36.9 40.2 22.9 50 37.1c6.6-9.6 21.6-7.2 22 5.2zm50-50C123.2-.5 103.7 14 100 19L81.3.2C69.9-13.1 90.2-27.1 100-12.9c6.6-9.6 21.6-7.2 22 5.2zm-100 0C23.2-.5 3.7 14 0 19L-18.7.2C-30.1-13.1-9.8-27.1 0-12.9c6.6-9.6 21.6-7.2 22 5.2zm0 100C23.2 99.5 3.7 114 0 119l-18.7-18.7C-30.1 86.9-9.8 72.9 0 87.1c6.6-9.6 21.6-7.2 22 5.2zm100 0c1.2 7.2-18.3 21.7-22 26.7l-18.7-18.7C69.9 86.9 90.2 72.9 100 87.1c6.6-9.6 21.6-7.2 22 5.2z"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Hearts solid",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="100" height="100" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse"><path fill="currentColor" d="M72 42.3C73.2 49.5 53.7 64 50 69L31.3 50.2C19.9 36.9 40.2 22.9 50 37.1c6.6-9.6 21.6-7.2 22 5.2zm50-50C123.2-.5 103.7 14 100 19L81.3.2C69.9-13.1 90.2-27.1 100-12.9c6.6-9.6 21.6-7.2 22 5.2zm-100 0C23.2-.5 3.7 14 0 19L-18.7.2C-30.1-13.1-9.8-27.1 0-12.9c6.6-9.6 21.6-7.2 22 5.2zm0 100C23.2 99.5 3.7 114 0 119l-18.7-18.7C-30.1 86.9-9.8 72.9 0 87.1c6.6-9.6 21.6-7.2 22 5.2zm100 0c1.2 7.2-18.3 21.7-22 26.7l-18.7-18.7C69.9 86.9 90.2 72.9 100 87.1c6.6-9.6 21.6-7.2 22 5.2z"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Chevron",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><pattern id="dbc-[random]" width="50" height="90" x="0" y="0" patternUnits="userSpaceOnUse" patternTransform="rotate(0) skewX(0) scale(1)" viewBox="0 0 10 18"><path id="dbc-p-[random]" fill="currentColor" d="m0 0 5 3v5L0 5zm10 0L5 3v5l5-3"/><use y="9" href="#dbc-p-[random]"/></pattern><rect x="0" y="0" width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Cube Pattern",
                    "premium" => false,
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><pattern id="dbc-[random]" width="126" height="200" x="0" y="126" patternUnits="userSpaceOnUse" patternTransform="rotate(0) skewX(0) scale(0.8)" viewBox="0 0 10 16"><g id="dbc-p-[random]"><path d="m0 0 5 3v5L0 5z" fill="currentColor" stroke="none" opacity="0.8"/><path d="M10 0 5 3v5l5-3" fill="currentColor" stroke="none"/></g><use x="5" y="8" href="#dbc-p-[random]"/><use x="-5" y="8" href="#dbc-p-[random]"/></pattern><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
            ];

            foreach ($patterns as $pattern) {
                $id = Str::random(16);
                Pattern::create($pattern);
            }


        }
    }
