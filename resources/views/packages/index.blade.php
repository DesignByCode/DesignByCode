<x-main-layout>

    <div class="wrapper py-24">
        <h1 class="heading-1 my-6">Packages</h1>
        <div class="grid grid-col-1 md:grid-cols-3 space-y-6 md:space-y-0 md:gap-x-6">
            <div class="space-y-6">
                @foreach($packages as $package)
                    @if($loop->index % 3 === 0)
                        <x-package-card :$package/>
                    @endif
                @endforeach
            </div>
            <div class="space-y-6">
                @foreach($packages as $package)
                    @if(($loop->index - 1) % 3 === 0)
                        <x-package-card :$package/>
                    @endif
                @endforeach
            </div>
            <div class="space-y-6">
                @foreach($packages as $package)
                    @if(($loop->index - 2) % 3 === 0)
                        <x-package-card :$package/>
                    @endif
                @endforeach
            </div>
        </div>


    </div>


</x-main-layout>
