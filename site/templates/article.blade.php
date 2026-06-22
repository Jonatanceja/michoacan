@extends('layouts.default')
@section('content')
<x-sections.gradientbg>
    <div class="px-5 pt-36 pb-10 mx-auto gap-5 items-center relative z-20">
        <x-headings.coverheading>{{ $page->title() }}</x-headings.coverheading>            
    </div>
</x-sections.gradientbg>
<main class="py-10 max-w-4xl mx-auto space-y-10 px-5">
    @if ($image = $page->picture()->toFile())
        <x-ui.picture class="w-full" :image="$image"/>
    @endif
    @php
                // Cargar las traducciones de Carbon para español
                Carbon\Carbon::setLocale('es');
            
                // Crear instancia de Carbon
                $dateTimestamp = $page->date()->toTimestamp();
                $carbonDate = \Carbon\Carbon::createFromTimestamp($dateTimestamp);
            
                // Obtener los nombres traducidos
                $dayOfWeek = ucfirst($carbonDate->translatedFormat('l'));
                $dayOfMonth = $carbonDate->translatedFormat('d');
                $month = ucfirst($carbonDate->translatedFormat('F'));
                $year = $carbonDate->translatedFormat('Y');
                @endphp
                <div class="">{{ $dayOfMonth }} de {{ $month }} {{ $year }}</div>

                @if ($user = $page->author()->toUser())
                   <div class="text-sm">Por: {{ $user->username() }}</div> 
                @endif
        </div>
        @foreach ($page->layout()->toLayouts() as $layout)
        <section class="max-w-4xl mx-auto" id="{{ $layout->id() }}">
            @foreach ($layout->columns() as $column)
                <div class="text-left prose-blockquote:text-xl prose-h2:text-3xl prose-hr:w-32 min-w-full tracking tracking-widest" style="--span:{{ $column->span(6) }}">
                    <div class="blocks">
                        @foreach ($column->blocks() as $block)
                            <div class="min-w-full block block-type-{{ $block->type() }} @if($block->type() == 'video') video-block @endif">
                                {!! $block !!}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </section>
    @endforeach
    <div><a href="{{ $site->url() }}#blog" aria-label="Regresar al inicio">Volver</a></div>
</main>
@endsection