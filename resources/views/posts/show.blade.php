<x-main-layout>
    <div class="wrapper my-24 relative z-10 min-h-[760px]">
        <div class="prose dark:prose-invert mx-auto prose-a:decoration-primary-500 prose-a:underline-offset-4 prose-a:decoration-2 hover:prose-a:text-primary-500">
            <h1>{{ $post->title }}</h1>
            {{ $post->contents }}
        </div>
    </div>
</x-main-layout>

<x-sheets.script.autolink/>
