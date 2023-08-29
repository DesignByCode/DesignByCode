<?php

    namespace Database\Seeders;

    use App\Models\Pattern;
    use Illuminate\Database\Seeder;

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
                    "name" => "Bricks",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="svg_pattern_bricks" patternUnits="userSpaceOnUse" width="100" height="100"><rect x="0" y="0.5" width="100" height="50" stroke-width="1.5" fill="none" stroke="currentColor"/><rect x="-50" y="50.5" width="100" height="50" stroke-width="1.5" fill="none" stroke="currentColor"/></pattern></defs><rect x="0" y="0" width="100%" height="100%" fill="url(#svg_pattern_bricks)"/></svg>'
                ],
                [
                    "name" => "Bricks 2",
                    "snippet" => '<svg width="100%" height="100%"><defs><pattern id="svg_pattern_bricks__002" patternUnits="userSpaceOnUse" width="100" height="100"><rect x="0" y="2.5" width="100" height="50" stroke-width="5" fill="none" stroke="currentColor"/><rect x="-50" y="52.5" width="100" height="50" stroke-width="5" fill="none" stroke="currentColor"/></pattern></defs><rect x="0" y="0" width="100%" height="100%" fill="url(#svg_pattern_bricks__002)"/></svg>'
                ],
            ];

            foreach ($patterns as $pattern) {
                Pattern::create($pattern);
            }


        }
    }
