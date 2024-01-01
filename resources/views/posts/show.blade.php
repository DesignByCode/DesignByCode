<x-main-layout>
    <div class="wrapper my-24 relative z-10 min-h-[760px]">
        <div class="prose dark:prose-invert mx-auto prose-a:decoration-primary-500 prose-a:underline-offset-4 prose-a:decoration-2 hover:prose-a:text-primary-500">
            <h1 class="w-full mb-0">{{ $post->title }}</h1>
            <div class="inline-flex space-x-2 items-center h-12 pl-1 my-2 pr-2.5 rounded-full border border-gray-200 dark:border-gray-800">
                <img class="w-10 h-10 border-2 border-gray-100/50 rounded-full" width="40" height="40" src="{{ $post->user->image }}" alt="{{ $post->user->name }}">
                <span class="font-bold">{{$post->user->name}}</span>
            </div>
            <img class="w-full rounded-lg" src="{{ $post->hero }}" alt="{{ $post->title  }}">
            {!! $post->html !!}
        </div>
    </div>
</x-main-layout>

<x-sheets.script.autolink/>
