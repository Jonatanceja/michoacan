@extends('layouts.default')
@section('content')
<x-sections.gradientbg class="" data-scroll-section>
    <div class="px-5 pt-36 pb-10 mx-auto gap-5 items-center relative z-20">
        <div class="mr-auto place-self-center lg:col-span-6">
            <x-headings.coverheading>{{ $page->title() }}</x-headings.coverheading> 
        </div>            
    </div>
</x-sections.gradientbg>
<section class="py-10 px-5 max-w-6xl mx-auto space-y-10">
    @foreach ($page->children()->listed() as $article)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <a href="{{ $article->url() }}" aria-label="Ir a la noticia {{ $article->title() }}">
                    @if ($image = $article->picture()->toFile())
                        <x-ui.picture class="w-full" :image="$image"/>
                    @endif
                </a>
            </div>
            <div class="space-y-5">
                <div>
                    <a href="{{ $article->url() }}" aria-label="Ir a la noticia {{ $article->title() }}">
                        <x-headings.h3>{{ $article->title() }}</x-headings.h3>
                    </a>
                </div>
                <x-text.base class="text-base">@kt($article->short())</x-text.base>
                <div class="text-base">
                    <a class="text-darkPeach hover:underline" href="{{ $article->url() }}" class="btn-tertiary" aria-label="Ir a la noticia {{ $article->title() }}">Leer más</a>
                </div>
            </div>
        </div>
    @endforeach
</section>
@endsection