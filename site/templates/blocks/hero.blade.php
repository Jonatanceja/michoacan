<x-sections.gradientbg class="min-h-screen" data-scroll-section>
<div class="grid max-w-screen-xl px-4 py-8 mx-auto gap-5 lg:py-16 lg:grid-cols-12 items-center relative z-20 pb-24 md:pb-0">
        <div class="mr-auto place-self-center lg:col-span-6">
            <x-headings.coverheading>{{ $page->heading() }}</x-headings.coverheading>
            <div class="max-w-2xl mb-6 text-white lg:mb-8 md:text-lg lg:text-xl font-semibold">@kt($page->text())</div>
            @if ($page->button()->isNotEmpty() || $page->button2()->isNotEmpty())
                    @foreach ($page->button()->toStructure() as $button)
                        <x-buttons.primary class="my-2 md:my-0" :link="$button->link()->toUrl()" :text="$button->text()" />
                    @endforeach
                    @foreach ($page->button2()->toStructure() as $button)
                        <x-buttons.secondary class="my-2 md:my-0" :link="$button->link()->toUrl()" :text="$button->text()" />
                    @endforeach
            @endif            
        </div>
        <div class="lg:mt-0 lg:col-span-6 flex">
            @if ($image = $page->picture()->toFile())
                <x-ui.picture :image="$image" class="w-full" data-scroll data-scroll-speed="2"/>
            @endif
        </div>                
    </div>
</x-sections.gradientbg>