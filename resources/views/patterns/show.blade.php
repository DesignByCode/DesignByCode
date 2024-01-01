<x-main-layout>
    <x-pattern.grid @class(['h-[500px] mask-image-b'])>
        {!! $pattern->snippet !!}
    </x-pattern.grid>
    <div class="wrapper my-24 relative z-10">
        <h1 class="heading-1 ">
            {{ $pattern->name }} patterns
        </h1>
        <div class="w-full">
            <button type="button" is="headless-goback" class="inline-flex bg-primary-100 text-primary-500 hover:opacity-80 dark:bg-gray-900 items-center justify-start space-x-2 my-4 border border-primary-500 rounded-md px-3 py-2 font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3"/>
                </svg>
                <span>
            Go back
            </span>
            </button>

        </div>

        <div class="grid grid-cols-6 my-6 gap-6 relative">
            <div class="col-span-6 md:col-span-4">
                <div class="edit_svg relative bg-white block dark:bg-gray-900 rounded-lg border-2 border-primary-500 aspect-video text-primary-500">
                    {!! Str::beautify($pattern->snippet) !!}
                </div>
                <div class="bg-gray-900 overflow-clip rounded-lg">
                    <div class="text-xs md:text-sm lg:text-base edit_svg">
                        <pre class="language-html"><code>{{ Str::beautify($pattern->snippet) }}</code></pre>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <button class="button relative" onclick="downloadSVG()">Download SVG</button>
                    <button class="button relative" onclick="downloadPNG()">Download PNG</button>
                </div>
            </div>
            <div class="col-span-6 md:col-span-2 relative">
                <div class="sticky top-32 space-y-6">
                    <script type="text/javascript" src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js" data-name="bmc-button" data-slug="claudeu" data-color="#FFDD00" data-emoji="" data-font="Cookie" data-text="Buy me a coffee"
                            data-outline-color="#000000" data-font-color="#000000" data-coffee-color="#ffffff"></script>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>


<script>
    function downloadFile(blob, fileName) {
        const link = document.createElement('a');
        link.href = window.URL.createObjectURL(blob);
        link.download = fileName;
        link.click();
        console.log(link)
    }

    function downloadPNG() {
        const svg = document.querySelector('[id^="dbc-svg-"]');
        const svgData = new XMLSerializer().serializeToString(svg);

        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');
        const img = new Image();

        img.onload = function () {
            // canvas.width = svg.getAttribute('width');
            // canvas.height = svg.getAttribute('height');
            canvas.width = Number(svg.querySelector('pattern').getAttribute('width'));
            canvas.height = Number(svg.querySelector('pattern').getAttribute('height'));
            ctx.drawImage(img, 0, 0);
            canvas.toBlob(function (blob) {
                downloadFile(blob, 'pattern.png');
            });
        };
        img.src = 'data:image/svg+xml;base64,' + btoa(svgData);
    }

    function downloadSVG() {
        const svg = document.querySelector('[id^="dbc-svg-"]');
        const svgData = new XMLSerializer().serializeToString(svg);
        const blob = new Blob([svgData], {type: 'image/svg+xml'});
        console.log(svg)
        downloadFile(blob, 'pattern.svg');
    }

</script>

