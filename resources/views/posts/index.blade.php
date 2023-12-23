<x-main-layout>


    <div class="wrapper my-24 relative z-10">
        <h1 class="heading-1 ">
            Blog posts
        </h1>
        @if ($posts->count())
            <div class="grid grid-col-1 md:grid-cols-3 md:space-y-0 md:gap-x-6">
                <div class="md:col-span-2 ">
                    <div class="space-y-8 my-8 lg:ml-[210px] relative">
                        <div class="w-px absolute inset-y-0 bg-gray-200 dark:bg-gray-900 lg:-left-8 lg:block hidden" aria-hidden="true"></div>
                        @foreach($posts as $post)
                            <div class="py-4 md:my-6 lg:my-8 rounded">
                                <div class="group space-y-2 relative isolate">
                                    <svg aria-hidden="true" viewBox="0 0 9 9" class="w-4 h-4 absolute lg:block hidden lg:-left-[39px] top-2 text-gray-200 dark:text-gray-800 fill-white dark:fill-gray-950 group-hover:text-primary-500">
                                        <circle r="3.5" cx="4.5" cy="4.5" stroke="currentColor" stroke-width="1"/>
                                    </svg>
                                    <h3 class="text-2xl font-semibold capitalize tracking-tight pointer-events-none">{{ $post->title }}</h3>

                                    <div class="lg:absolute lg:-left-[190px] text-sm lg:top-0 text-gray-400 italic">{{ $post->created_at->format('F j\\, Y') }}</div>
                                    <div class="text-gray-400 pointer-events-none ">
                                        {{ $post->excerpt }}
                                    </div>
                                    <a href="{{ route('posts.show', $post) }}" class="text-primary-500 z-10 flex items-center  group-hover:underline">Read more
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 ml-0.5">
                                            <path fill-rule="evenodd" d="M6.22 4.22a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.75.75 0 0 1-1.06-1.06L8.94 8 6.22 5.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/>
                                        </svg>
                                        <span class="absolute -inset-y-4 -left-4 -right-2 -z-10 rounded group-hover:bg-gray-100 dark:group-hover:bg-gray-900"></span></a>
                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="md:col-span-1 relative">
                    <div class="sticky top-32 space-y-6">
                        <x-ads.shopify/>
                    </div>
                </div>
            </div>
            {{$posts->links()}}
        @else
            <p class="text-lg my-6">There is no posts at this time.</p>
        @endif
    </div>


</x-main-layout>
