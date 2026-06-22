<section class="py-10 max-w-6xl mx-auto px-5 space-y-10">
    <x-headings.h5 class="text-center text-darkPeach">{{ $page->title() }}</x-headings.h5>
    <div class="swiper revSwiper">
        <div class="swiper-wrapper">
            @foreach ($page->reviews()->toStructure() as $item)
            <div class="swiper-slide text-center space-y-5">
                @if ($image = $item->picture()->toFile())
                <picture>
                    <img class="mx-auto w-32 rounded-full" src="{{ $image->crop(300, 300)->url() }}" alt="{{ $image->alt() }}">
                </picture>
                @endif
                <div class="w-3/4 mx-auto">
                    <x-text.base class="px-5">@kt($item->review())</x-text.base>
                </div>
                <div class="text-xl font-bold">{{ $item->name() }}</div>
            </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
</section>