<div aria-hidden="true" {{ $attributes->merge(['class' => 'w-full fixed top-0 inset-x-0 mask-image-b mask-image-end-80' ]) }}>
    <div class="w-1/2 h-1/4 bg-gradient-to-b from-primary-500 to-primary-500/40 rounded-b-full mx-auto blur-3xl">
        <div class="w-1/4 h-[70px] mix-blend-color-dodge bg-primary-800 "></div>
        <div class="w-1/2 h-[70px] mix-blend-color-dodge bg-sky-500/70 ml-auto"></div>
    </div>
    <svg class="absolute inset-0 w-full h-full opacity-50 text-primary-500/70">
        <defs>
            <pattern id="grid_pattern" patternUnits="userSpaceOnUse" width="50" height="50" y="-42" x="-2">
                <rect transform="skewX(28)" x="-22" y="-1" rx="10" width="50" height="50" stroke-width="1.5" stroke-linecap="round" stroke="currentColor" fill="none"/>
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#grid_pattern)"/>
    </svg>
</div>
