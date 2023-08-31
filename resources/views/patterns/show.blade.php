<x-main-layout>
    <x-pattern.grid @class(['h-[500px] mask-image-b'])>
        {!! $pattern->snippet !!}
    </x-pattern.grid>
    <div class="wrapper my-24 relative z-10">
        <h1 class="heading-1 ">
            {{ $pattern->name }} patterns
        </h1>
       

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


