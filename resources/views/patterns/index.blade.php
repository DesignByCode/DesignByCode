<x-main-layout>
    <div class="w-full h-[500px] fixed top-0 inset-x-0 text-primary-500 z-0 mask-image-b opacity-30">
        <svg width="100%" height="100%">
            <defs>
                <pattern id="dbc_svg_pattern_scales_1" patternUnits="userSpaceOnUse" width="50" height="50" y="-42" x="-2">
                    <rect transform="skewX(28)" x="-22" y="-1" rx="10" width="50" height="50" stroke-width="1.5" stroke="currentColor" fill="none"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#dbc_svg_pattern_scales_1)"/>
        </svg>
    </div>
    <div class="wrapper my-24 relative z-10">
        <h1 class="heading-1 mb-12">
            SVG Patterns
        </h1>
        <div class="grid md:grid-cols-2 gap-x-6 gap-y-12">
            @foreach($patterns as $pattern)
                <div>
                    <div class="relative bg-white dark:bg-gray-900 rounded-lg border-2 border-primary-500 aspect-video text-primary-500">
                        <div class="card-label">{{ $pattern->name }}</div>
                        <div class="pattern-example w-full h-full">
                            {!! $pattern->snippet !!}
                        </div>
                    </div>
                    <div class="bg-gray-900 overflow-clip rounded-lg">
                        <div class="max-h-44 mask-image-b ">
                            <pre class="language-html"><code>{{ Str::beautify($pattern->snippet)}} </code></pre>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-main-layout>


{{--<div class="relative bg-white dark:bg-gray-900 rounded-lg border-2 border-primary-500 aspect-video text-primary-500">--}}
{{--    <div class="card-label">Rounded Squares</div>--}}
{{--    <patterns width="100%" height="100%">--}}
{{--        <defs>--}}
{{--            <pattern id="svg_pattern_bricks" patternUnits="userSpaceOnUse" width="220" height="110">--}}
{{--                <rect x="0" y="2.5" rx="4" width="100" height="50" fill="currentColor" stroke="none"/>--}}
{{--                <rect x="50" y="57.5" rx="4" width="100" height="50" fill="currentColor" stroke="none"/>--}}
{{--            </pattern>--}}
{{--        </defs>--}}
{{--        <rect x="0" y="0" width="100%" height="100%" fill="url(#svg_pattern_bricks)"/>--}}
{{--    </patterns>--}}
{{--</div>--}}
