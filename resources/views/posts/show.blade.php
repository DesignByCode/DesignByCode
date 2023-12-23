<x-main-layout>
    <div class="wrapper my-24 relative z-10 min-h-[760px]">
        <div class="max-w-2xl prose prose-invert">
            <h1>
                {{ $post->title }}
            </h1>
            <a href="#" class="inline-flex not-prose border dark:border-gray-800 dark:text-gray-400 p-1 rounded-full items-center my-4 space-x-2 text-sm ">
                <img src="https://mighty.tools/mockmind-api/content/cartoon/31.jpg" width="30" height="30" class="rounded-full inline-block" alt="">
                <span class="pr-2">
                    {{ $post->user->name }}
                </span>
            </a>
            <div>
                {{ $post->body }}
            </div>

        </div>
    </div>
</x-main-layout>
