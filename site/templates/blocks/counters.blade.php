<section class="py-10 px-5 max-w-6xl mx-auto space-x-0 md:space-x-10 md:space-y-0 flex items-top justify-center text-zinc-800">
    @foreach ($page->counters()->toStructure() as $index => $counter)
    <div class="max-w-32 md:max-w-56 space-y-5">
        <div id="counter-{{ $index }}" 
             data-value="{{ $counter->value() }}" 
             class="flex justify-center items-center p-10 md:p-20 w-6 h-6 md:w-44 md:h-44 mx-auto border-8 border-darkPeach rounded-full text-2xl md:text-4xl font-bold count">
            <!-- Leave empty; JS will handle the value -->
            <span class="count-value">0</span>
            @if ($counter->symbol()->isNotEmpty())
                <span class="count-symbol">{{ $counter->symbol() }}</span>    
            @endif
        </div>
        <h4 class="text-sm md:text-2xl text-center px-2">{{ $counter->counter() }}</h4>
    </div>
    @endforeach
</section>
