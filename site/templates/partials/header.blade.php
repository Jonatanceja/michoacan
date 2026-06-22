<div x-data="{ scrolled: false, open: false }" @click.away="open = false" x-init="window.addEventListener('scroll', () => { scrolled = (window.scrollY > 0) })">
    <div class="fixed w-full py-2 z-50 transition-all duration-300" :class="{ 'bg-transparent': !scrolled && window.innerWidth >= 768, 'bg-white shadow-lg': scrolled || window.innerWidth < 768 }">
        <nav class="flex items-center w-full max-w-screen-xl px-5 mx-auto space-x-5 transition-all duration-300">
            <div class="hidden md:flex">
                <a href="{{ $site->url() }}" aria-label="Ir a página de inicio">
                    <img class="transition-all duration-300" :class="scrolled ? 'w-16' : 'w-32'" src="/images/michoacana.svg" alt="{{ $site->title() }}">
                </a>
            </div>
            <div class="hidden md:flex">
                <ul class="space-x-4 uppercase pr-4 text-center w-full flex items-center">
                    @foreach ($site->children()->listed() as $subpage)
                        <li><a href="{{ $subpage->url() }}" class="text-zinc-800 poppins-light text-sm font-semibold border-b-2 border-b-zinc-800/0 hover:border-b-zinc-800 transition duration-300" aria-label="Ir a la sección de {{ $subpage->title() }}">{{ $subpage->title() }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="hidden md:flex items-center space-x-4 justify-end grow">
                <div class="space-y-3">
                    <div class="flex items-center space-x-4 justify-end grow text-xs">
                        <a class="flex items-center tracking-wider transition bg-zinc-800 hover:bg-zinc-600 p-2 rounded-md shadow-md text-white border border-zinc-900/10" href="tel:{{ $site->phoneMexico() }}"><x-icons.phone class="w-4 h-4 text-white mr-2" /> México: <span class="font-semibold ml-2">{{ $site->phoneMexico() }}</span></a>
                        <a class="flex items-center tracking-wider transition bg-zinc-800 hover:bg-zinc-600 p-2 rounded-md shadow-md text-white border border-zinc-900/10" href="tel:{{ $site->phoneInternational() }}"><x-icons.phone class="w-4 h-4 text-white mr-2" /> Internacional: <span class="ml-2 font-semibold"> {{ $site->phoneInternational() }}</span></a>
                    </div>
                    <div class="flex items-center gap-1 justify-end">
                        <a href="{{ $site->facebook() }}" target="_blank"><x-icons.facebook class="bg-zinc-800 hover:bg-zinc-600 p-1 rounded-md shadow-md text-white border border-zinc-900/10 w-8 h-8" /></a>
                        <a href="{{ $site->instagram() }}" target="_blank"><x-icons.instagram class="bg-zinc-800 hover:bg-zinc-600 p-1 rounded-md shadow-md text-white border border-zinc-900/10 w-8 h-8" /></a>
                        <a href="{{ $site->youtube() }}" target="_blank"><x-icons.youtube class="bg-zinc-800 hover:bg-zinc-600 p-1 rounded-md shadow-md text-white border border-zinc-900/10 w-8 h-8" /></a>
                    </div>
                </div>
            </div>
            <!--- Mobile -->
            <div class="md:hidden text-zinc-800 flex items-center w-full">
                <div class="w-1/2 flex justify-start">
                    <a href="{{ $site->url() }}" aria-label="Ir a página de inicio">
                        <img class="w-16" src="/images/michoacana.svg" alt="{{ $site->title() }}">
                    </a>
                </div>
                <div class="w-1/2 flex justify-end">
                    <button aria-label="Open Menu" @click="open = !open" class="text-darkPeach focus:ring-2 focus:outline-none">
                        <svg x-show="!open" class="h-10 w-10 transition-transform duration-300 transform" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm16 4H4v2h16v-2z" fill="currentColor"></path>
                        </svg>
                        <svg x-show="open" class="h-10 w-10 transition-transform duration-300 transform rotate-180" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.364 5.636a1 1 0 0 0-1.414 0L12 10.586 7.05 5.636a1 1 0 1 0-1.414 1.414L10.586 12l-4.95 4.95a1 1 0 1 0 1.414 1.414L12 13.414l4.95 4.95a1 1 0 0 0 1.414-1.414L13.414 12l4.95-4.95a1 1 0 0 0 0-1.414z" fill="currentColor"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        <div x-show="open" class="md:hidden bg-white mt-2 transition-all duration-300" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
            <ul class="px-2 py-5 uppercase text-zinc-800 text-center space-y-4">
                @foreach ($site->children()->listed() as $subpage)
                    <li><a href="{{ $subpage->url() }}" class="text-zinc-800 poppins-light text-sm font-semibold border-b-2 border-b-zinc-800/0 hover:border-b-zinc-800 transition duration-300" aria-label="Ir a la sección de {{ $subpage->title() }}">{{ $subpage->title() }}</a></li>
                @endforeach
            </ul>
            <div class="flex md:hidden items-center justify-center mb-6">
                <div class="space-y-6">
                    <div class="items-center justify-end grow text-xs space-y-6">
                        <a class="flex items-center tracking-wider hover:underline transition" href="tel:{{ $site->phoneMexico() }}"><x-icons.phone class="w-4 h-4 text-zinc-800 mr-2" /> México: <span class="font-semibold ml-2">{{ $site->phoneMexico() }}</span></a>
                        <a class="flex items-center tracking-wider hover:underline transition" href="tel:{{ $site->phoneInternational() }}"><x-icons.phone class="w-4 h-4 text-zinc-800 mr-2" /> Internacional: <span class="ml-2 font-semibold"> {{ $site->phoneInternational() }}</span></a>
                    </div>
                    <div class="flex gap-1 justify-center">
                        <a href="{{ $site->facebook() }}" target="_blank"><x-icons.facebook class="bg-zinc-800 hover:bg-zinc-600 p-1 rounded-md shadow-md text-white border border-zinc-900/10 w-8 h-8" /></a>
                        <a href="{{ $site->instagram() }}" target="_blank"><x-icons.instagram class="bg-zinc-800 hover:bg-zinc-600 p-1 rounded-md shadow-md text-white border border-zinc-900/10 w-8 h-8" /></a>
                        <a href="{{ $site->youtube() }}" target="_blank"><x-icons.youtube class="bg-zinc-800 hover:bg-zinc-600 p-1 rounded-md shadow-md text-white border border-zinc-900/10 w-8 h-8" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
