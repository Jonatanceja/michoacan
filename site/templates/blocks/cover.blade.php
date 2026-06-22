<x-sections.gradientbg class="" data-scroll-section>
    <div class="grid max-w-screen-xl px-5 py-8 mx-auto gap-5 lg:pt-20 lg:grid-cols-12 items-center relative z-20 pb-0">
            <div class="mr-auto place-self-center lg:col-span-6 space-y-5">
                <x-headings.coverheading>{{ $page->heading() }}</x-headings.coverheading>
                <div class="max-w-2xl mb-6 text-white lg:mb-8 md:text-lg lg:text-xl font-semibold">@kt($page->text())</div>         
            </div>
            <div class="lg:mt-0 lg:col-span-6 flex">
                @if ($image = $page->picture()->toFile())
                    <x-ui.picture :image="$image" class="mx-auto" data-scroll data-scroll-speed="2"/>
                @endif
            </div>                
        </div>
</x-sections.gradientbg>