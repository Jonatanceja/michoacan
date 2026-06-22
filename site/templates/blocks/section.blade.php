<section  data-scroll-section>
        @if ($page->toggle()->bool())
            <div class="px-5 py-10">
                <div class="mx-auto max-w-6xl md:flex items-center space-y-5 md:space-x-10">
                    <div class="w-full md:w-1/2">
                        @if ($image = $page->picture()->toFile())
                            <x-ui.picture :image="$image" class="w-full" data-scroll data-scroll-speed="1"/>
                        @endif
                    </div>
                    <div class="w-full md:w-1/2 space-y-5 text-left">
                        <x-headings.h2 class="text-darkPeach">{{ $page->heading() }}</x-headings.h2>
                        <x-text.base>@kt($page->text())</x-text.base>
                        @foreach ($page->button()->toStructure() as $button)
                            <x-buttons.tertiary class="my-2 md:my-0" :link="$button->link()->toUrl()" :text="$button->text()" />
                        @endforeach
                    </div>
                </div>
            </div>
        @else
        <div class="px-5 py-10">
            <div class="mx-auto max-w-6xl md:flex items-center space-y-5 md:space-x-10">
                <div class="w-full md:w-1/2 block md:hidden">
                    @if ($image = $page->picture()->toFile())
                        <x-ui.picture :image="$image" class="w-full" data-scroll data-scroll-speed="1"/>
                    @endif
                </div>
                <div class="w-full md:w-1/2 space-y-5 text-left">
                    <x-headings.h2 class="text-darkPeach">{{ $page->heading() }}</x-headings.h2>
                    <x-text.base>@kt($page->text())</x-text.base>
                    @foreach ($page->button()->toStructure() as $button)
                        <x-buttons.tertiary class="my-2 md:my-0" :link="$button->link()->toUrl()" :text="$button->text()" />
                    @endforeach
                </div>
                <div class="w-full md:w-1/2 hidden md:block">
                    @if ($image = $page->picture()->toFile())
                        <x-ui.picture :image="$image" class="w-full" data-scroll data-scroll-speed="1"/>
                    @endif
                </div>
            </div>
        </div>
        @endif
</section>