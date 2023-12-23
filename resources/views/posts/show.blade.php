<x-main-layout>
    <div class="wrapper my-24 relative z-10 min-h-[760px]">
        <div class="prose prose-invert mx-auto">
            <h1>{{ $post->title }}</h1>
            {{ $post->contents }}
        </div>
    </div>
</x-main-layout>

<x-sheets.script.autolink/>
