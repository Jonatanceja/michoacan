<script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "{{ $site->title() }}",
      "description": "{{ $site->description() }}",
      @if ($image = $site->opengraph()->toFile())
      "image": "{{ $image->url() }}",
      @endif
      "logo": "https://lamichoacanaweb.com/images/michoacana.svg",
      "url": "https://lamichoacanaweb.com",
      "telephone": "{{ $site->phone() }}",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Camino a Sta. Ana Tepetitlán 80-E",    // Aquí puedes usar un campo definido en Kirby
        "addressLocality": "Zapopan",    // Usando el campo de ciudad
        "addressRegion": "Jalisco",     // Campo de estado o región
        "postalCode": "45070",   // Código postal
        "addressCountry": "MX"                       // México como país
      },
      "offers": {
        "@type": "Offer",
        "url": "https://lamichoacanaweb.com/modelo-de-negocio",
        "itemOffered": {
          "@type": "Plan de negocios",
          "name": "{{ $site->title() }}",
          "description": "Adquiere una franquicia de nuestra exitosa nevería con todo lo necesario para abrir tu propio negocio."
        },
        "eligibleRegion": {
          "@type": "Place",
          "name": "México"
        },
        "availability": "https://schema.org/InStock"
      }
    }
    </script>