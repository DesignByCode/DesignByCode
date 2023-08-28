<x-main-layout>
    <x-main.hero/>
    <div class="w-full card bg-primary-50 border-y border-primary-500 dark:bg-gray-900 my-12 py-24 relative isolate overflow-x-clip">
        <div class="wrapper grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h2 class="heading-1 mb-6">
                    Author of several <span class="text-primary-500">Javascript</span> and <span class="text-primary-500">PHP</span> open source packages.
                </h2>
            </div>
            <div class="grid sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-6">
                <img loading="lazy" class="tentacle-arm max-w-[500px] lg:max-w-full absolute -top-28 -right-24  z-10"  width="880" height="253" src="{{ Vite::asset('resources/img/tentacles/t6.webp') }}" alt="tentacle 6">
                @foreach($packages as $package)
                    <x-package-card :$package class="dark:border-primary-500"/>
                @endforeach
            </div>
        </div>
    </div>

    <div class="relative w-full h-24 bg-black">
        <img loading="lazy" class="tentacle-arm max-w-[500px] lg:max-w-full absolute -top-28 -right-24  z-10"  width="880" height="253" src="{{ Vite::asset('resources/img/tentacles/t6.webp') }}" alt="tentacle 6">
    </div>
    <div class="max-w-xl">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium atque consequatur doloremque illum iusto nostrum porro quia sed? Accusantium blanditiis consectetur corporis deleniti dicta dignissimos esse ex expedita id illum, maxime molestiae nam, nemo provident repellendus suscipit tempore. A asperiores cupiditate doloribus excepturi expedita in ipsam labore laborum maxime minus, modi quia quibusdam ratione reiciendis repellendus sequi voluptatibus. Culpa deleniti dolorem exercitationem maiores minima obcaecati, omnis totam. Amet animi asperiores commodi, corporis, deserunt eius eligendi fuga quia quis soluta veniam voluptates, voluptatibus! Ad adipisci atque, dolores ex fugiat ipsum iusto magni nam, natus officiis quaerat qui similique sit veniam, voluptates. Accusamus aliquam consectetur consequatur dignissimos dolorem neque nesciunt non odit sit veritatis? Eligendi et illum impedit iste natus nemo neque provident saepe totam unde? A alias amet asperiores eos, excepturi illum itaque perspiciatis possimus rem sequi, tempore voluptates. Ab adipisci alias asperiores at cumque debitis delectus dignissimos eaque et exercitationem id illo modi neque, nostrum perspiciatis porro praesentium quasi qui ratione rem saepe unde, ut vel velit veniam veritatis voluptatum. Aspernatur dolore laboriosam minima, natus reiciendis unde vero voluptas. Aspernatur ea ipsa itaque iusto maiores nostrum quae, rerum similique vel voluptates! A ad, culpa deleniti, dicta earum eius eligendi ipsa nisi perspiciatis quis vel veniam. Accusantium animi aperiam, assumenda cupiditate debitis delectus dignissimos doloremque dolores eligendi eos est eveniet ex hic illum impedit laborum maiores molestiae mollitia, necessitatibus nihil odio officiis optio porro quae quasi quibusdam reiciendis repellat sed sint sunt tenetur totam voluptate voluptates? Accusamus adipisci doloribus eligendi error ex ipsam ipsum magni mollitia neque nobis possimus, qui quo reiciendis repudiandae sed vitae voluptatum. A, accusamus accusantium alias amet aperiam architecto at autem blanditiis commodi consequatur dolore dolores dolorum eaque eius esse eum facilis illum incidunt iure labore, laborum libero magnam modi neque nostrum obcaecati officiis perspiciatis quas recusandae reiciendis repellendus similique sint sunt tempore veniam veritatis vitae? Ab alias at corporis culpa cum deserunt dignissimos, distinctio dolor doloremque dolores ducimus eius error et facere fugit illum in ipsum iure labore minus necessitatibus, nesciunt nobis numquam officiis optio praesentium quam quasi quidem quis quos ratione repellat, repudiandae sed tenetur vitae voluptas voluptatem? Cumque doloribus ea earum, laborum nobis quam reiciendis veritatis. Accusamus aliquid aperiam, atque deserunt ducimus hic illum inventore iusto, laboriosam laudantium libero mollitia pariatur possimus quaerat quia repudiandae saepe totam vitae. Adipisci amet, cumque dolorum eveniet expedita itaque laboriosam magnam nihil quasi sunt. Ad aperiam architecto doloremque est itaque nesciunt qui ullam. Ad, amet architecto asperiores corporis est, eum minima nesciunt nihil odit officia quia reiciendis vero! Eos id mollitia omnis quidem? Adipisci dolorem, eligendi? Beatae consequatur dolor esse fuga labore laborum nemo repellendus totam vitae voluptate. Ad alias atque, dolore dolorem eos inventore quidem reiciendis veniam! Alias animi cumque dolore enim eos eum, facilis illo illum in maiores molestiae necessitatibus neque nesciunt nobis officiis perspiciatis placeat porro reprehenderit saepe sapiente sit temporibus ullam unde vel, velit vitae voluptatibus. Animi beatae cumque deleniti deserunt doloremque eius eligendi hic laudantium, molestias nostrum numquam praesentium, quas quod repellat vel.
    </div>


</x-main-layout>
