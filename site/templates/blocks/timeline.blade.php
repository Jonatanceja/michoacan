<section class="mx-auto max-w-6xl px-5 py-10 space-y-10">
    <div class="space-y-3">
        <x-headings.h5 class="text-darkPeach text-center">{{ $page->title() }}</x-headings.h5>
        <h6 class="text-center text-zinc-800 text-2xl">{{ $site->title() }}</h6>
    </div>
    <div class="swiper mySwiper relative">
        <div class="h-2 bg-darkPeach absolute right-0 left-0 top-2 z-0 w-full"></div>
        <div class="swiper-wrapper relative z-30 pb-16">
            @foreach ($page->timeline()->toStructure() as $item)
            <div class="swiper-slide space-y-3">
                <div class="bg-white border-4 border-darkPeach w-6 h-6 rounded-full mx-auto relative z-20"></div>
                <h4 class="text-center text-xl">{{ $item->date()}}</h4>
                <x-text.base class="text-base text-center">{{ $item->text() }}</x-text.base>
            </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>
</section>