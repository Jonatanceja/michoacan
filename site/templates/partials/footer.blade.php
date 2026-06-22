<footer class="bg-zinc-800 text-white">
    <div class="max-w-4xl px-5 py-10 mx-auto space-y-5">
        <x-headings.h5 class="text-center text-white">{{ $site->footer() }}</x-headings.h5>
        <x-text.lightBase class="text-center">{{ $site->slogan() }}</x-text.lightBase>
        <div class="flex items-center space-x-4 justify-center grow">
            <a href="{{ $site->facebook() }}" target="_blank"><x-icons.facebook class="w-6 h-6 text-white" /></a>
            <a href="{{ $site->instagram() }}" target="_blank"><x-icons.instagram class="w-6 h-6 text-white" /></a>
            <a href="{{ $site->youtube() }}" target="_blank"><x-icons.youtube class="w-8 h-8 text-white" /></a>
        </div>
        <div class="h-px bg-white border-px"></div>
        <x-text.lightBase class="text-sm text-center">Copyright © {{ date('Y') }} - {{ $site->title() }} | <a class="text-zinc-300 hover:uderline" href="{{ $site->privacyPolicy() }}" target="_blank">Políticas de privacidad</a></x-text.lightBase>
    </div>
</footer>