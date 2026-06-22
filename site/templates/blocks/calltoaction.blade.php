<x-sections.gradientbg class="min-h-screen" data-scroll-section>
    @if ($page->toggle()->bool())
        <div class="px-5 py-10">
            <div class="mx-auto max-w-6xl md:flex items-center space-y-5 md:space-x-10">
                <div class="w-full md:w-1/2">
                    @if ($image = $page->picture()->toFile())
                        <x-ui.picture :image="$image" class="w-full" data-scroll data-scroll-speed="1"/>
                    @endif
                </div>
                <div class="w-full md:w-1/2 space-y-5 text-left">
                    <h3 class="text-2xl md:text-6xl font-bold text-white drop-shadow-md">{{ $page->heading() }}</h3>
                    <div class="prose prose-li:marker:text-white mx-auto text-black font-semibold">@kt($page->text())</div>
                    @foreach ($page->button()->toStructure() as $button)
                        <x-buttons.tertiary class="my-2 md:my-0" :link="$button->link()->toUrl()" :text="$button->text()" />
                    @endforeach
                </div>
            </div>
        </div>
    @else
    <div class="px-5 py-10">
        <div class="mx-auto max-w-6xl md:flex items-center space-y-5">
            <div class="w-full md:w-1/2 space-y-5 text-left">
                <h3 class="text-2xl md:text-4xl font-bold text-white drop-shadow-md">{{ $page->heading() }}</h3>
                <div class="prose mx-auto text-white font-semibold">@kt($page->text())</div>
                @foreach ($page->button()->toStructure() as $button)
                    <x-buttons.tertiary class="my-2 md:my-0" :link="$button->link()->toUrl()" :text="$button->text()" />
                @endforeach
            </div>
            <div class="w-full md:w-1/2">
                @if ($image = $page->picture()->toFile())
                    <x-ui.picture :image="$image" class="w-full" data-scroll data-scroll-speed="1"/>
                @endif
            </div>
        </div>
    </div>
    @endif
</x-sections.gradientbg>