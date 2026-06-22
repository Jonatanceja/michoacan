<section class="py-10 max-w-6xl mx-auto px-5">
    <div class="space-y-3 mb-6">
        @foreach ($page->children() as $item)
        <x-headings.h2 class="pt-10">Sucursales {{ $item->title() }}</x-headings.h2>
            @foreach ($item->address()->toStructure() as $address)
            <div class="bg-white shadow-xl rounded-lg px-5" x-data="{ open: false }">
                <button class="flex items-center justify-between w-full p-4 text-left font-medium" @click="open = !open">
                    <div class="flex items-center space-x-3">
                        <x-icons.mapmarker class="h-4"/>
                        <h5 class="text-zinc-800 text-lg tracking-wide"> {{ $address->heading() }}, {{ $address->state() }}</h5>
                    </div>
                    <div x-show="!open">
                        <x-icons.chevronUp class="w-6" />
                    </div>
                    <div x-show="open">
                        <x-icons.chevronDown class="w-6" />
                    </div>
                </button>
                <div class="pb-5 mt-4 space-y-5" x-show="open" x-cloak>
                    <x-text.base>{!! $address->address()->kt() !!}</x-text.base>
                    <div>{!! $address->map() !!}</div>
                </div>
            </div>
            @endforeach
        @endforeach
    </div>
</section>
