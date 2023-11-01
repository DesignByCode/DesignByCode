<x-main-layout>
    <div class="wrapper py-24">
        <h1 class="heading-1 my-6">Packages</h1>
        <div class="my-6 flex items-center justify-center ">
            <a href="https://partners.hostgator.com/c/2743089/215653/3094" target="_top" id="215653"><img class="rounded-lg min-w-full" src="//a.impactradius-go.com/display-ad/3094-215653" border="0" alt="" width="971" height="91"/></a><img
                height="0"
                width="0"
                src="https://partners.hostgator.com/i/2743089/215653/3094"
                style="position:absolute;visibility:hidden;"
                border="0"/>
        </div>
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
