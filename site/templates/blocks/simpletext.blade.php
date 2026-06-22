<section class="py-10 px-5 max-w-4xl mx-auto space-y-5 text-zinc-800 text-center">
    <h4 class="font-bold text-2xl md:text-4xl"> {{ $page->heading() }}</h4>
    <x-text.base>{{ $page->text() }}</x-text.base>
    @foreach ($page->button()->toStructure() as $button)
        <x-buttons.tertiary class="my-2 md:my-0" :link="$button->link()->toUrl()" :text="$button->text()" />
    @endforeach
</section>