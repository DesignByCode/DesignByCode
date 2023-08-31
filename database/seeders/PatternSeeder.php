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
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="-42" x="-2" patternTransform="rotate(0) scale(1)"><rect transform="skewX(28)" x="-22" y="-1" rx="10" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Scales alt",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="-42" x="-2" patternTransform="rotate(55) scale(1)"><rect transform="skewX(28)" x="-22" y="-1" rx="10" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Square grid",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="-5" patternTransform="rotate(0) scale(1)"><rect x="0" y="0" rx="0" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Diamond grid",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="-5" patternTransform="rotate(45) scale(1)"><rect x="0" y="0" rx="0" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Slanted grid",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="50" y="0" x="-5" patternTransform="skewX(45) scale(1)"><rect x="0" y="0" rx="0" width="100" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Slanted grid reversed",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="50" y="0" x="-5" patternTransform="skewX(-45) scale(1)"><rect x="0" y="0" rx="0" width="100" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Double square grid",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(0) scale(1)"><rect x="0" y="0" rx="0" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="10" y="10" rx="0" width="30" height="30" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Double diamond grid",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(45) scale(1)"><rect x="0" y="0" rx="0" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="10" y="10" rx="0" width="30" height="30" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Triple square grid",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(0) scale(1)"><rect x="0" y="0" rx="0" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="10" y="10" rx="0" width="30" height="30" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="17" y="17" rx="0" width="15" height="15" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Triple diamond grid",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(45) scale(1)"><rect x="0" y="0" rx="0" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="10" y="10" rx="0" width="30" height="30" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="17" y="17" rx="0" width="15" height="15" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded squares grid",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(0) scale(1)"><rect x="0" y="0" rx="10" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded diamond grid",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(45) scale(1)"><rect x="0" y="0" rx="10" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded squares with space",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(0) scale(1)"><rect x="5" y="5" rx="10" width="40" height="40" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded diamond with space",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(45) scale(1)"><rect x="5" y="5" rx="10" width="40" height="40" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded layered squares",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(0) scale(1)"><rect x="5" y="5" rx="10" width="40" height="40" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="5" y="5" rx="8" width="30" height="30" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="6" y="6" rx="6" width="20" height="20" stroke-width="1.5" stroke="none" fill="currentColor"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded layered diamond",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(45) scale(1)"><rect x="5" y="5" rx="10" width="40" height="40" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="5" y="5" rx="8" width="30" height="30" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="6" y="6" rx="6" width="20" height="20" stroke-width="1.5" stroke="none" fill="currentColor"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Polka dots",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(0) scale(1)"><circle id="dbc-c-[random]" r="5" cx="25" cy="25" fill="currentColor" stroke="none"/><use href="#dbc-c-[random]" x="25" y="25"/><use href="#dbc-c-[random]" x="25" y="-25"/><use href="#dbc-c-[random]" x="-25" y="25"/><use href="#dbc-c-[random]" x="-25" y="-25"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Polka dots large",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(0) scale(1)"><circle id="dbc-c-[random]" r="15" cx="25" cy="25" fill="currentColor" stroke="none"/><use href="#dbc-c-[random]" x="25" y="25"/><use href="#dbc-c-[random]" x="25" y="-25"/><use href="#dbc-c-[random]" x="-25" y="25"/><use href="#dbc-c-[random]" x="-25" y="-25"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Polka dots 2",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(0) scale(1)"><circle r="15" cx="25" cy="25" fill="currentColor" stroke="none"/><circle id="dbc-c-[random]" r="5" cx="0" cy="0" fill="currentColor" stroke="none"/><use href="#dbc-c-[random]" x="50" y="50"/><use href="#dbc-c-[random]" x="0" y="50"/><use href="#dbc-c-[random]" x="50" y="0"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Polka dots 3",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(0) scale(1)"><circle r="15" cx="25" cy="25" fill="none" stroke="currentColor"/><circle id="dbc-c-[random]" r="5" cx="0" cy="0" fill="currentColor" stroke="none"/><use href="#dbc-c-[random]" x="50" y="50"/><use href="#dbc-c-[random]" x="0" y="50"/><use href="#dbc-c-[random]" x="50" y="0"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Polka dots 4",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(0) scale(1)"><circle r="15" cx="25" cy="25" fill="none" stroke="currentColor"/><circle r="5" cx="25" cy="25" fill="none" stroke="currentColor"/><circle id="dbc-c-[random]" r="5" cx="0" cy="0" fill="currentColor" stroke="none"/><use href="#dbc-c-[random]" x="50" y="50"/><use href="#dbc-c-[random]" x="0" y="50"/><use href="#dbc-c-[random]" x="50" y="0"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Polka dots grid",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(0) scale(1)"><rect width="50" height="50" stroke="currentColor" stroke-width="1.5" fill="none"/><circle id="dbc-c-[random]" r="5" cx="25" cy="25" fill="currentColor" stroke="none"/><use href="#dbc-c-[random]" x="25" y="25"/><use href="#dbc-c-[random]" x="-25" y="-25"/><use href="#dbc-c-[random]" x="-25" y="25"/><use href="#dbc-c-[random]" x="25" y="-25"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Polka dots diamond grid",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0" patternTransform="rotate(45) scale(1)"><rect width="50" height="50" stroke="currentColor" stroke-width="1.5" fill="none"/><circle id="dbc-c-[random]" r="5" cx="25" cy="25" fill="currentColor" stroke="none"/><use href="#dbc-c-[random]" x="25" y="25"/><use href="#dbc-c-[random]" x="-25" y="-25"/><use href="#dbc-c-[random]" x="-25" y="25"/><use href="#dbc-c-[random]" x="25" y="-25"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Bricks",
                    "snippet" => '<svg class="dbc_svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="svg_pattern_bricks" patternUnits="userSpaceOnUse" width="100" height="100"><rect x="0" y="0.5" width="100" height="50" stroke-width="1.5" fill="none" stroke="currentColor"/><rect x="-50" y="50.5" width="100" height="50" stroke-width="1.5" fill="none" stroke="currentColor"/></pattern></defs><rect x="0" y="0" width="100%" height="100%" fill="url(#svg_pattern_bricks)"/></svg>'
                ],
                [
                    "name" => "Rounded waves",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0" patternTransform="rotate(0) scale(1)"><circle id="dbc-c-[random]" r="50" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><use href="#dbc-c-[random]" x="100" y="100"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded triple waves",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0" patternTransform="rotate(0) scale(1)"><circle r="50" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="5"/><circle r="50" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="5"/><circle r="40" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="60" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="60" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="40" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Rounded triple waves with circles",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0" patternTransform="rotate(0) scale(1)"><circle r="5" cx="50" cy="50" fill="none" stroke="currentColor" stroke-width="2"/><circle r="30" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="30" cx="100" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="30" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="30" cx="0" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="50" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="5"/><circle r="50" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="5"/><circle r="40" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="60" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="60" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="40" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Layered circle wave",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0" patternTransform="rotate(0) scale(1)"><circle r="50" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="50" cx="100" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="57" cx="50" cy="25" fill="none" stroke="currentColor" stroke-width="1.5"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Stacked circles",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0" patternTransform="rotate(0) scale(1)"><circle id="dbc-r-[random]" r="100" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><use href="#dbc-r-[random]" x="100" y="0"/><use href="#dbc-r-[random]" x="0" y="100"/><use href="#dbc-r-[random]" x="100" y="100"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Overlaid circles",
                    "snippet" => '<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" width="100" height="100" patternUnits="userSpaceOnUse" patternTransform="scale(1)"><circle id="dbc-circle-[random]" r="40" cy="50" cx="50" fill="none" stroke-width="2" stroke="currentColor"/><use href="#dbc-circle-[random]" x="-50" y="-50"/><use href="#dbc-circle-[random]" x="50" y="-50"/><use href="#dbc-circle-[random]" x="-50" y="50"/><use href="#dbc-circle-[random]" x="50" y="50"/></pattern></defs><rect fill="url(#dbc-[random])" width="100%" height="100%"></rect></svg>'
                ],
                [
                    "name" => "Hearts outline",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0" patternTransform="rotate(0) scale(1)"><path stroke-width="1.5" stroke="currentColor" fill="none" d="M72,42.3C73.2,49.5,53.7,64,50,69L31.3,50.2C19.9,36.9,40.2,22.9,50,37.1C56.6,27.5,71.6,29.9,72,42.3z"/><path stroke-width="1.5" stroke="currentColor" fill="none" d="M122-7.7c1.2,7.2-18.3,21.7-22,26.7L81.3,0.2C69.9-13.1,90.2-27.1,100-12.9C106.6-22.5,121.6-20.1,122-7.7z"/><path stroke-width="1.5" stroke="currentColor" fill="none" d="M22-7.7C23.2-0.5,3.7,14,0,19L-18.7,0.2C-30.1-13.1-9.8-27.1,0-12.9C6.6-22.5,21.6-20.1,22-7.7z"/><path stroke-width="1.5" stroke="currentColor" fill="none" d="M22,92.3C23.2,99.5,3.7,114,0,119l-18.7-18.7C-30.1,86.9-9.8,72.9,0,87.1C6.6,77.5,21.6,79.9,22,92.3z"/><path stroke-width="1.5" stroke="currentColor" fill="none" d="M122,92.3c1.2,7.2-18.3,21.7-22,26.7l-18.7-18.7C69.9,86.9,90.2,72.9,100,87.1C106.6,77.5,121.6,79.9,122,92.3z"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
                [
                    "name" => "Hearts solid",
                    "snippet" => '<svg class="dbc-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><defs><pattern id="dbc-[random]" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0" patternTransform="rotate(0) scale(1)"><path stroke="none" fill="currentColor" d="M72,42.3C73.2,49.5,53.7,64,50,69L31.3,50.2C19.9,36.9,40.2,22.9,50,37.1C56.6,27.5,71.6,29.9,72,42.3z"/><path stroke="none" fill="currentColor" d="M122-7.7c1.2,7.2-18.3,21.7-22,26.7L81.3,0.2C69.9-13.1,90.2-27.1,100-12.9C106.6-22.5,121.6-20.1,122-7.7z"/><path stroke="none" fill="currentColor" d="M22-7.7C23.2-0.5,3.7,14,0,19L-18.7,0.2C-30.1-13.1-9.8-27.1,0-12.9C6.6-22.5,21.6-20.1,22-7.7z"/><path stroke="none" fill="currentColor" d="M22,92.3C23.2,99.5,3.7,114,0,119l-18.7-18.7C-30.1,86.9-9.8,72.9,0,87.1C6.6,77.5,21.6,79.9,22,92.3z"/><path stroke="none" fill="currentColor" d="M122,92.3c1.2,7.2-18.3,21.7-22,26.7l-18.7-18.7C69.9,86.9,90.2,72.9,100,87.1C106.6,77.5,121.6,79.9,122,92.3z"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc-[random])"/></svg>'
                ],
            ];

            foreach ($patterns as $pattern) {
                $id = Str::random(16);
                Pattern::create($pattern);
            }


        }
    }
