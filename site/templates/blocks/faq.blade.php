<section class="py-10 px-5 max-w-6xl mx-auto space-y-5 md:space-y-10" data-scroll-section>
    <div class="flex space-x-3 justify-center items-center">
        <x-icons.star class="w-10 h-10 text-amber-400" />
        <x-icons.star class="w-10 h-10 text-amber-400" />
        <x-icons.star class="w-10 h-10 text-amber-400" />
        <x-icons.star class="w-10 h-10 text-amber-400" />
        <x-icons.star class="w-10 h-10 text-amber-400" />
    </div>
    <h4 class="text-center font-bold text-2xl md:text-4xl">{{ $page->heading() }}</h4>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
        @foreach ($page->blurbs()->toStructure() as $blurb)
            <x-ui.card blurb="{{ $blurb->blurb() }}" text="{{ $blurb->text() }}">
                @if ($icon = $blurb->icon()->toFile())
                    <img class="w-10" src="{{ $icon->url() }}" alt="{{ $icon->alt() }}">
                @endif
            </x-ui.card>
        @endforeach
    </div>
</section>
<section class="py-5 px-5 max-w-4xl mx-auto space-y-5">
    <h4 class="text-center font-bold text-2xl md:text-4xl">{{ $page->title() }}</h4>
    <x-ui.faq :faq="$page->faq()->toStructure()" />
</section>