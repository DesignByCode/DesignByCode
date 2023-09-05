<x-main-layout>
    <x-pattern.grid @class(['h-[500px] mask-image-b'])>
        {!! $pattern->snippet !!}
    </x-pattern.grid>
    <div class="wrapper my-24 relative z-10">
        <h1 class="heading-1 ">
            {{ $pattern->name }} patterns
        </h1>
        <button type="button" is="headless-goback" class="inline-flex bg-primary-100 text-primary-500 hover:opacity-80 dark:bg-gray-900 items-center justify-start space-x-2 my-4 border border-primary-500 rounded-md px-3 py-2 font-bold">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3"/>
            </svg>
            <span>
            Go back
            </span>
        </button>

        {{--        <div class="max-w-md rounded bg-gray-900 aspect-video my-12">--}}
        {{--            <svg width="100%" height="100%">--}}
        {{--                <path stroke-width="3" stroke="currentColor" d="M10 100 C10 0 100 0 100 100"/>--}}
        {{--                <path stroke-width="3" stroke="currentColor" d="M150 100 c0 0 100 0 100 0 "/>--}}
        {{--                <circle fill="yellow" r="5" cy="10" cx="10"/>--}}
        {{--                <circle fill="yellow" r="5" cy="10" cx="100"/>--}}

        {{--            </svg>--}}
        {{--        </div>--}}


        <div class="grid grid-cols-6 my-6 gap-6 relative">
            <div class="col-span-6 md:col-span-4">
                <div class="edit_svg relative bg-white block dark:bg-gray-900 rounded-lg border-2 border-primary-500 aspect-video text-primary-500">
                    {!! Str::beautify($pattern->snippet) !!}
                </div>
                <div class="bg-gray-900 overflow-clip rounded-lg">
                    <div class="text-xs md:text-sm lg:text-base edit_svg">
                        <pre class="language-html"><code>{{ Str::beautify($pattern->snippet) }}</code></pre>
                    </div>
                </div>
            </div>
            <div class="col-span-6 md:col-span-2 relative">
                {{--                <div class="sticky top-[100px] space-y-2 bg-white min-h-[200px] block dark:bg-gray-900 p-6 rounded-lg border-2 border-primary-500 text-primary-500">--}}
                {{--                    <div>--}}
                {{--                        <label class="mb-2" for="pattern_color">Pattern color</label>--}}
                {{--                        <div class="flex space-x-2 border border-gray-800 rounded-md p-2">--}}
                {{--                            <input type="color" class="h-6 w-6 rounded p-1px" id="pattern_color">--}}
                {{--                            <span id="colorDisplay">Color Preview</span>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div>--}}
                {{--                        <label class="mb-2" for="pattern_size">Pattern size</label>--}}
                {{--                        <div class="flex space-x-2 border border-gray-800 rounded-md p-2 accent-primary-500">--}}
                {{--                            <input type="range" class="h-6 w-full rounded p-1px" id="pattern_size" min="0.2" max="3" step="0.1" value="1">--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>


</x-main-layout>


