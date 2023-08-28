<a href="{{ route("packages.show", $package->slug) }}" {{ $attributes->merge(['class' => "bg-primary-100/90 dark:bg-gray-900/80 backdrop-blur-lg border group border-gray-300 dark:border-gray-900 rounded-lg p-6 flex space-y-4 flex-col"]) }}>
    <div class="text-2xl font-bold group-hover:underline">
        {{ $package->title }}
    </div>
    <div class="line-clamp-3 text-gray-400">
        {{ $package->teaser }}
    </div>
</a>
