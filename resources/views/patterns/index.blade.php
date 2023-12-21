<x-main-layout>

    <x-pattern.grid @class(['h-[500px] mask-image-b'])>
    </x-pattern.grid>

    <div class="wrapper my-24 relative z-10">
        <h1 class="heading-1 ">
            SVG Patterns
        </h1>
        <p class="text-lg font-semibold leading-loose mb-12">
            Here a {{ $patterns->total() }} you can use however you want. Watch out many more to follow.
        </p>

        <div class="relative my-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-8">

            @foreach($patterns as $pattern)
                <div>
                    <a href="{{ route('patterns.show', $pattern) }}" class="relative bg-white block dark:bg-gray-900 rounded-lg border-2 border-primary-500 aspect-video text-primary-500">
                        @if($pattern->premium)
                            <x-icon.premium class="absolute right-2 top-2 scale-125"/>
                        @endif
                        <div class="card-label">
                            {{ $pattern->name }}
                        </div>
                        <div class="pattern-example w-full h-full ">
                            <div class="overflow-hidden h-full">
                                {!! $pattern->snippet !!}
                            </div>
                        </div>
                    </a>
                    <div class="bg-primary-200 dark:bg-gray-900  overflow-clip rounded-lg">
                        <div class="max-h-44 mask-image-b text-xs md:text-sm lg:text-base">
                            <pre class="language-html"><code>{{ Str::beautify($pattern->snippet)}} </code></pre>
                        </div>
                    </div>
                </div>

                @if($loop->index %9 === 5)
                    <x-ads.shopify class="lg:col-span-3"/>
                @endif
            @endforeach
        </div>
        <div class="my-6">
            {{ $patterns->links() }}
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
