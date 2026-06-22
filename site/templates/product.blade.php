@extends('layouts.default')
@section('content')
<div class="h-28"></div>
<main class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-20 max-w-6xl mx-auto px-5 py-10 items-center">
    <div>
        @if ($image = $page->picture()->toFile())
            <x-ui.picture :image="$image" class="w-full rounded-md"/>
        @endif
    </div>
    <div class="space-y-5">
        <x-headings.h2>{{ $page->title() }}</x-headings.h2>
        <x-text.base>{{ $page->description() }}</x-text.base>
    </div>
</main>
@endsection