<x-main-layout>


    <div class="wrapper py-36 grid grid-cols-6 gap-6">
        <div class="prose dark:prose-invert col-span-6 md:col-span-4 max-w-full">
            <h1>{{$package->title}}</h1>
            {{ $package->contents }}
        </div>
        <aside class="col-span-6 md:col-span-2 relative">
            <x-link.github/>
        </aside>
    </div>



</x-main-layout>
