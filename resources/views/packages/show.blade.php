<x-main-layout>
    <div class="wrapper py-36 grid grid-cols-6 gap-6">
        <div class="prose dark:prose-invert col-span-6 md:col-span-4 max-w-full">
            <h1>{{$package->title}}</h1>
            {{ $package->contents }}
        </div>
        <aside class="col-span-6 md:col-span-2 relative">
            <div class="sticky top-32 space-y-6">
                @if($package->github)
                    <x-link.github :url="$package->github"/>
                @else
                    <x-link.github/>
                @endif
                <x-ads.shopify/>
            </div>
        </aside>
    </div>

    <div id="topParent"></div>
    <div id="bottomParent"></div>
</x-main-layout>

<script>
    // Get all the section IDs with content-
    const sectionIds = Array.from(document.querySelectorAll('[id^="content-"]')).map(section => section.id);

    // Function to update the URL hash based on the section in view
    function updateURLHash() {
        for (const sectionId of sectionIds) {
            const section = document.getElementById(sectionId);
            const rect = section.getBoundingClientRect();

            if (rect.top <= window.innerHeight / 4 && rect.bottom >= window.innerHeight / 4) {
                history.replaceState(null, null, `#${sectionId}`);
                break;
            }
        }
    }

    // Attach event listener to scroll
    window.addEventListener('scroll', updateURLHash);
    updateURLHash(); // Update URL hash on initial load
</script>
