<section class="mx-auto max-w-6xl px-5 py-10 space-y-10">
    <x-headings.h5>{{ $page->heading() }}</x-headings.h5>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-10 items-bottom">
        @foreach ($page->cards()->toStructure() as $item)
            <div class="space-y-5">              
                @if ($image = $item->picture()->toFile())
                    <x-ui.picture :image="$image" />
                @endif
                <h6 class="font bold text-xl">{{ $item->card() }}</h6>
                <x-text.base>@kt($item->text())</x-text.base>
            </div>
        @endforeach
    </div>
</section>