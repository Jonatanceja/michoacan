<section class="grid grid-cols-3 gap-5 md:gap-10 max-w-6xl mx-auto relative -mt-16 md:-mt-32 z-30 px-5 pb-10" data-scroll-section>
    @foreach ($page->products()->toStructure() as $product)
        <a href="{{ $product->link()->toUrl() }}">
            <div class="">
                @if ($image = $product->picture()->toFile())
                    <x-ui.picture :image="$image" class="mx-auto max-h-36 md:max-h-96 transition transform hover:scale-110 duration-300"/>
                @endif
                <h2 class="text-center font-bold text-lg md:text-3xl uppercase tracking-wider">{{ $product->product() }}</h2>
            </div>
        </a>
    @endforeach
</section>