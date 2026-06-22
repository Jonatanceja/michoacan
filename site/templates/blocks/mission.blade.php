<section class="py-10 md:py-16 space-y-10 px-5">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-4xl mx-auto">
        <div class="space-y-5">
            <div class="flex space-x-3">
                @if ($image = $page->missionIcon()->toFile())
                    <img src="{{ $image->url() }}" alt="{{ $image->alt() }}">
                @endif
                <h3 class="font-bold text-2xl">Misión</h3>
            </div>
            <x-text.base>@kt($page->mission())</x-text.base>
        </div>
        <div class="space-y-5">
            <div class="flex space-x-3">
                @if ($image = $page->visionIcon()->toFile())
                    <img src="{{ $image->url() }}" alt="{{ $image->alt() }}">
                @endif
                <h3 class="font-bold text-2xl">Visión</h3>
            </div>
            <x-text.base>@kt($page->vision())</x-text.base>
        </div>
    </div>
    <div class="max-w-4xl mx-auto space-y-5 text-center">
        @if ($image = $page->valuesIcon()->toFile())
            <img class="w-36 mx-auto" src="{{ $image->url() }}" alt="{{ $image->alt() }}"> 
        @endif
        <h3 class="font-bold text-2xl">Valores</h3>
        <x-text.base>@kt($page->values())</x-text.base>
    </div>
</section>