<section class="py-10 max-w-6xl mx-auto px-5 grid grid-cols-1 md:grid-cols-4 gap-10">
    @foreach ($page->blurbs()->toStructure() as $blurb)
        <x-ui.card blurb="{{ $blurb->heading() }}" text="{!! $blurb->text()->kt() !!}">
            <div class="font-bold text-xl w-8 h-8 border-2 border-darkPeach rounded-full flex justify-center items-center">{{ $loop->iteration }}</div>
        </x-ui.card>
    @endforeach
</section>