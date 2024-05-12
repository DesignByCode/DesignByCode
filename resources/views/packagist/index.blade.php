<x-main-layout>
    <div class="wrapper py-24">

        <h1 class="heading-1">PHP Packages</h1>
        <div class="my-6 flex items-center justify-center ">
            {{--            <x-ads.shopify />--}}
        </div>
        <div class="grid grid-col-1 md:grid-cols-3 space-y-6 md:space-y-0 md:gap-x-6">
            <div class="space-y-6">
                @foreach($packagist as $gist)
                    @if($loop->index % 3 === 0)
                        <x-packagist-card :packagist="$gist" />
                    @endif
                @endforeach
            </div>
            <div class="space-y-6">
                @foreach($packagist as $gist)
                    @if(($loop->index - 1) % 3 === 0)
                        <x-packagist-card :packagist="$gist" />
                    @endif
                @endforeach

            </div>
            <div class="space-y-6">
                @foreach($packagist as $gist)
                    @if(($loop->index - 2) % 3 === 0)
                        <x-packagist-card :packagist="$gist" />
                    @endif
                @endforeach
                <x-ads.shopify />
            </div>
        </div>
    </div>
</x-main-layout>
