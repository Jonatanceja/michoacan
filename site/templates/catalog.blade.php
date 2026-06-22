@extends('layouts.default')
@section('content')
<x-sections.gradientbg class="" data-scroll-section>
    <div class="px-5 pt-36 pb-10 mx-auto gap-5 items-center relative z-20">
        <div class="mr-auto place-self-center lg:col-span-6">
            <x-headings.coverheading>{{ $page->title() }}</x-headings.coverheading> 
        </div>            
    </div>
</x-sections.gradientbg>
<main class="grid grid-cols-2 md:grid-cols-3 gap-10 md:gap-20 max-w-5xl mx-auto px-5 py-10">
    @foreach ($page->children() as $category)
        <div class="space-y-5">
            <a href="{{ $category->url() }}" aria-label="Ir a la categoria {{ $category->title() }}">
                @if ($image = $category->picture()->toFile())
                    <div class="overflow-hidden rounded-md">
                        <x-ui.picture :image="$image" class="w-full transition duration-300 transform hover:scale-110"/>
                    </div>
                @endif
                <h2 class="text-center text-xl pt-5">{{ $category->title() }}</h2>
            </a>
        </div>
    @endforeach
</main>
@endsection