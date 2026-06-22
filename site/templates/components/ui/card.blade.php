@props(['blurb', 'text'])

<div {{ $attributes->merge(['class' => 'bg-zinc-50 shadow-lg rounded-lg p-5 space-y-3 group transform transition duration-300 hover:-translate-y-2 hover:scale-105 hover:shadow-md hover:bg-white']) }}>
    {{ $slot }}
    <h3 class="text-xl text-zinc-800">{{ $blurb }}</h3>
    <div class="text-sm text-zinc-600">{!! $text !!}</div>
</div>