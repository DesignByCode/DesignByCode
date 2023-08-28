<a href="{{ route("packages.show", $package->slug) }}" {{ $attributes->merge(['class' => "@container/card bg-primary-100/90 group dark:bg-gray-900/80 backdrop-blur-lg border group border-gray-300 dark:border-gray-900 rounded-lg p-6 flex
space-y-4 flex-col"])
 }}>
    <div class="flex justify-between space-x-2 relative isolate">
        <div aria-hidden="true" class="absolute opacity-0 -inset-2 bg-primary-500/30 blur-sm rounded-md mask-image-b group-hover:opacity-100"></div>
        <div class="text-xl z-10 @xs:text-3xl font-bold ">
            {{ $package->title }}
        </div>
        <div class="h-10 z-10 @xs:h-14 w-10 @xs:w-14 shrink-0">
            <img width="50" height="50" class="h-10 @xs:h-14 w-10 @xs:w-14 shrink-0" src='{{ Vite::asset("resources/img/svg/{$package->type}.svg") }}' alt="{{ $package->type }}">
        </div>
    </div>
    <div class="line-clamp-3 text-gray-400">
        {{ $package->teaser }}
    </div>
</a>
