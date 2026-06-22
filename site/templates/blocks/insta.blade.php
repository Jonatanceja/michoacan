<section class="py-10 bg-darkPeach px-5 space-y-10">
    <h5 class="text-center font-bold text-2xl md:text-4xl text-white">{{ $page->heading() }}</h5>
    <div class="mx-auto max-w-6xl grid grid-cols-2 md:grid-cols-3 gap-0">
        @foreach ($page->feed()->toStructure() as $item)
            <div>
                {!! $item->picture() !!}
            </div>
        @endforeach
    </div>
    <div class="flex justify-center">
        @foreach ($page->button()->toStructure() as $button)
            <x-buttons.primary class="my-2 md:my-0" :link="$button->link()->toUrl()" :text="$button->text()" target="_blank"/>
        @endforeach
    </div>
</section>