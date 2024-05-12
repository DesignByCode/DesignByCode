<x-main-layout>
    <div class="wrapper py-36 grid grid-cols-6 gap-6">
        <div class="prose dark:prose-invert col-span-6 md:col-span-4 max-w-full">
            <h1>{{$packagist->title}}</h1>
            {{ $packagist->contents }}
        </div>
        <aside class="col-span-6 md:col-span-2 relative">
            <div class="sticky top-32 space-y-6">
                @if($packagist->github)
                    <x-link.github :url="$packagist->github" />
                @else
                    <x-link.github />
                @endif
                <x-ads.shopify />
            </div>
        </aside>
    </div>

    <div id="topParent"></div>
    <div id="bottomParent"></div>
</x-main-layout>

<x-sheets.script.autolink />
