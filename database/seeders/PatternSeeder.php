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
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="dbc_svg_pattern_scales_1" patternUnits="userSpaceOnUse" width="50" height="50" y="-42" x="-2"><rect transform="skewX(28)" x="-22" y="-1" rx="10" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_scales_1)"/></svg>'
                ],
                [
                    "name" => "Scales alt",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern patternTransform="rotate(55)" id="dbc_svg_pattern_scales_2" patternUnits="userSpaceOnUse" width="50" height="50" y="-42" x="-2"><rect transform="skewX(28)" x="-22" y="-1" rx="10" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_scales_2)"/></svg>'
                ],
                [
                    "name" => "Square grid",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="dbc_svg_pattern_grid_001" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="-5"><rect x="0" y="0" rx="0" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_grid_001)"/></svg>'
                ],
                [
                    "name" => "Diamond grid",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern patternTransform="rotate(45)" id="dbc_svg_pattern_diamond_grid_001" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="-5"><rect x="0" y="0" rx="0" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_diamond_grid_001)"/></svg>'
                ],
                [
                    "name" => "Slanted grid",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern patternTransform="skewX(45)" id="svg_pattern_slanted_grid_001" patternUnits="userSpaceOnUse" width="100" height="50" y="0" x="-5"><rect x="0" y="0" rx="0" width="100" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#svg_pattern_slanted_grid_001)"/></svg>'
                ],
                [
                    "name" => "Slanted grid reversed",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern patternTransform="skewX(-45)" id="svg_pattern_slanted_grid_002" patternUnits="userSpaceOnUse" width="100" height="50" y="0" x="-5"><rect x="0" y="0" rx="0" width="100" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#svg_pattern_slanted_grid_002)"/></svg>'
                ],
                [
                    "name" => "Double square grid",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="svg_pattern_double_square_grid__002" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="-5"><rect x="0" y="0" rx="0" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="10" y="10" rx="0" width="30" height="30" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#svg_pattern_double_square_grid__002)"/></svg>'
                ],
                [
                    "name" => "Double diamond grid",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern patternTransform="rotate(45)" id="svg_pattern_double_diamond_grid__002" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="-5"><rect x="0" y="0" rx="0" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="10" y="10" rx="0" width="30" height="30" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#svg_pattern_double_diamond_grid__002)"/></svg>'
                ],
                [
                    "name" => "Triple square grid",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="svg_pattern_triple_square_grid" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="-5"><rect x="0" y="0" rx="0" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="10" y="10" rx="0" width="30" height="30" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="17" y="17" rx="0" width="15" height="15" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#svg_pattern_triple_square_grid)"/></svg>'
                ],
                [
                    "name" => "Triple diamond grid",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern patternTransform="rotate(45)" id="svg_pattern_00005" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="-5"><rect x="0" y="0" rx="0" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="10" y="10" rx="0" width="30" height="30" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="17" y="17" rx="0" width="15" height="15" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#svg_pattern_00005)"/></svg>'
                ],
                [
                    "name" => "Rounded squares grid",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="svg_pattern_rounded_squares_grid__001" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0"><rect x="0" y="0" rx="10" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#svg_pattern_rounded_squares_grid__001)"/></svg>'
                ],
                [
                    "name" => "Rounded diamond grid",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern patternTransform="rotate(45)" id="svg_pattern_rounded_diamond_grid__001" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0"><rect x="0" y="0" rx="10" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#svg_pattern_rounded_diamond_grid__001)"/></svg>'
                ],
                [
                    "name" => "Rounded squares with space",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="svg_pattern_rounded_squares_grid__002" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="-5"><rect x="5" y="5" rx="10" width="40" height="40" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#svg_pattern_rounded_squares_grid__002)"/></svg>'
                ],
                [
                    "name" => "Rounded diamond with space",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern patternTransform="rotate(45)" id="svg_pattern_rounded_diamond_grid__002" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="-5"><rect x="5" y="5" rx="10" width="40" height="40" stroke-width="1.5" stroke="currentColor" fill="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#svg_pattern_rounded_diamond_grid__002)"/></svg>'
                ],
                [
                    "name" => "Rounded layered squares",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="svg_pattern_rounded_layered_squares" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="-5"><rect x="5" y="5" rx="10" width="40" height="40" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="5" y="5" rx="8" width="30" height="30" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="6" y="6" rx="6" width="20" height="20" stroke-width="1.5" stroke="none" fill="currentColor"/></pattern></defs><rect width="100%" height="100%" fill="url(#svg_pattern_rounded_layered_squares)"/></svg>'
                ],
                [
                    "name" => "Rounded layered diamond",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern patternTransform="rotate(45)" id="svg_pattern_rounded_layered_diamonds" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="-5"><rect x="5" y="5" rx="10" width="40" height="40" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="5" y="5" rx="8" width="30" height="30" stroke-width="1.5" stroke="currentColor" fill="none"/><rect x="6" y="6" rx="6" width="20" height="20" stroke-width="1.5" stroke="none" fill="currentColor"/></pattern></defs><rect width="100%" height="100%" fill="url(#svg_pattern_rounded_layered_diamonds)"/></svg>'
                ],
                [
                    "name" => "Polka dots",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="dbc_svg_pattern_scales_overlapping_polka_dots_001" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0"><circle r="5" cx="25" cy="25" fill="currentColor" stroke="none"/><circle r="5" cx="0" cy="0" fill="currentColor" stroke="none"/><circle r="5" cx="0" cy="50" fill="currentColor" stroke="none"/><circle r="5" cx="50" cy="50" fill="currentColor" stroke="none"/><circle r="5" cx="50" cy="0" fill="currentColor" stroke="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_scales_overlapping_polka_dots_001)"/></svg>'
                ],
                [
                    "name" => "Polka dots 2",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern patternTransform="rotate(45)" id="dbc_svg_pattern_scales_overlapping_polka_dots_004" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0"><circle r="15" cx="25" cy="25" fill="currentColor" stroke="none"/><circle r="5" cx="0" cy="0" fill="currentColor" stroke="none"/><circle r="5" cx="0" cy="50" fill="currentColor" stroke="none"/><circle r="5" cx="50" cy="50" fill="currentColor" stroke="none"/><circle r="5" cx="50" cy="0" fill="currentColor" stroke="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_scales_overlapping_polka_dots_004)"/></svg>'
                ],
                [
                    "name" => "Polka dots 3",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern patternTransform="rotate(45)" id="dbc_svg_pattern_scales_overlapping_polka_dots_005" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0"><circle r="15" cx="25" cy="25" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="5" cx="0" cy="0" fill="currentColor" stroke="none"/><circle r="5" cx="0" cy="50" fill="currentColor" stroke="none"/><circle r="5" cx="50" cy="50" fill="currentColor" stroke="none"/><circle r="5" cx="50" cy="0" fill="currentColor" stroke="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_scales_overlapping_polka_dots_005)"/></svg>'
                ],
                [
                    "name" => "Polka dots 4",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern patternTransform="rotate(45)" id="dbc_svg_pattern_scales_overlapping_polka_dots_006" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0"><circle r="15" cx="25" cy="25" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="5" cx="25" cy="25" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="5" cx="0" cy="0" fill="currentColor" stroke="none"/><circle r="5" cx="0" cy="50" fill="currentColor" stroke="none"/><circle r="5" cx="50" cy="50" fill="currentColor" stroke="none"/><circle r="5" cx="50" cy="0" fill="currentColor" stroke="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_scales_overlapping_polka_dots_006)"/></svg>'
                ],
                [
                    "name" => "Polka dots grid",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="dbc_svg_pattern_scales_overlapping_polka_dots_002" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0"><rect width="50" height="50" stroke="currentColor" stroke-width="1.5" fill="none"/><circle r="5" cx="25" cy="25" fill="currentColor" stroke="none"/><circle r="5" cx="0" cy="0" fill="currentColor" stroke="none"/><circle r="5" cx="0" cy="50" fill="currentColor" stroke="none"/><circle r="5" cx="50" cy="50" fill="currentColor" stroke="none"/><circle r="5" cx="50" cy="0" fill="currentColor" stroke="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_scales_overlapping_polka_dots_002)"/></svg>'
                ],
                [
                    "name" => "Polka dots diamond grid",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern patternTransform="rotate(45)" id="dbc_svg_pattern_scales_overlapping_polka_dots_003" patternUnits="userSpaceOnUse" width="50" height="50" y="0" x="0"><rect width="50" height="50" stroke="currentColor" stroke-width="1.5" fill="none"/><circle r="5" cx="25" cy="25" fill="currentColor" stroke="none"/><circle r="5" cx="0" cy="0" fill="currentColor" stroke="none"/><circle r="5" cx="0" cy="50" fill="currentColor" stroke="none"/><circle r="5" cx="50" cy="50" fill="currentColor" stroke="none"/><circle r="5" cx="50" cy="0" fill="currentColor" stroke="none"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_scales_overlapping_polka_dots_003)"/></svg>'
                ],
                [
                    "name" => "Bricks",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="svg_pattern_bricks" patternUnits="userSpaceOnUse" width="100" height="100"><rect x="0" y="0.5" width="100" height="50" stroke-width="1.5" fill="none" stroke="currentColor"/><rect x="-50" y="50.5" width="100" height="50" stroke-width="1.5" fill="none" stroke="currentColor"/></pattern></defs><rect x="0" y="0" width="100%" height="100%" fill="url(#svg_pattern_bricks)"/></svg>'
                ],
                [
                    "name" => "Rounded waves",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="dbc_svg_pattern_scales_overlapping_rounded_waves_0001" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0"><circle r="50" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="50" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_scales_overlapping_rounded_waves_0001)"/></svg>'
                ],
                [
                    "name" => "Rounded triple waves",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="dbc_svg_pattern_scales_overlapping_rounded_waves_0002" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0"><circle r="50" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="5"/><circle r="50" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="5"/><circle r="40" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="60" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="60" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="40" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_scales_overlapping_rounded_waves_0002)"/></svg>'
                ],
                [
                    "name" => "Rounded triple waves with circles",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="dbc_svg_pattern_scales_overlapping_rounded_waves_0003" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0"><circle r="5" cx="50" cy="50" fill="none" stroke="currentColor" stroke-width="2"/><circle r="30" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="30" cx="100" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="30" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="30" cx="0" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="50" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="5"/><circle r="50" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="5"/><circle r="40" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="60" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="60" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="40" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_scales_overlapping_rounded_waves_0003)"/></svg>'
                ],
                [
                    "name" => "Layered circle wave",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="dbc_svg_pattern_scales_overlapping_waves_001" patternUnits="userSpaceOnUse" width="100" height="83" y="0" x="0"><circle r="50" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="50" cx="100" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="57" cx="50" cy="25" fill="none" stroke="currentColor" stroke-width="1.5"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_scales_overlapping_waves_001)"/></svg>'
                ],
                [
                    "name" => "Stacked circles",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="dbc_svg_pattern_rounded_waves_001}" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0"><circle r="100" cx="0" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="100" cx="100" cy="0" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="100" cx="100" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/><circle r="100" cx="0" cy="100" fill="none" stroke="currentColor" stroke-width="1.5"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_rounded_waves_001})"/></svg>'
                ],
                [
                    "name" => "Hearts outline",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="dbc_svg_pattern_hearts_001" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0"><path stroke-width="1.5" stroke="currentColor" fill="none" d="M72,42.3C73.2,49.5,53.7,64,50,69L31.3,50.2C19.9,36.9,40.2,22.9,50,37.1C56.6,27.5,71.6,29.9,72,42.3z"/><path stroke-width="1.5" stroke="currentColor" fill="none" d="M122-7.7c1.2,7.2-18.3,21.7-22,26.7L81.3,0.2C69.9-13.1,90.2-27.1,100-12.9C106.6-22.5,121.6-20.1,122-7.7z"/><path stroke-width="1.5" stroke="currentColor" fill="none" d="M22-7.7C23.2-0.5,3.7,14,0,19L-18.7,0.2C-30.1-13.1-9.8-27.1,0-12.9C6.6-22.5,21.6-20.1,22-7.7z"/><path stroke-width="1.5" stroke="currentColor" fill="none" d="M22,92.3C23.2,99.5,3.7,114,0,119l-18.7-18.7C-30.1,86.9-9.8,72.9,0,87.1C6.6,77.5,21.6,79.9,22,92.3z"/><path stroke-width="1.5" stroke="currentColor" fill="none" d="M122,92.3c1.2,7.2-18.3,21.7-22,26.7l-18.7-18.7C69.9,86.9,90.2,72.9,100,87.1C106.6,77.5,121.6,79.9,122,92.3z"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_hearts_001)"/></svg>'
                ],
                [
                    "name" => "Hearts solid",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="dbc_svg_pattern_hearts_002" patternUnits="userSpaceOnUse" width="100" height="100" y="0" x="0"><path stroke="none" fill="currentColor" d="M72,42.3C73.2,49.5,53.7,64,50,69L31.3,50.2C19.9,36.9,40.2,22.9,50,37.1C56.6,27.5,71.6,29.9,72,42.3z"/><path stroke="none" fill="currentColor" d="M122-7.7c1.2,7.2-18.3,21.7-22,26.7L81.3,0.2C69.9-13.1,90.2-27.1,100-12.9C106.6-22.5,121.6-20.1,122-7.7z"/><path stroke="none" fill="currentColor" d="M22-7.7C23.2-0.5,3.7,14,0,19L-18.7,0.2C-30.1-13.1-9.8-27.1,0-12.9C6.6-22.5,21.6-20.1,22-7.7z"/><path stroke="none" fill="currentColor" d="M22,92.3C23.2,99.5,3.7,114,0,119l-18.7-18.7C-30.1,86.9-9.8,72.9,0,87.1C6.6,77.5,21.6,79.9,22,92.3z"/><path stroke="none" fill="currentColor" d="M122,92.3c1.2,7.2-18.3,21.7-22,26.7l-18.7-18.7C69.9,86.9,90.2,72.9,100,87.1C106.6,77.5,121.6,79.9,122,92.3z"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_hearts_002)"/></svg>'
                ],
                [
                    "name" => "Overlapping circles",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="dbc_svg_pattern_overlapping_circles" patternUnits="userSpaceOnUse" width="199" height="199.5" y="0" x="0"><path stroke="none" fill="currentColor" d="M2188.4-638.7v-47.4c-31.6,0-61.4-12.3-83.7-34.7c-22.4-22.4-34.7-52.1-34.7-83.7h-47.4
		C2022.6-712.9,2096.8-638.7,2188.4-638.7z"/><path stroke="none" fill="currentColor" d="M2188.4-733.4v-47.4c-13.1,0-23.7-10.6-23.7-23.7h-47.4C2117.3-765.2,2149.1-733.4,2188.4-733.4z"/><path stroke="none" fill="currentColor" d="M2105.4-608c-25.4-10.7-48.2-26.1-67.8-45.7c-19.6-19.6-35-42.4-45.7-67.8c-11.1-26.2-16.7-54.2-16.7-83h-47.4
		c0,30,5.1,58.7,14.4,85.5c26.1,75.1,85.6,134.6,160.8,160.7c26.7,9.3,55.5,14.3,85.4,14.3v-47.4
		C2159.6-591.3,2131.7-596.9,2105.4-608z"/><path stroke="none" fill="currentColor" d="M1714.8-496.4v47.4c31.6,0,61.4,12.3,83.7,34.7s34.7,52.1,34.7,83.7h47.4C1880.6-422.2,1806.3-496.4,1714.8-496.4z"/><path stroke="none" fill="currentColor" d="M1714.8-401.7v47.4c13.1,0,23.7,10.6,23.7,23.7h47.4C1785.8-369.8,1754-401.7,1714.8-401.7z"/><path stroke="none" fill="currentColor" d="M2070.1-520.1c-0.5-0.2-1-0.4-1.5-0.6c-18.2-7.7-35.8-17.3-52.3-28.4c-16.3-11-31.6-23.7-45.6-37.6
		c-13.9-13.9-26.6-29.3-37.6-45.6c-11.1-16.5-20.7-34-28.4-52.3c-0.2-0.5-0.4-0.9-0.6-1.4c-8.2-19.7-14.3-40.1-18.3-60.9
		c-3.6-18.8-5.3-38-5.3-57.5h-47.4c0,13.6,0.8,27,2.3,40.2c2,18,5.4,35.6,10,52.7c5.7,20.9,13.2,41.1,22.3,60.2
		c35,73.2,94.4,132.6,167.7,167.6c19.2,9.2,39.3,16.7,60.3,22.3c17.1,4.6,34.7,8,52.7,10c13.1,1.5,26.5,2.2,40,2.2v-47.4
		c-19.4,0-38.6-1.8-57.4-5.3C2110.2-505.8,2089.8-511.9,2070.1-520.1z"/><path stroke="none" fill="currentColor" d="M2109.7-409.5c-0.8-0.1-1.7-0.3-2.5-0.5c-16.7-3.4-33.2-7.9-49.4-13.5c-8.8-3-17.5-6.3-26.1-10c-11.1-4.7-22-9.9-32.6-15.6
		c-12.3-6.5-24.2-13.7-35.8-21.5c-21.3-14.4-41.4-31-59.6-49.2c-18.2-18.2-34.8-38.3-49.2-59.6c-7.8-11.5-14.9-23.4-21.4-35.6
		c-5.7-10.7-11-21.7-15.7-32.8c-3.6-8.5-6.9-17.1-9.9-25.9c-5.6-16.2-10.1-32.8-13.5-49.6c-0.1-0.8-0.3-1.5-0.4-2.2
		c-3.2-16.2-5.4-32.7-6.6-49.3c-0.7-9.9-1.1-19.7-1.1-29.6h-47.4c0,8.2,0.2,16.4,0.7,24.5c-8-0.4-16.1-0.6-24.3-0.6v47.4
		c9.8,0,19.6,0.4,29.4,1.1c2.7,16.5,6.2,32.7,10.6,48.5c-13.1-1.5-26.5-2.2-40-2.2v47.4c19.4,0,38.6,1.8,57.4,5.3
		c8,19.5,17.4,38.3,28,56.4c0,0,0,0,0,0c-26.8-9.3-55.5-14.3-85.4-14.3v47.4c28.8,0,56.7,5.6,83,16.7c25.4,10.7,48.2,26.1,67.8,45.7
		c19.6,19.6,35,42.4,45.7,67.8c11.1,26.2,16.7,54.2,16.7,83h47.4c0-30-5.1-58.7-14.4-85.5c0,0,0,0,0,0c18,10.6,36.9,20,56.4,28
		c3.6,18.8,5.3,38,5.3,57.5h47.4c0-13.6-0.8-27-2.3-40.2c15.8,4.4,32.1,8,48.6,10.6c0.7,9.8,1.1,19.7,1.1,29.6h47.4
		c0-8.2-0.2-16.4-0.7-24.5c8,0.4,16.1,0.7,24.3,0.7v-47.4c-9.8,0-19.6-0.4-29.4-1.1C2142.4-404.1,2125.9-406.3,2109.7-409.5z"/><path stroke="none" fill="currentColor" d="M2354.2-804.3h-47.4c0,31.6-12.3,61.4-34.7,83.7c-22.4,22.4-52.1,34.7-83.7,34.7v47.4
		C2279.9-638.6,2354.2-712.8,2354.2-804.3z"/><path stroke="none" fill="currentColor" d="M2259.4-804.3h-47.4c0,13.1-10.6,23.7-23.7,23.7v47.4C2227.6-733.3,2259.4-765.1,2259.4-804.3z"/><path stroke="none" fill="currentColor" d="M2384.8-721.4c-10.7,25.4-26.1,48.2-45.7,67.8c-19.6,19.6-42.4,35-67.8,45.7c-26.2,11.1-54.2,16.7-83,16.7v47.4
		c30,0,58.7-5.1,85.5-14.4c75.1-26.1,134.6-85.6,160.7-160.8c9.3-26.7,14.3-55.5,14.3-85.4h-47.4
		C2401.5-775.5,2395.9-747.6,2384.8-721.4z"/><path stroke="none" fill="currentColor" d="M2496.5-330.7h47.4c0-31.6,12.3-61.4,34.7-83.7c22.4-22.4,52.1-34.7,83.7-34.7v-47.4
		C2570.7-496.5,2496.5-422.3,2496.5-330.7z"/><path stroke="none" fill="currentColor" d="M2591.2-330.7h47.4c0-13.1,10.6-23.7,23.7-23.7v-47.4C2623-401.8,2591.2-370,2591.2-330.7z"/><path stroke="none" fill="currentColor" d="M2472.7-686.1c-0.2,0.5-0.4,1-0.6,1.5c-7.7,18.2-17.3,35.8-28.4,52.3c-11,16.3-23.7,31.6-37.6,45.6
		c-13.9,13.9-29.3,26.6-45.6,37.6c-16.4,11.1-34,20.7-52.3,28.4c-0.5,0.2-0.9,0.4-1.4,0.6c-19.7,8.2-40.1,14.3-60.9,18.3
		c-18.8,3.6-38,5.3-57.5,5.3v47.4c13.6,0,27-0.8,40.2-2.3c18-2,35.6-5.4,52.7-10c20.9-5.7,41.1-13.2,60.2-22.3
		c73.2-35,132.6-94.4,167.6-167.7c9.2-19.2,16.7-39.3,22.3-60.3c4.6-17.1,8-34.7,10-52.7c1.5-13.1,2.2-26.5,2.2-40h-47.4
		c0,19.4-1.8,38.6-5.3,57.4C2487-726.1,2481-705.8,2472.7-686.1z"/><path stroke="none" fill="currentColor" d="M2583.3-725.6c-0.1,0.8-0.3,1.7-0.5,2.5c-3.4,16.7-7.9,33.2-13.5,49.4c-3,8.8-6.3,17.5-10,26.1c-4.7,11.1-9.9,22-15.6,32.6
		c-6.5,12.3-13.7,24.2-21.5,35.8c-14.4,21.3-31,41.4-49.2,59.6c-18.2,18.2-38.3,34.8-59.6,49.2c-11.5,7.8-23.4,14.9-35.6,21.4
		c-10.7,5.7-21.7,11-32.8,15.7c-8.5,3.6-17.1,6.9-25.9,9.9c-16.2,5.6-32.8,10.1-49.6,13.5c-0.8,0.1-1.5,0.3-2.2,0.4
		c-16.2,3.2-32.7,5.4-49.3,6.6c-9.9,0.7-19.7,1.1-29.6,1.1v47.4c8.2,0,16.4-0.2,24.5-0.7c-0.4,8-0.6,16.1-0.6,24.3h47.4
		c0-9.8,0.4-19.6,1.1-29.4c16.5-2.7,32.7-6.2,48.5-10.6c-1.5,13.1-2.2,26.5-2.2,40h47.4c0-19.4,1.8-38.6,5.3-57.4
		c19.5-8,38.3-17.4,56.4-28c0,0,0,0,0,0c-9.3,26.8-14.3,55.5-14.3,85.4h47.4c0-28.8,5.6-56.7,16.7-83c10.7-25.4,26.1-48.2,45.7-67.8
		c19.6-19.6,42.4-35,67.8-45.7c26.2-11.1,54.2-16.7,83-16.7v-47.4c-30,0-58.7,5.1-85.5,14.4c0,0,0,0,0,0c10.6-18,20-36.9,28-56.4
		c18.8-3.6,38-5.3,57.5-5.3V-686c-13.6,0-27,0.8-40.2,2.3c4.4-15.8,8-32.1,10.6-48.6c9.8-0.7,19.7-1.1,29.6-1.1v-47.4
		c-8.2,0-16.4,0.2-24.5,0.7c0.4-8,0.7-16.1,0.7-24.3H2591c0,9.8-0.4,19.6-1.1,29.4C2588.8-758.3,2586.5-741.8,2583.3-725.6z"/><path stroke="none" fill="currentColor" d="M2188.5-22.5v47.4c31.6,0,61.4,12.3,83.7,34.7c22.4,22.4,34.7,52.1,34.7,83.7h47.4C2354.3,51.7,2280.1-22.5,2188.5-22.5z"/><path stroke="none" fill="currentColor" d="M2188.5,72.2v47.4c13.1,0,23.7,10.6,23.7,23.7h47.4C2259.6,104,2227.8,72.2,2188.5,72.2z"/><path stroke="none" fill="currentColor" d="M2271.5-53.1c25.4,10.7,48.2,26.1,67.8,45.7c19.6,19.6,35,42.4,45.7,67.8c11.1,26.3,16.7,54.2,16.7,83h47.4
		c0-30-5.1-58.7-14.4-85.5c-26.1-75.1-85.6-134.6-160.8-160.7c-26.7-9.3-55.5-14.3-85.4-14.3v47.4
		C2217.3-69.9,2245.2-64.2,2271.5-53.1z"/><path stroke="none" fill="currentColor" d="M2662.1-164.8v-47.4c-31.6,0-61.4-12.3-83.7-34.7s-34.7-52.1-34.7-83.7h-47.4C2496.3-239,2570.6-164.8,2662.1-164.8z"/><path stroke="none" fill="currentColor" d="M2662.1-259.5v-47.4c-13.1,0-23.7-10.6-23.7-23.7h-47.4C2591.1-291.4,2622.9-259.5,2662.1-259.5z"/><path stroke="none" fill="currentColor" d="M2306.8-141.1c0.5,0.2,1,0.4,1.5,0.6c18.2,7.7,35.8,17.3,52.3,28.4c16.3,11,31.6,23.7,45.6,37.6
		c13.9,13.9,26.6,29.3,37.6,45.6c11.1,16.5,20.7,34,28.4,52.3c0.2,0.5,0.4,0.9,0.6,1.4c8.2,19.7,14.3,40.1,18.3,60.9
		c3.6,18.8,5.3,38,5.3,57.5h47.4c0-13.6-0.8-27-2.3-40.2c-2-18-5.4-35.6-10-52.7c-5.6-20.9-13.2-41.1-22.3-60.2
		c-35-73.2-94.4-132.6-167.7-167.6c-19.2-9.2-39.3-16.7-60.3-22.3c-17.1-4.6-34.7-8-52.7-10c-13.1-1.5-26.5-2.2-40-2.2v47.4
		c19.4,0,38.6,1.8,57.4,5.3C2266.7-155.4,2287.1-149.3,2306.8-141.1z"/><path stroke="none" fill="currentColor" d="M2267.2-251.7c0.8,0.1,1.7,0.3,2.5,0.5c16.7,3.4,33.2,7.9,49.4,13.5c8.8,3,17.5,6.3,26.1,10c11.1,4.7,22,9.9,32.6,15.6
		c12.3,6.5,24.2,13.7,35.8,21.5c21.3,14.4,41.4,31,59.6,49.2c18.2,18.2,34.8,38.3,49.2,59.6c7.8,11.5,14.9,23.4,21.4,35.6
		c5.7,10.7,11,21.7,15.7,32.8c3.6,8.5,6.9,17.1,9.9,25.9c5.6,16.2,10.1,32.8,13.5,49.6c0.1,0.8,0.3,1.5,0.4,2.3
		c3.2,16.2,5.4,32.7,6.6,49.3c0.7,9.9,1.1,19.7,1.1,29.6h47.4c0-8.2-0.2-16.4-0.7-24.5c8,0.4,16.1,0.6,24.3,0.6V72
		c-9.8,0-19.6-0.4-29.4-1.1c-2.7-16.5-6.2-32.7-10.6-48.5c13.1,1.5,26.5,2.2,40,2.2v-47.4c-19.4,0-38.6-1.8-57.4-5.3
		c-8-19.5-17.4-38.3-28-56.4c0,0,0,0,0,0c26.8,9.3,55.5,14.3,85.4,14.3v-47.4c-28.8,0-56.7-5.6-83-16.7
		c-25.4-10.7-48.2-26.1-67.8-45.7c-19.6-19.6-35-42.4-45.7-67.8c-11.1-26.2-16.7-54.2-16.7-83h-47.4c0,30,5.1,58.7,14.4,85.5
		c0,0,0,0,0,0c-18-10.6-36.9-20-56.4-28c-3.6-18.8-5.3-38-5.3-57.5h-47.4c0,13.6,0.8,27,2.3,40.2c-15.8-4.4-32.1-8-48.6-10.6
		c-0.7-9.8-1.1-19.7-1.1-29.6h-47.4c0,8.2,0.2,16.4,0.7,24.5c-8-0.4-16.1-0.7-24.3-0.7v47.4c9.8,0,19.6,0.4,29.4,1.1
		C2234.5-257.1,2251-254.9,2267.2-251.7z"/><path stroke="none" fill="currentColor" d="M2022.7,143.1h47.4c0-31.6,12.3-61.4,34.7-83.7c22.4-22.4,52.1-34.7,83.7-34.7v-47.4C2097-22.6,2022.7,51.6,2022.7,143.1z"/><path stroke="none" fill="currentColor" d="M2117.5,143.1h47.4c0-13.1,10.6-23.7,23.7-23.7V72.1C2149.3,72.1,2117.5,103.9,2117.5,143.1z"/><path stroke="none" fill="currentColor" d="M1992.1,60.2c10.7-25.4,26.1-48.2,45.7-67.8c19.6-19.6,42.4-35,67.8-45.7c26.2-11.1,54.2-16.7,83-16.7v-47.4
		c-30,0-58.7,5.1-85.5,14.4c-75.1,26.1-134.6,85.6-160.7,160.8c-9.3,26.7-14.3,55.5-14.3,85.4h47.4
		C1975.4,114.3,1981,86.4,1992.1,60.2z"/><path stroke="none" fill="currentColor" d="M1880.4-330.5h-47.4c0,31.6-12.3,61.4-34.7,83.7c-22.4,22.4-52.1,34.7-83.7,34.7v47.4
		C1806.2-164.7,1880.4-238.9,1880.4-330.5z"/><path stroke="none" fill="currentColor" d="M1785.7-330.5h-47.4c0,13.1-10.6,23.7-23.7,23.7v47.4C1753.9-259.4,1785.7-291.2,1785.7-330.5z"/><path stroke="none" fill="currentColor" d="M1904.2,24.9c0.2-0.5,0.4-1,0.6-1.5c7.7-18.2,17.3-35.8,28.4-52.3c11-16.3,23.7-31.6,37.6-45.6
		c13.9-13.9,29.3-26.6,45.6-37.6c16.5-11.1,34-20.7,52.3-28.4c0.5-0.2,0.9-0.4,1.4-0.6c19.7-8.2,40.1-14.3,60.9-18.3
		c18.8-3.6,38-5.3,57.5-5.3v-47.4c-13.6,0-27,0.8-40.2,2.3c-18,2-35.6,5.4-52.7,10c-20.9,5.7-41.1,13.2-60.2,22.3
		c-73.2,35-132.6,94.4-167.6,167.7c-9.2,19.2-16.7,39.3-22.3,60.3c-4.6,17.1-8,34.7-10,52.7c-1.5,13.1-2.2,26.5-2.2,40h47.4
		c0-19.4,1.8-38.6,5.3-57.4C1889.9,64.9,1895.9,44.6,1904.2,24.9z"/><path stroke="none" fill="currentColor" d="M1793.6,64.4c0.1-0.8,0.3-1.7,0.5-2.5c3.4-16.7,7.9-33.2,13.5-49.4c3-8.8,6.3-17.5,10-26.1c4.7-11.1,9.9-22,15.6-32.6
		c6.5-12.3,13.7-24.2,21.5-35.8c14.4-21.3,31-41.4,49.2-59.6c18.2-18.2,38.3-34.8,59.6-49.2c11.5-7.8,23.4-14.9,35.6-21.4
		c10.7-5.7,21.7-11,32.8-15.7c8.5-3.6,17.1-6.9,25.9-9.9c16.2-5.6,32.8-10.1,49.6-13.5c0.8-0.1,1.5-0.3,2.2-0.4
		c16.2-3.2,32.7-5.4,49.3-6.6c9.9-0.7,19.7-1.1,29.6-1.1v-47.4c-8.2,0-16.4,0.2-24.5,0.7c0.4-8,0.6-16.1,0.6-24.3h-47.4
		c0,9.8-0.4,19.6-1.1,29.4c-16.5,2.7-32.7,6.2-48.5,10.6c1.5-13.1,2.2-26.5,2.2-40h-47.4c0,19.4-1.8,38.6-5.3,57.4
		c-19.5,8-38.3,17.4-56.4,28c0,0,0,0,0,0c9.3-26.8,14.3-55.5,14.3-85.4h-47.4c0,28.8-5.6,56.7-16.7,83
		c-10.7,25.4-26.1,48.2-45.7,67.8c-19.6,19.6-42.4,35-67.8,45.7c-26.2,11.1-54.2,16.7-83,16.7v47.4c30,0,58.7-5.1,85.5-14.4
		c0,0,0,0,0,0c-10.6,18-20,36.9-28,56.4c-18.8,3.6-38,5.3-57.5,5.3v47.4c13.6,0,27-0.8,40.2-2.3c-4.4,15.8-8,32.1-10.6,48.6
		c-9.8,0.7-19.7,1.1-29.6,1.1v47.4c8.2,0,16.4-0.2,24.5-0.7c-0.4,8-0.7,16.1-0.7,24.3h47.4c0-9.8,0.4-19.6,1.1-29.4
		C1788.1,97.1,1790.4,80.6,1793.6,64.4z"/><path stroke="none" fill="currentColor" d="M65,0h10c0,6.7,2.6,13,7.3,17.7C87,22.4,93.3,25,100,25s13-2.6,17.7-7.3C122.4,13,125,6.7,125,0h10c0,19.3-15.7,35-35,35
	C80.6,35,65,19.3,65,0z M100,15L100,15c8.3,0,15-6.7,15-15h-10c0,2.8-2.2,5-5,5c-2.8,0-5-2.2-5-5H85C85,8.3,91.7,15,100,15z M0,135
	c19.3,0,35-15.7,35-35c0-19.3-15.7-35-35-35v10c6.7,0,13,2.6,17.7,7.3c4.7,4.7,7.3,11,7.3,17.7s-2.6,13-7.3,17.7
	C13,122.4,6.7,125,0,125V135z M0,105v10c8.3,0,15-6.7,15-15S8.3,85,0,85v10c2.8,0,5,2.2,5,5S2.8,105,0,105z M165,100
	c0,19.3,15.7,35,35,35v-10c-6.7,0-13-2.6-17.7-7.3c-4.7-4.7-7.3-11-7.3-17.7c0-6.7,2.6-13,7.3-17.7c4.7-4.7,11-7.3,17.7-7.3V65
	C180.7,65,165,80.6,165,100z M185,100L185,100c0,8.3,6.7,15,15,15v-10c-2.8,0-5-2.2-5-5c0-2.8,2.2-5,5-5V85
	C191.7,85,185,91.7,185,100z M115.2,93.8c-0.1,2.1-0.2,4.1-0.2,6.2c0,2.1,0.1,4.2,0.2,6.3c3.5,0.6,6.9,1.3,10.2,2.2
	c-0.3-2.8-0.5-5.6-0.5-8.5c0,0,0,0,0,0c0,0,0,0,0,0c0-2.9,0.2-5.7,0.5-8.4c0.4-3.8,1.1-7.5,2.1-11.1c1.2-4.4,2.8-8.7,4.7-12.7
	c7.4-15.5,19.9-28,35.4-35.4c4.1-1.9,8.3-3.5,12.7-4.7c3.6-1,7.3-1.7,11.1-2.1c2.8-0.3,5.6-0.5,8.5-0.5v10c-4.1,0-8.2,0.4-12.1,1.1
	c-4.4,0.8-8.7,2.1-12.9,3.9c-0.1,0-0.2,0.1-0.3,0.1c-3.9,1.6-7.6,3.6-11,6c-3.4,2.3-6.7,5-9.6,7.9c-2.9,2.9-5.6,6.2-7.9,9.6
	c-2.3,3.5-4.4,7.2-6,11c0,0.1-0.1,0.2-0.1,0.3c-1.7,4.2-3,8.5-3.8,12.9c-0.7,4-1.1,8-1.1,12.1c0,4.1,0.4,8.2,1.1,12.1
	c4.1,1.7,8.1,3.7,11.9,5.9c0,0,0,0,0,0c-2-5.7-3-11.7-3-18.1h0c0-6.3,1.1-12.4,3-18c5.5-15.9,18.1-28.4,33.9-33.9
	c5.7-2,11.7-3,18.1-3v10c-6.1,0-12,1.2-17.5,3.5c-5.4,2.3-10.2,5.5-14.3,9.6c-4.1,4.1-7.4,8.9-9.6,14.3C156.2,88,155,93.9,155,100h0
	c0,6.1,1.2,12,3.5,17.5c2.3,5.4,5.5,10.2,9.6,14.3c4.1,4.1,8.9,7.4,14.3,9.6c5.5,2.3,11.4,3.5,17.5,3.5v10c-6.3,0-12.4-1.1-18-3
	c0,0,0,0,0,0c2.2,3.8,4.2,7.8,5.9,11.9c4,0.7,8,1.1,12.1,1.1v10c-2.9,0-5.7-0.2-8.4-0.5c0.9,3.3,1.7,6.8,2.2,10.2
	c2.1,0.1,4.1,0.2,6.2,0.2v10c-1.7,0-3.4,0-5.1-0.1c0.1,1.7,0.1,3.4,0.1,5.2h-10c0-2.1-0.1-4.2-0.2-6.3c-0.3-3.5-0.7-7-1.4-10.4
	c0-0.2-0.1-0.3-0.1-0.5c-0.7-3.5-1.7-7.1-2.9-10.5c-0.6-1.8-1.3-3.7-2.1-5.5c-1-2.4-2.1-4.7-3.3-6.9c-1.4-2.6-2.9-5.1-4.5-7.5
	c-3-4.5-6.5-8.7-10.4-12.6c-3.9-3.9-8.1-7.3-12.6-10.4c-2.4-1.6-5-3.2-7.6-4.5c-2.2-1.2-4.5-2.3-6.9-3.3c-1.8-0.8-3.6-1.5-5.5-2.1
	c-3.4-1.2-6.9-2.1-10.4-2.8c-0.2,0-0.4-0.1-0.5-0.1c-3.4-0.7-6.9-1.1-10.4-1.4c-2.1-0.1-4.1-0.2-6.2-0.2c-2.1,0-4.2,0.1-6.3,0.2
	c-0.6,3.5-1.3,6.9-2.2,10.2c2.8-0.3,5.6-0.5,8.5-0.5c2.9,0,5.7,0.2,8.4,0.5c3.8,0.4,7.5,1.1,11.1,2.1c4.4,1.2,8.7,2.8,12.7,4.7
	c15.5,7.4,28,19.9,35.4,35.4c1.9,4.1,3.5,8.3,4.7,12.7c1,3.6,1.7,7.3,2.1,11.1c0.3,2.8,0.5,5.6,0.5,8.5h-10c0-4.1-0.4-8.2-1.1-12.1
	c-0.8-4.4-2.1-8.7-3.9-12.9c0-0.1-0.1-0.2-0.1-0.3c-1.6-3.9-3.6-7.6-6-11c-2.3-3.4-5-6.7-7.9-9.6c-2.9-2.9-6.2-5.6-9.6-7.9
	c-3.5-2.3-7.2-4.4-11-6c-0.1,0-0.2-0.1-0.3-0.1c-4.2-1.7-8.5-3-12.9-3.8c-4-0.7-8-1.1-12.1-1.1c-4.1,0-8.2,0.4-12.1,1.1
	c-1.7,4.1-3.7,8.1-5.9,11.9c0,0,0,0,0,0c5.7-2,11.7-3,18.1-3v0c6.3,0,12.4,1.1,18,3c15.9,5.5,28.4,18.1,33.9,33.9
	c2,5.7,3,11.7,3,18.1h-10c0-6.1-1.2-12-3.5-17.5c-2.3-5.4-5.5-10.2-9.6-14.3c-4.1-4.1-8.9-7.4-14.3-9.6c-5.5-2.3-11.4-3.5-17.5-3.5
	v0c-6.1,0-12,1.2-17.5,3.5c-5.4,2.3-10.2,5.5-14.3,9.6c-4.1,4.1-7.4,8.9-9.6,14.3C56.2,188,55,193.9,55,200H45c0-6.3,1.1-12.4,3-18
	c0,0,0,0,0,0c-3.8,2.2-7.8,4.2-11.9,5.9c-0.7,4-1.1,8-1.1,12.1H25c0-2.9,0.2-5.7,0.5-8.4c-3.3,0.9-6.8,1.7-10.2,2.2
	c-0.1,2.1-0.2,4.1-0.2,6.2H5c0-1.7,0-3.4,0.1-5.1C3.5,195,1.7,195,0,195v-10c2.1,0,4.2-0.1,6.3-0.2c3.5-0.3,7-0.7,10.4-1.4
	c0.2,0,0.3-0.1,0.5-0.1c3.5-0.7,7.1-1.7,10.5-2.9c1.8-0.6,3.7-1.3,5.5-2.1c2.4-1,4.7-2.1,6.9-3.3c2.6-1.4,5.1-2.9,7.5-4.5
	c4.5-3,8.7-6.5,12.6-10.4c3.9-3.9,7.3-8.1,10.4-12.6c1.6-2.4,3.2-5,4.5-7.6c1.2-2.2,2.3-4.5,3.3-6.9c0.8-1.8,1.5-3.6,2.1-5.5
	c1.2-3.4,2.1-6.9,2.8-10.4c0-0.2,0.1-0.4,0.1-0.5c0.7-3.4,1.1-6.9,1.4-10.4c0.1-2.1,0.2-4.1,0.2-6.2c0-2.1-0.1-4.2-0.2-6.3
	c-3.5-0.6-6.9-1.3-10.2-2.2c0.3,2.8,0.5,5.6,0.5,8.5c0,2.9-0.2,5.7-0.5,8.4c-0.4,3.8-1.1,7.5-2.1,11.1c-1.2,4.4-2.8,8.7-4.7,12.7
	c-7.4,15.5-19.9,28-35.4,35.4c-4.1,1.9-8.3,3.5-12.7,4.7c-3.6,1-7.3,1.7-11.1,2.1C5.7,174.9,2.9,175,0,175v-10
	c4.1,0,8.2-0.4,12.1-1.1c4.4-0.8,8.7-2.1,12.9-3.9c0.1,0,0.2-0.1,0.3-0.1c3.9-1.6,7.6-3.6,11-6c3.4-2.3,6.7-5,9.6-7.9
	c2.9-2.9,5.6-6.2,7.9-9.6c2.3-3.5,4.4-7.2,6-11c0-0.1,0.1-0.2,0.1-0.3c1.7-4.2,3-8.5,3.8-12.9c0.7-4,1.1-8,1.1-12.1
	c0-4.1-0.4-8.2-1.1-12.1c-4.1-1.7-8.1-3.7-11.9-5.9c0,0,0,0,0,0c2,5.7,3,11.7,3,18.1h0c0,6.3-1.1,12.4-3,18
	c-5.5,15.9-18.1,28.4-33.9,33.9c-5.7,2-11.7,3-18.1,3v-10c6.1,0,12-1.2,17.5-3.5c5.4-2.3,10.2-5.5,14.3-9.6
	c4.1-4.1,7.4-8.9,9.6-14.3C43.8,112,45,106.1,45,100h0c0-6.1-1.2-12-3.5-17.5c-2.3-5.4-5.5-10.2-9.6-14.3c-4.1-4.1-8.9-7.4-14.3-9.6
	C12,56.2,6.1,55,0,55V45c6.3,0,12.4,1.1,18,3c0,0,0,0,0,0c-2.2-3.8-4.2-7.8-5.9-11.9C8.1,35.4,4.1,35,0,35V25c2.9,0,5.7,0.2,8.4,0.5
	c-0.9-3.3-1.7-6.8-2.2-10.2C4.1,15.1,2.1,15,0,15V5c1.7,0,3.4,0,5.1,0.1C5,3.5,5,1.7,5,0h10c0,2.1,0.1,4.2,0.2,6.3
	c0.3,3.5,0.7,7,1.4,10.4c0,0.2,0.1,0.3,0.1,0.5c0.7,3.5,1.7,7.1,2.9,10.5c0.6,1.8,1.3,3.7,2.1,5.5c1,2.4,2.1,4.7,3.3,6.9
	c1.4,2.6,2.9,5.1,4.5,7.5c3,4.5,6.5,8.7,10.4,12.6c3.9,3.9,8.1,7.3,12.6,10.4c2.4,1.6,5,3.2,7.6,4.5c2.2,1.2,4.5,2.3,6.9,3.3
	c1.8,0.8,3.6,1.5,5.5,2.1c3.4,1.2,6.9,2.1,10.4,2.8c0.2,0,0.4,0.1,0.5,0.1c3.4,0.7,6.9,1.1,10.4,1.4c2.1,0.1,4.1,0.2,6.2,0.2v0
	c2.1,0,4.2-0.1,6.3-0.2c0.6-3.5,1.3-6.9,2.2-10.2c-2.8,0.3-5.6,0.5-8.5,0.5v0c-2.9,0-5.7-0.2-8.4-0.5c-3.8-0.4-7.5-1.1-11.1-2.1
	c-4.4-1.2-8.7-2.8-12.7-4.7c-15.5-7.4-28-19.9-35.4-35.4c-1.9-4.1-3.5-8.3-4.7-12.7c-1-3.6-1.7-7.3-2.1-11.1C25.1,5.7,25,2.9,25,0
	h10c0,4.1,0.4,8.2,1.1,12.1c0.8,4.4,2.1,8.7,3.9,12.9c0,0.1,0.1,0.2,0.1,0.3c1.6,3.9,3.6,7.6,6,11c2.3,3.4,5,6.7,7.9,9.6
	c2.9,2.9,6.2,5.6,9.6,7.9c3.5,2.3,7.2,4.4,11,6c0.1,0,0.2,0.1,0.3,0.1c4.2,1.7,8.5,3,12.9,3.8c4,0.7,8,1.1,12.1,1.1v0
	c4.1,0,8.2-0.4,12.1-1.1c1.7-4.1,3.7-8.1,5.9-11.9c0,0,0,0,0,0c-5.7,2-11.7,3-18.1,3v0c-6.3,0-12.4-1.1-18-3
	C66.1,46.5,53.5,33.9,48,18.1C46,12.4,45,6.3,45,0h10c0,6.1,1.2,12,3.5,17.5c2.3,5.4,5.5,10.2,9.6,14.3c4.1,4.1,8.9,7.4,14.3,9.6
	C88,43.8,93.9,45,100,45v0c6.1,0,12-1.2,17.5-3.5c5.4-2.3,10.2-5.5,14.3-9.6c4.1-4.1,7.4-8.9,9.6-14.3C143.8,12,145,6.1,145,0h10
	c0,6.3-1.1,12.4-3,18c0,0,0,0,0,0c3.8-2.2,7.8-4.2,11.9-5.9c0.7-4,1.1-8,1.1-12.1h10c0,2.9-0.2,5.7-0.5,8.4
	c3.3-0.9,6.8-1.7,10.2-2.2c0.1-2.1,0.2-4.1,0.2-6.2h10c0,1.7,0,3.4-0.1,5.1C196.5,5,198.3,5,200,5v10c-2.1,0-4.2,0.1-6.3,0.2
	c-3.5,0.3-7,0.7-10.4,1.4c-0.2,0-0.3,0.1-0.5,0.1c-3.5,0.7-7.1,1.7-10.5,2.9c-1.8,0.6-3.7,1.3-5.5,2.1c-2.4,1-4.7,2.1-6.9,3.3
	c-2.6,1.4-5.1,2.9-7.5,4.5c-4.5,3-8.7,6.5-12.6,10.4c-3.9,3.9-7.3,8.1-10.4,12.6c-1.6,2.4-3.2,5-4.5,7.6c-1.2,2.2-2.3,4.5-3.3,6.9
	c-0.8,1.8-1.5,3.6-2.1,5.5c-1.2,3.4-2.1,6.9-2.8,10.4c0,0.2-0.1,0.4-0.1,0.5C116,86.8,115.5,90.3,115.2,93.8z M105.2,105.1
	c-0.1-1.7-0.1-3.4-0.1-5.2c0,0,0,0,0,0c0,0,0,0,0,0c0-1.7,0-3.4,0.1-5.1c-1.7,0.1-3.4,0.1-5.2,0.1v0c-1.7,0-3.4,0-5.1-0.1
	c0.1,1.7,0.1,3.4,0.1,5.2c0,1.7,0,3.4-0.1,5.1c1.7-0.1,3.4-0.1,5.2-0.1C101.7,105,103.5,105.1,105.2,105.1z M100,165
	c-19.3,0-35,15.7-35,35h10c0-6.7,2.6-13,7.3-17.7c4.7-4.7,11-7.3,17.7-7.3s13,2.6,17.7,7.3c4.7,4.7,7.3,11,7.3,17.7h10
	C135,180.7,119.4,165,100,165z M100,185c-8.3,0-15,6.7-15,15h10c0-2.8,2.2-5,5-5c2.8,0,5,2.2,5,5h10C115,191.7,108.3,185,100,185z"/><path stroke="none" fill="currentColor" d="M2152.7,771.2v-47.4c-31.6,0-61.4-12.3-83.7-34.7c-22.4-22.4-34.7-52.1-34.7-83.7h-47.4
		C1986.9,697,2061.2,771.2,2152.7,771.2z"/><path stroke="none" fill="currentColor" d="M2152.7,676.5v-47.4c-13.1,0-23.7-10.6-23.7-23.7h-47.4C2081.7,644.7,2113.5,676.5,2152.7,676.5z"/><path stroke="none" fill="currentColor" d="M2069.8,801.9c-25.4-10.7-48.2-26.1-67.8-45.7c-19.6-19.6-35-42.4-45.7-67.8c-11.1-26.2-16.7-54.2-16.7-83h-47.4
		c0,30,5.1,58.7,14.4,85.5c26.1,75.1,85.6,134.6,160.8,160.7c26.7,9.3,55.5,14.3,85.4,14.3v-47.4
		C2123.9,818.6,2096,813,2069.8,801.9z"/><path stroke="none" fill="currentColor" d="M1679.1,913.5v47.4c31.6,0,61.4,12.3,83.7,34.7c22.4,22.4,34.7,52.1,34.7,83.7h47.4
		C1844.9,987.8,1770.7,913.5,1679.1,913.5z"/><path stroke="none" fill="currentColor" d="M1679.1,1008.3v47.4c13.1,0,23.7,10.6,23.7,23.7h47.4C1750.2,1040.1,1718.4,1008.3,1679.1,1008.3z"/><path stroke="none" fill="currentColor" d="M2034.4,889.8c-0.5-0.2-1-0.4-1.5-0.6c-18.2-7.7-35.8-17.3-52.3-28.4c-16.3-11-31.6-23.7-45.6-37.6
		c-13.9-13.9-26.6-29.3-37.6-45.6c-11.1-16.5-20.7-34-28.4-52.3c-0.2-0.5-0.4-0.9-0.6-1.4c-8.2-19.7-14.3-40.1-18.3-60.9
		c-3.6-18.8-5.3-38-5.3-57.5h-47.4c0,13.6,0.8,27,2.3,40.2c2,18,5.4,35.6,10,52.7c5.7,20.9,13.2,41.1,22.3,60.2
		c35,73.2,94.4,132.6,167.7,167.6c19.2,9.2,39.3,16.7,60.3,22.3c17.1,4.6,34.7,8,52.7,10c13.1,1.5,26.5,2.2,40,2.2v-47.4
		c-19.4,0-38.6-1.8-57.4-5.3C2074.5,904.1,2054.2,898,2034.4,889.8z"/><path stroke="none" fill="currentColor" d="M2074,1000.4c-0.8-0.1-1.7-0.3-2.5-0.5c-16.7-3.4-33.2-7.9-49.4-13.5c-8.8-3-17.5-6.3-26.1-10c-11.1-4.7-22-9.9-32.6-15.6
		c-12.3-6.5-24.2-13.7-35.8-21.5c-21.3-14.4-41.4-31-59.6-49.2c-18.2-18.2-34.8-38.3-49.2-59.6c-7.8-11.5-14.9-23.4-21.4-35.6
		c-5.7-10.7-11-21.7-15.7-32.8c-3.6-8.5-6.9-17.1-9.9-25.9c-5.6-16.2-10.1-32.8-13.5-49.6c-0.1-0.8-0.3-1.5-0.4-2.2
		c-3.2-16.2-5.4-32.7-6.6-49.3c-0.7-9.9-1.1-19.7-1.1-29.6h-47.4c0,8.2,0.2,16.4,0.7,24.5c-8-0.4-16.1-0.6-24.3-0.6v47.4
		c9.8,0,19.6,0.4,29.4,1.1c2.7,16.5,6.2,32.7,10.6,48.5c-13.1-1.5-26.5-2.2-40-2.2v47.4c19.4,0,38.6,1.8,57.4,5.3
		c8,19.5,17.4,38.3,28,56.4c0,0,0,0,0,0c-26.8-9.3-55.5-14.3-85.4-14.3v47.4c28.8,0,56.7,5.6,83,16.7c25.4,10.7,48.2,26.1,67.8,45.7
		c19.6,19.6,35,42.4,45.7,67.8c11.1,26.2,16.7,54.2,16.7,83h47.4c0-30-5.1-58.7-14.4-85.5c0,0,0,0,0,0c18,10.6,36.9,20,56.4,28
		c3.6,18.8,5.3,38,5.3,57.5h47.4c0-13.6-0.8-27-2.3-40.2c15.8,4.4,32,8,48.5,10.6c0.7,9.8,1.1,19.7,1.1,29.6h47.4
		c0-8.2-0.2-16.4-0.7-24.5c8,0.4,16.1,0.7,24.3,0.7v-47.4c-9.8,0-19.6-0.4-29.4-1.1C2106.7,1005.8,2090.2,1003.6,2074,1000.4z"/><path stroke="none" fill="currentColor" d="M2460.8,1079.2h47.4c0-31.6,12.3-61.4,34.7-83.7c22.4-22.4,52.1-34.7,83.7-34.7v-47.4
		C2535,913.4,2460.8,987.6,2460.8,1079.2z"/><path stroke="none" fill="currentColor" d="M2555.6,1079.2h47.4c0-13.1,10.6-23.7,23.7-23.7v-47.4C2587.4,1008.1,2555.6,1039.9,2555.6,1079.2z"/><path stroke="none" fill="currentColor" d="M2430.2,996.2c10.7-25.4,26.1-48.2,45.7-67.8c19.6-19.6,42.4-35,67.8-45.7c26.2-11.1,54.2-16.7,83-16.7v-47.4
		c-30,0-58.7,5.1-85.5,14.4c-75.1,26.1-134.6,85.6-160.7,160.8c-9.3,26.7-14.3,55.5-14.3,85.4h47.4
		C2413.4,1050.4,2419.1,1022.5,2430.2,996.2z"/><path stroke="none" fill="currentColor" d="M2318.5,605.6h-47.4c0,31.6-12.3,61.4-34.7,83.7c-22.4,22.4-52.1,34.7-83.7,34.7v47.4
		C2244.3,771.4,2318.5,697.1,2318.5,605.6z"/><path stroke="none" fill="currentColor" d="M2223.8,605.6h-47.4c0,13.1-10.6,23.7-23.7,23.7v47.4C2192,676.6,2223.8,644.8,2223.8,605.6z"/><path stroke="none" fill="currentColor" d="M2342.2,960.9c0.2-0.5,0.4-1,0.6-1.5c7.7-18.2,17.3-35.8,28.4-52.3c11-16.3,23.7-31.6,37.6-45.6
		c13.9-13.9,29.3-26.6,45.6-37.6c16.5-11.1,34-20.7,52.3-28.4c0.5-0.2,0.9-0.4,1.4-0.6c19.7-8.2,40.1-14.3,60.9-18.3
		c18.8-3.6,38-5.3,57.5-5.3v-47.4c-13.6,0-27,0.8-40.2,2.3c-18,2-35.6,5.4-52.7,10c-20.9,5.7-41.1,13.2-60.2,22.3
		c-73.2,35-132.6,94.4-167.6,167.7c-9.2,19.2-16.7,39.3-22.3,60.3c-4.6,17.1-8,34.7-10,52.7c-1.5,13.1-2.2,26.5-2.2,40h47.4
		c0-19.4,1.8-38.6,5.3-57.4C2327.9,1001,2334,980.6,2342.2,960.9z"/><path stroke="none" fill="currentColor" d="M2231.7,1000.5c0.1-0.8,0.3-1.7,0.5-2.5c3.4-16.7,7.9-33.2,13.5-49.4c3-8.8,6.3-17.5,10-26.1c4.7-11.1,9.9-22,15.6-32.6
		c6.5-12.3,13.7-24.2,21.5-35.8c14.4-21.3,31-41.4,49.2-59.6c18.2-18.2,38.3-34.8,59.6-49.2c11.5-7.8,23.4-14.9,35.6-21.4
		c10.7-5.7,21.7-11,32.8-15.7c8.5-3.6,17.1-6.9,25.9-9.9c16.2-5.6,32.9-10.1,49.6-13.5c0.8-0.1,1.5-0.3,2.2-0.4
		c16.2-3.2,32.7-5.4,49.3-6.6c9.9-0.7,19.7-1.1,29.6-1.1v-47.4c-8.2,0-16.4,0.2-24.5,0.7c0.4-8,0.6-16.1,0.6-24.3h-47.4
		c0,9.8-0.4,19.6-1.1,29.4c-16.5,2.7-32.7,6.2-48.5,10.6c1.5-13.1,2.2-26.5,2.2-40h-47.4c0,19.4-1.8,38.6-5.3,57.4
		c-19.5,8-38.3,17.4-56.4,28c0,0,0,0,0,0c9.3-26.8,14.3-55.5,14.3-85.4h-47.4c0,28.8-5.6,56.7-16.7,83
		c-10.7,25.4-26.1,48.2-45.7,67.8c-19.6,19.6-42.4,35-67.8,45.7c-26.2,11.1-54.2,16.7-83,16.7v47.4c30,0,58.7-5.1,85.5-14.4
		c0,0,0,0,0,0c-10.6,18-19.9,36.9-28,56.4c-18.8,3.6-38,5.3-57.5,5.3v47.4c13.6,0,27-0.8,40.2-2.3c-4.4,15.8-8,32.1-10.6,48.6
		c-9.9,0.7-19.7,1.1-29.6,1.1v47.4c8.2,0,16.4-0.2,24.5-0.7c-0.4,8-0.6,16.1-0.6,24.3h47.4c0-9.8,0.4-19.6,1.1-29.4
		C2226.2,1033.2,2228.4,1016.7,2231.7,1000.5z"/><path stroke="none" fill="currentColor" d="M2152.7,1245v-47.4c-31.6,0-61.4-12.3-83.7-34.7c-22.4-22.4-34.7-52.1-34.7-83.7h-47.4
		C1986.9,1170.7,2061.2,1245,2152.7,1245z"/><path stroke="none" fill="currentColor" d="M2152.7,1150.2v-47.4c-13.1,0-23.7-10.6-23.7-23.7h-47.4C2081.7,1118.4,2113.5,1150.2,2152.7,1150.2z"/><path stroke="none" fill="currentColor" d="M2069.8,1275.6c-25.4-10.7-48.2-26.1-67.8-45.7c-19.6-19.6-35-42.4-45.7-67.8c-11.1-26.2-16.7-54.2-16.7-83h-47.4
		c0,30,5.1,58.7,14.4,85.5c26.1,75.1,85.6,134.6,160.8,160.7c26.7,9.3,55.5,14.3,85.4,14.3v-47.4
		C2123.9,1292.3,2096,1286.7,2069.8,1275.6z"/><path stroke="none" fill="currentColor" d="M1679.1,1387.3v47.4c31.6,0,61.4,12.3,83.7,34.7c22.4,22.4,34.7,52.1,34.7,83.7h47.4
		C1844.9,1461.5,1770.7,1387.3,1679.1,1387.3z"/><path stroke="none" fill="currentColor" d="M1679.1,1482v47.4c13.1,0,23.7,10.6,23.7,23.7h47.4C1750.2,1513.8,1718.4,1482,1679.1,1482z"/><path stroke="none" fill="currentColor" d="M2034.4,1363.5c-0.5-0.2-1-0.4-1.5-0.6c-18.2-7.7-35.8-17.3-52.3-28.4c-16.3-11-31.6-23.7-45.6-37.6
		c-13.9-13.9-26.6-29.3-37.6-45.6c-11.1-16.5-20.7-34-28.4-52.3c-0.2-0.5-0.4-0.9-0.6-1.4c-8.2-19.7-14.3-40.1-18.3-60.9
		c-3.6-18.8-5.3-38-5.3-57.5h-47.4c0,13.6,0.8,27,2.3,40.2c2,18,5.4,35.6,10,52.7c5.7,20.9,13.2,41.1,22.3,60.2
		c35,73.2,94.4,132.6,167.7,167.6c19.2,9.2,39.3,16.7,60.3,22.3c17.1,4.6,34.7,8,52.7,10c13.1,1.5,26.5,2.2,40,2.2v-47.4
		c-19.4,0-38.6-1.8-57.4-5.3C2074.5,1377.8,2054.2,1371.8,2034.4,1363.5z"/><path stroke="none" fill="currentColor" d="M2074,1474.1c-0.8-0.1-1.7-0.3-2.5-0.5c-16.7-3.4-33.2-7.9-49.4-13.5c-8.8-3-17.5-6.3-26.1-10c-11.1-4.7-22-9.9-32.6-15.6
		c-12.3-6.5-24.2-13.7-35.8-21.5c-21.3-14.4-41.4-31-59.6-49.2c-18.2-18.2-34.8-38.3-49.2-59.6c-7.8-11.5-14.9-23.4-21.4-35.6
		c-5.7-10.7-11-21.7-15.7-32.8c-3.6-8.5-6.9-17.1-9.9-25.9c-5.6-16.2-10.1-32.8-13.5-49.6c-0.1-0.8-0.3-1.5-0.4-2.2
		c-3.2-16.2-5.4-32.7-6.6-49.3c-0.7-9.9-1.1-19.7-1.1-29.6h-47.4c0,8.2,0.2,16.4,0.7,24.5c-8-0.4-16.1-0.6-24.3-0.6v47.4
		c9.8,0,19.6,0.4,29.4,1.1c2.7,16.5,6.2,32.7,10.6,48.5c-13.1-1.5-26.5-2.2-40-2.2v47.4c19.4,0,38.6,1.8,57.4,5.3
		c8,19.5,17.4,38.3,28,56.4c0,0,0,0,0,0c-26.8-9.3-55.5-14.3-85.4-14.3v47.4c28.8,0,56.7,5.6,83,16.7c25.4,10.7,48.2,26.1,67.8,45.7
		c19.6,19.6,35,42.4,45.7,67.8c11.1,26.2,16.7,54.2,16.7,83h47.4c0-30-5.1-58.7-14.4-85.5c0,0,0,0,0,0c18,10.6,36.9,20,56.4,28
		c3.6,18.8,5.3,38,5.3,57.5h47.4c0-13.6-0.8-27-2.3-40.2c15.8,4.4,32,8,48.5,10.6c0.7,9.8,1.1,19.7,1.1,29.6h47.4
		c0-8.2-0.2-16.4-0.7-24.5c8,0.4,16.1,0.7,24.3,0.7v-47.4c-9.8,0-19.6-0.4-29.4-1.1C2106.7,1479.6,2090.2,1477.3,2074,1474.1z"/><path stroke="none" fill="currentColor" d="M2460.8,1552.9h47.4c0-31.6,12.3-61.4,34.7-83.7c22.4-22.4,52.1-34.7,83.7-34.7v-47.4
		C2535,1387.1,2460.8,1461.4,2460.8,1552.9z"/><path stroke="none" fill="currentColor" d="M2555.6,1552.9h47.4c0-13.1,10.6-23.7,23.7-23.7v-47.4C2587.4,1481.9,2555.6,1513.7,2555.6,1552.9z"/><path stroke="none" fill="currentColor" d="M2430.2,1470c10.7-25.4,26.1-48.2,45.7-67.8c19.6-19.6,42.4-35,67.8-45.7c26.2-11.1,54.2-16.7,83-16.7v-47.4
		c-30,0-58.7,5.1-85.5,14.4c-75.1,26.1-134.6,85.6-160.7,160.8c-9.3,26.7-14.3,55.5-14.3,85.4h47.4
		C2413.4,1524.1,2419.1,1496.2,2430.2,1470z"/><path stroke="none" fill="currentColor" d="M2318.5,1079.3h-47.4c0,31.6-12.3,61.4-34.7,83.7s-52.1,34.7-83.7,34.7v47.4C2244.3,1245.1,2318.5,1170.9,2318.5,1079.3z"/><path stroke="none" fill="currentColor" d="M2223.8,1079.3h-47.4c0,13.1-10.6,23.7-23.7,23.7v47.4C2192,1150.4,2223.8,1118.6,2223.8,1079.3z"/><path stroke="none" fill="currentColor" d="M2342.2,1434.6c0.2-0.5,0.4-1,0.6-1.5c7.7-18.2,17.3-35.8,28.4-52.3c11-16.3,23.7-31.6,37.6-45.6
		c13.9-13.9,29.3-26.6,45.6-37.6c16.5-11.1,34-20.7,52.3-28.4c0.5-0.2,0.9-0.4,1.4-0.6c19.7-8.2,40.1-14.3,60.9-18.3
		c18.8-3.6,38-5.3,57.5-5.3v-47.4c-13.6,0-27,0.8-40.2,2.3c-18,2-35.6,5.4-52.7,10c-20.9,5.7-41.1,13.2-60.2,22.3
		c-73.2,35-132.6,94.4-167.6,167.7c-9.2,19.2-16.7,39.3-22.3,60.3c-4.6,17.1-8,34.7-10,52.7c-1.5,13.1-2.2,26.5-2.2,40h47.4
		c0-19.4,1.8-38.6,5.3-57.4C2327.9,1474.7,2334,1454.4,2342.2,1434.6z"/><path stroke="none" fill="currentColor" d="M2231.7,1474.2c0.1-0.8,0.3-1.7,0.5-2.5c3.4-16.7,7.9-33.2,13.5-49.4c3-8.8,6.3-17.5,10-26.1c4.7-11.1,9.9-22,15.6-32.6
		c6.5-12.3,13.7-24.2,21.5-35.8c14.4-21.3,31-41.4,49.2-59.6c18.2-18.2,38.3-34.8,59.6-49.2c11.5-7.8,23.4-14.9,35.6-21.4
		c10.7-5.7,21.7-11,32.8-15.7c8.5-3.6,17.1-6.9,25.9-9.9c16.2-5.6,32.9-10.1,49.6-13.5c0.8-0.1,1.5-0.3,2.2-0.4
		c16.2-3.2,32.7-5.4,49.3-6.6c9.9-0.7,19.7-1.1,29.6-1.1v-47.4c-8.2,0-16.4,0.2-24.5,0.7c0.4-8,0.6-16.1,0.6-24.3h-47.4
		c0,9.8-0.4,19.6-1.1,29.4c-16.5,2.7-32.7,6.2-48.5,10.6c1.5-13.1,2.2-26.5,2.2-40h-47.4c0,19.4-1.8,38.6-5.3,57.4
		c-19.5,8-38.3,17.4-56.4,28c0,0,0,0,0,0c9.3-26.8,14.3-55.5,14.3-85.4h-47.4c0,28.8-5.6,56.7-16.7,83
		c-10.7,25.4-26.1,48.2-45.7,67.8c-19.6,19.6-42.4,35-67.8,45.7c-26.2,11.1-54.2,16.7-83,16.7v47.4c30,0,58.7-5.1,85.5-14.4
		c0,0,0,0,0,0c-10.6,18-19.9,36.9-28,56.4c-18.8,3.6-38,5.3-57.5,5.3v47.4c13.6,0,27-0.8,40.2-2.3c-4.4,15.8-8,32.1-10.6,48.6
		c-9.9,0.7-19.7,1.1-29.6,1.1v47.4c8.2,0,16.4-0.2,24.5-0.7c-0.4,8-0.6,16.1-0.6,24.3h47.4c0-9.8,0.4-19.6,1.1-29.4
		C2226.2,1506.9,2228.4,1490.4,2231.7,1474.2z"/></pattern></defs><rect width="100%" height="100%" fill="url(#dbc_svg_pattern_overlapping_circles)"/></svg>'
                ],
            ];

            foreach ($patterns as $pattern) {
                $id = Str::random(16);
                Pattern::create($pattern);
            }


        }
    }
