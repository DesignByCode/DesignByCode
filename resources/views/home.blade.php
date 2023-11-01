<x-main-layout>
    <x-pattern.grid @class(['h-[500px] mask-image-b'])>
        {!! $pattern->snippet !!}
    </x-pattern.grid>
    <x-main.hero/>

    <div class="w-full card bg-primary-50 border-y border-primary-500 dark:bg-gray-900 my-12 py-24 relative isolate overflow-x-clip">
        <div class="wrapper grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h2 class="heading-1 mb-6 card">
                    Author of several <span class="text-primary-500">Javascript</span> and <span class="text-primary-500">PHP</span> open source packages.
                </h2>
                <a class="cta"
                   href="{{ route("packages.index") }}">View
                    all packages</a>
            </div>
            <div class="grid card sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-6">
                <img loading="lazy" class="tentacle-arm max-w-[500px] lg:max-w-full absolute -top-28 -right-24  z-10" width="880" height="253" src="{{ Vite::asset('resources/img/tentacles/t6.webp') }}" alt="tentacle 6">
                @foreach($packages as $package)
                    <x-package-card :$package class="dark:border-primary-500"/>
                @endforeach
            </div>
        </div>
    </div>
</x-main-layout>
