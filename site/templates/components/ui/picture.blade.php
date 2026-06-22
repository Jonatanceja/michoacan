@props(['image'])

@php($webp = $image->isResizable() ? $image->resize() : null)

<picture>
    @if ($webp)
    <source srcset="{{ $webp->url() }}" type="{{ $webp->mime() }}">
    @endif
    <img {{ $attributes }} src="{{ $image->url() }}" alt="{{ $image->alt() }}">
</picture>
