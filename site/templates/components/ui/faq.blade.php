@props(['faq'])

<div x-data="{ open: null }" class="space-y-8">
    @foreach ($faq as $item)
        <div class="bg-white shadow-xl rounded-lg" x-data="{ open: false }">
            <button class="flex items-center justify-between w-full p-4 mb-4 text-left font-medium" @click="open = !open">
                <h5 class="text-zinc-800 text-xl tracking-wide">{{ $item->question() }}</h5>
                <div x-show="!open">
                    <x-icons.chevronUp class="w-10" />
                </div>
                <div x-show="open">
                    <x-icons.chevronDown class="w-10" />
                </div>
            </button>
            <div class="pb-5 px-5 mt-4" x-show="open" style="display: none;">
                <x-text.base>@kt($item->answer())</x-text.base>
            </div>
        </div>
    @endforeach
</div>