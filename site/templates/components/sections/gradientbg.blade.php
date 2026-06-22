<section {{ $attributes->merge(['class' => 'bg-white bg-gradient-to-r from-darkPeach via-orange-300 to-darkPeach flex items-center relative z-0 pt-20 md:pt-0']) }}>
{{ $slot }}
<div class="bg-cover bg-center bg-hero-pattern absolute inset-0 z-10 mix-blend-overlay opacity-10" style="background-image: url('/images/patron.webp')"></div>
</section>
