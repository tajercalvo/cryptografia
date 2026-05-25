<!DOCTYPE html><html class="scroll-smooth" lang="es"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=JetBrains+Mono:wght@400;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-primary": "#ffffff",
                    "inverse-primary": "#bec6e0",
                    "surface-container": "#e5eeff",
                    "on-primary-fixed-variant": "#3f465c",
                    "secondary": "#006a61",
                    "tertiary-fixed-dim": "#2fd9f4",
                    "primary-container": "#131b2e",
                    "secondary-fixed": "#89f5e7",
                    "on-background": "#0b1c30",
                    "surface-variant": "#d3e4fe",
                    "surface-container-highest": "#d3e4fe",
                    "error": "#ba1a1a",
                    "tertiary-container": "#001f25",
                    "background": "#f8f9ff",
                    "on-surface": "#0b1c30",
                    "tertiary": "#000000",
                    "on-error": "#ffffff",
                    "inverse-on-surface": "#eaf1ff",
                    "surface-container-low": "#eff4ff",
                    "surface-tint": "#565e74",
                    "surface-dim": "#cbdbf5",
                    "surface-bright": "#f8f9ff",
                    "outline": "#76777d",
                    "surface": "#f8f9ff",
                    "on-tertiary-fixed-variant": "#004e5a",
                    "on-tertiary-container": "#0091a5",
                    "on-surface-variant": "#45464d",
                    "outline-variant": "#c6c6cd",
                    "secondary-container": "#86f2e4",
                    "tertiary-fixed": "#a2eeff",
                    "error-container": "#ffdad6",
                    "primary-fixed-dim": "#bec6e0",
                    "secondary-fixed-dim": "#6bd8cb",
                    "on-primary-container": "#7c839b",
                    "on-secondary-fixed": "#00201d",
                    "on-secondary-fixed-variant": "#005049",
                    "on-tertiary-fixed": "#001f25",
                    "primary": "#000000",
                    "on-secondary": "#ffffff",
                    "primary-fixed": "#dae2fd",
                    "on-secondary-container": "#006f66",
                    "inverse-surface": "#213145",
                    "on-error-container": "#93000a",
                    "on-primary-fixed": "#131b2e",
                    "on-tertiary": "#ffffff",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-high": "#dce9ff"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "stack-sm": "12px",
                    "stack-lg": "48px",
                    "margin-mobile": "16px",
                    "gutter": "24px",
                    "container-max": "1200px",
                    "stack-md": "24px",
                    "content-width": "720px",
                    "base": "8px"
            },
            "fontFamily": {
                    "headline-md": ["Inter"],
                    "headline-lg": ["Inter"],
                    "headline-sm": ["Inter"],
                    "body-lg": ["Inter"],
                    "code-block": ["JetBrains Mono"],
                    "body-md": ["Inter"],
                    "headline-lg-mobile": ["Inter"],
                    "label-caps": ["JetBrains Mono"]
            },
            "fontSize": {
                    "headline-md": ["30px", {"lineHeight": "38px", "fontWeight": "600"}],
                    "headline-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "30px", "fontWeight": "400"}],
                    "code-block": ["14px", {"lineHeight": "22px", "fontWeight": "400"}],
                    "body-md": ["16px", {"lineHeight": "26px", "fontWeight": "400"}],
                    "headline-lg-mobile": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "label-caps": ["12px", {"lineHeight": "16px", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .active-dot {
            width: 8px;
            height: 8px;
            background-color: currentColor;
            border-radius: 50%;
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background text-on-background font-body-md selection:bg-secondary-container">
<!-- TopAppBar -->
<header class="bg-surface/80 dark:bg-surface-container/80 backdrop-blur-md text-on-surface dark:text-inverse-on-surface font-headline-sm text-headline-sm docked full-width top-0 sticky border-b border-outline-variant dark:border-outline flat no shadows z-50">
<div class="flex justify-between items-center px-margin-mobile md:px-gutter w-full max-w-container-max mx-auto h-16">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined cursor-pointer active:opacity-70">menu</span>
<h1 class="font-headline-md text-headline-md font-bold text-primary dark:text-inverse-primary">CryptoVault Academy</h1>
</div>
<div class="flex items-center gap-6">
<nav class="hidden md:flex gap-6 font-body-md text-body-md">
<a class="text-secondary dark:text-secondary-fixed font-bold hover:text-secondary dark:hover:text-secondary-fixed transition-colors" href="#">Home</a>
</nav>
<span class="material-symbols-outlined cursor-pointer active:opacity-70">search</span>
</div>
</div>
</header>
<main class="min-h-screen">
<!-- Hero Section -->
<section class="relative overflow-hidden bg-primary-container py-24 md:py-32">
<div class="absolute inset-0 opacity-10 pointer-events-none">
<div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle at 2px 2px, #89f5e7 1px, transparent 0); background-size: 40px 40px;"></div>
</div>
<div class="relative px-margin-mobile md:px-gutter max-w-container-max mx-auto text-center">
<span class="font-label-caps text-label-caps text-secondary-fixed tracking-widest uppercase mb-4 block">Education for the Secure Era</span>
<h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-primary mb-6 max-w-4xl mx-auto">
                    Domina el Arte de la Criptografía: De los Fundamentos a la Implementación
                </h2>
<p class="font-body-lg text-body-lg text-on-primary-container mb-10 max-w-2xl mx-auto">
                    Un viaje estructurado a través de la seguridad digital, diseñado para desarrolladores y entusiastas de la ciberseguridad.
                </p>
<div class="flex flex-col sm:flex-row justify-center gap-4">
<button class="bg-secondary text-on-primary px-8 py-3 rounded-lg font-bold hover:opacity-90 transition-all flex items-center justify-center gap-2">
                        Comenzar Ahora
                        <span class="material-symbols-outlined">arrow_forward</span>
</button>
<button class="border border-secondary text-secondary-fixed px-8 py-3 rounded-lg font-bold hover:bg-secondary/10 transition-all">
                        Explorar Temario
                    </button>
</div>
</div>
</section>
<!-- Main Content Area with SideNav and Content -->
<div class="max-w-container-max mx-auto flex flex-col md:flex-row">
<!-- Side Navigation (Drawer) -->
<aside class="hidden md:block w-80 shrink-0 sticky top-16 h-[calc(100vh-64px)] overflow-y-auto bg-surface-container-low dark:bg-primary-container border-r border-outline-variant dark:border-outline shadow-sm dark:shadow-none p-base flex flex-col gap-stack-sm">
<div class="p-4">
<h3 class="font-headline-sm text-headline-sm font-bold text-primary dark:text-inverse-primary mb-4">Tabla de Contenidos</h3>
<nav class="flex flex-col gap-1">
<a class="flex items-center gap-3 p-3 text-on-surface-variant dark:text-surface-variant hover:bg-surface-variant dark:hover:bg-surface-container-highest transition-all rounded-full" href="#introduccion">
<span class="material-symbols-outlined">info</span>
<span class="font-body-md text-body-md">Introducción</span>
</a>
<a class="flex items-center gap-3 p-3 text-on-surface-variant dark:text-surface-variant hover:bg-surface-variant dark:hover:bg-surface-container-highest transition-all rounded-full" href="#cifrado-simetrico-asimetrico">
<span class="material-symbols-outlined">compare_arrows</span>
<span class="font-body-md text-body-md">Cifrado Simétrico vs Asimétrico</span>
</a>
<a class="flex items-center gap-3 p-3 text-on-surface-variant dark:text-surface-variant hover:bg-surface-variant dark:hover:bg-surface-container-highest transition-all rounded-full" href="#criptosistema-clave-publica">
<span class="material-symbols-outlined">vpn_key</span>
<span class="font-body-md text-body-md">Criptosistema de Clave Pública</span>
</a>
<a class="flex items-center gap-3 p-3 text-on-surface-variant dark:text-surface-variant hover:bg-surface-variant dark:hover:bg-surface-container-highest transition-all rounded-full" href="#algoritmos">
<span class="material-symbols-outlined">functions</span>
<span class="font-body-md text-body-md">Algoritmos Principales</span>
</a>
<a class="flex items-center gap-3 p-3 text-on-surface-variant dark:text-surface-variant hover:bg-surface-variant dark:hover:bg-surface-container-highest transition-all rounded-full" href="#clave-publica-privada">
<span class="material-symbols-outlined">security</span>
<span class="font-body-md text-body-md">Clave Pública y Privada</span>
</a>
<a class="flex items-center gap-3 p-3 text-on-surface-variant dark:text-surface-variant hover:bg-surface-variant dark:hover:bg-surface-container-highest transition-all rounded-full" href="#firma-digital">
<span class="material-symbols-outlined">verified</span>
<span class="font-body-md text-body-md">Firma Digital</span>
</a>
<a class="flex items-center gap-3 p-3 text-on-surface-variant dark:text-surface-variant hover:bg-surface-variant dark:hover:bg-surface-container-highest transition-all rounded-full" href="#ventajas-desventajas">
<span class="material-symbols-outlined">balance</span>
<span class="font-body-md text-body-md">Ventajas y Desventajas</span>
</a>
<a class="flex items-center gap-3 p-3 text-on-surface-variant dark:text-surface-variant hover:bg-surface-variant dark:hover:bg-surface-container-highest transition-all rounded-full" href="#caso-practico">
<span class="material-symbols-outlined">terminal</span>
<span class="font-body-md text-body-md">Caso Práctico en PHP</span>
</a>
<a class="flex items-center gap-3 p-3 text-on-surface-variant dark:text-surface-variant hover:bg-surface-variant dark:hover:bg-surface-container-highest transition-all rounded-full" href="#recomendaciones">
<span class="material-symbols-outlined">gpp_good</span>
<span class="font-body-md text-body-md">Recomendaciones de Seguridad</span>
</a>
<a class="flex items-center gap-3 p-3 text-on-surface-variant dark:text-surface-variant hover:bg-surface-variant dark:hover:bg-surface-container-highest transition-all rounded-full" href="#conclusion">
<span class="material-symbols-outlined">flag</span>
<span class="font-body-md text-body-md">Conclusión</span>
</a>
</nav>
</div>
</aside>
<!-- Main Content Area -->
<div class="flex-grow px-margin-mobile md:px-gutter py-stack-lg">
<!-- 1. Introducción a la Criptografía -->
<section id="introduccion" class="mb-stack-lg scroll-mt-20">
<div class="p-8 bg-surface-container-lowest border border-outline-variant rounded-xl">
<div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-secondary">info</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">1. Introducción a la Criptografía</h3>
<div class="prose max-w-none text-on-surface-variant">
<p class="mb-4">La criptografía es la ciencia y el arte de proteger la información mediante técnicas de codificación. En el mundo digital actual, es el pilar fundamental que sostiene la privacidad, la seguridad de las comunicaciones y la protección de datos sensibles.</p>
<p class="mb-4">Desde transacciones bancarias en línea hasta mensajes privados, la criptografía trabaja silenciosamente en segundo plano para garantizar que solo las personas autorizadas puedan acceder a la información confidencial.</p>
<p>La criptografía moderna se basa en complejos algoritmos matemáticos que transforman datos legibles (texto plano) en información codificada (texto cifrado) que solo puede ser descifrada con la clave correcta.</p>
</div>
</div>
</section>

<!-- 2. Diferencia entre Cifrado Simétrico y Asimétrico -->
<section id="cifrado-simetrico-asimetrico" class="mb-stack-lg scroll-mt-20">
<div class="p-8 bg-surface-container-lowest border border-outline-variant rounded-xl">
<div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-secondary">compare_arrows</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">2. Diferencia entre Cifrado Simétrico y Asimétrico</h3>
<div class="prose max-w-none text-on-surface-variant">
<p class="mb-6">La criptografía se divide en dos grandes categorías según la gestión de claves. A continuación se presenta una comparación exhaustiva:</p>
<div class="overflow-x-auto">
<table class="w-full border-collapse bg-white rounded-lg overflow-hidden shadow-sm">
<thead>
<tr class="bg-gradient-to-r from-secondary-container to-tertiary-container/30">
<th class="p-4 text-left font-bold border-b-2 border-outline-variant">Característica</th>
<th class="p-4 text-left font-bold border-b-2 border-outline-variant">🔐 Criptografía Simétrica</th>
<th class="p-4 text-left font-bold border-b-2 border-outline-variant">🔑 Criptografía Asimétrica</th>
</tr>
</thead>
<tbody class="text-sm">
<tr class="hover:bg-surface-dim/20 transition-colors">
<td class="p-4 font-bold border-b border-outline-variant">Número de claves</td>
<td class="p-4 border-b border-outline-variant">Utiliza una <strong>única clave secreta compartida</strong> para cifrar y descifrar.</td>
<td class="p-4 border-b border-outline-variant">Utiliza un <strong>par de claves relacionadas</strong>: una pública (para cifrar) y una privada (para descifrar).</td>
</tr>
<tr class="hover:bg-surface-dim/20 transition-colors">
<td class="p-4 font-bold border-b border-outline-variant">Distribución de claves</td>
<td class="p-4 border-b border-outline-variant"><span class="text-red-600">Difícil y crítica:</span> la clave debe enviarse por un canal seguro antes de la comunicación.</td>
<td class="p-4 border-b border-outline-variant"><span class="text-green-600">Sencilla:</span> la clave pública puede ser conocida por todos sin comprometer la seguridad.</td>
</tr>
<tr class="hover:bg-surface-dim/20 transition-colors">
<td class="p-4 font-bold border-b border-outline-variant">Velocidad</td>
<td class="p-4 border-b border-outline-variant"><span class="text-green-600">Muy rápida:</span> es ideal para procesar grandes volúmenes de datos.</td>
<td class="p-4 border-b border-outline-variant"><span class="text-red-600">Lenta:</span> el proceso matemático es más complejo y ralentiza la comunicación.</td>
</tr>
<tr class="hover:bg-surface-dim/20 transition-colors">
<td class="p-4 font-bold border-b border-outline-variant">Longitud de claves</td>
<td class="p-4 border-b border-outline-variant"><strong>Más cortas:</strong> por ejemplo, 128 o 256 bits ofrecen una seguridad muy alta.</td>
<td class="p-4 border-b border-outline-variant"><strong>Mucho más largas:</strong> por ejemplo, RSA requiere 2048 o 4096 bits para ser seguro.</td>
</tr>
<tr class="hover:bg-surface-dim/20 transition-colors">
<td class="p-4 font-bold border-b border-outline-variant">Propiedades de seguridad</td>
<td class="p-4 border-b border-outline-variant">Principalmente garantiza la <strong>confidencialidad</strong> de la información.</td>
<td class="p-4 border-b border-outline-variant">Además de confidencialidad, permite <strong>autenticidad, integridad y no repudio</strong> (firmas digitales).</td>
</tr>
<tr class="hover:bg-surface-dim/20 transition-colors">
<td class="p-4 font-bold border-b border-outline-variant">Recursos computacionales</td>
<td class="p-4 border-b border-outline-variant">Requiere <strong>baja potencia de cálculo</strong>; eficiente para dispositivos limitados.</td>
<td class="p-4 border-b border-outline-variant">Requiere <strong>alta potencia de cálculo</strong> y más memoria para procesar las claves.</td>
</tr>
<tr class="hover:bg-surface-dim/20 transition-colors">
<td class="p-4 font-bold border-b border-outline-variant">Algoritmos principales</td>
<td class="p-4 border-b border-outline-variant"><code class="bg-gray-100 px-2 py-1 rounded">AES</code>, <code class="bg-gray-100 px-2 py-1 rounded">ChaCha20</code>, <code class="bg-gray-100 px-2 py-1 rounded">DES</code>, <code class="bg-gray-100 px-2 py-1 rounded">3DES</code>, <code class="bg-gray-100 px-2 py-1 rounded">TwoFish</code></td>
<td class="p-4 border-b border-outline-variant"><code class="bg-gray-100 px-2 py-1 rounded">RSA</code>, <code class="bg-gray-100 px-2 py-1 rounded">DSA</code>, <code class="bg-gray-100 px-2 py-1 rounded">Diffie-Hellman</code>, <code class="bg-gray-100 px-2 py-1 rounded">ECC</code></td>
</tr>
<tr class="hover:bg-surface-dim/20 transition-colors">
<td class="p-4 font-bold">Uso común</td>
<td class="p-4">Cifrado de discos, bases de datos y transmisión masiva de datos (VPN, TLS).</td>
<td class="p-4">Intercambio seguro de claves, firmas digitales y certificados SSL/TLS.</td>
</tr>
</tbody>
</table>
</div>
<div class="mt-6 p-4 bg-surface-dim/30 rounded-lg">
<p class="font-bold mb-2">💡 En la práctica:</p>
<p>Los sistemas modernos combinan ambos tipos en lo que se conoce como <strong>criptografía híbrida</strong>: se usa criptografía asimétrica para intercambiar de forma segura una clave simétrica, y luego se utiliza esta clave simétrica para cifrar los datos en masa de manera eficiente.</p>
</div>
</div>
</div>
</section>

<!-- 3. Qué es el Criptosistema de Clave Pública -->
<section id="criptosistema-clave-publica" class="mb-stack-lg scroll-mt-20">
<div class="p-8 bg-surface-container-lowest border border-outline-variant rounded-xl">
<div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-secondary">vpn_key</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">3. ¿Qué es el Criptosistema de Clave Pública?</h3>
<div class="prose max-w-none text-on-surface-variant">
<p class="mb-4">El criptosistema de clave pública, también conocido como <strong>criptografía asimétrica</strong>, representa una revolución en la seguridad digital. Fue propuesto por primera vez por Whitfield Diffie y Martin Hellman en 1976.</p>
<div class="bg-surface-dim/30 p-6 rounded-lg my-6">
<h4 class="font-bold mb-3">Principio Fundamental:</h4>
<p class="mb-2">Cada usuario posee dos claves matemáticamente relacionadas pero computacionalmente imposibles de derivar una de la otra:</p>
<ul class="space-y-2 mt-4">
<li>• <strong>Clave Pública:</strong> Se comparte libremente con cualquiera</li>
<li>• <strong>Clave Privada:</strong> Se mantiene en secreto absoluto</li>
</ul>
</div>
<p class="mb-4">Lo cifrado con la clave pública solo puede descifrarse con la clave privada correspondiente, y viceversa. Esto permite:</p>
<ul class="space-y-2">
<li>✓ Comunicación segura sin intercambio previo de secretos</li>
<li>✓ Autenticación de identidades</li>
<li>✓ Firmas digitales para garantizar integridad</li>
<li>✓ No repudio de transacciones</li>
</ul>
</div>
</div>
</section>

<!-- 4. Algoritmos Principales -->
<section id="algoritmos" class="bg-surface-dim/30 rounded-3xl p-8 md:p-12 mb-stack-lg border border-outline-variant/50 scroll-mt-20">
<div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4">
<div class="max-w-xl">
<h3 class="font-headline-md text-headline-md text-primary mb-4">4. Algoritmos Principales</h3>
<p class="text-on-surface-variant">Análisis profundo de los estándares de la industria que protegen tus datos cada día en internet.</p>
</div>
<span class="font-label-caps text-label-caps text-secondary font-bold">Estudio Recomendado</span>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- RSA Card -->
<div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant">
<span class="font-label-caps text-label-caps bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full mb-3 inline-block">Más Usado</span>
<h4 class="font-headline-sm text-headline-sm mb-2">RSA (Rivest-Shamir-Adleman)</h4>
<p class="text-on-surface-variant mb-3">El algoritmo más popular basado en la factorización de números primos grandes. Utiliza claves de 2048-4096 bits para seguridad robusta.</p>
<ul class="text-sm text-on-surface-variant space-y-1">
<li>• Usado en SSL/TLS, firmas digitales</li>
<li>• Seguridad basada en factorización</li>
<li>• Estándar industrial desde 1977</li>
</ul>
</div>

<!-- Diffie-Hellman Card -->
<div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant">
<span class="font-label-caps text-label-caps bg-tertiary-fixed text-on-tertiary-fixed px-3 py-1 rounded-full mb-3 inline-block">Intercambio</span>
<h4 class="font-headline-sm text-headline-sm mb-2">Diffie-Hellman</h4>
<p class="text-on-surface-variant mb-3">Protocolo pionero para intercambio seguro de claves sobre un canal público. Base de muchos protocolos modernos.</p>
<ul class="text-sm text-on-surface-variant space-y-1">
<li>• Permite acordar claves secretas</li>
<li>• Usado en VPN, SSH, TLS</li>
<li>• Primera solución práctica (1976)</li>
</ul>
</div>

<!-- ECC Card -->
<div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant">
<span class="font-label-caps text-label-caps bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full mb-3 inline-block">Moderno</span>
<h4 class="font-headline-sm text-headline-sm mb-2">ECC (Elliptic Curve Cryptography)</h4>
<p class="text-on-surface-variant mb-3">Criptografía de curva elíptica que ofrece la misma seguridad que RSA pero con claves más pequeñas y mayor eficiencia.</p>
<ul class="text-sm text-on-surface-variant space-y-1">
<li>• Claves más cortas (256 bits = 3072 bits RSA)</li>
<li>• Más rápido y eficiente</li>
<li>• Ideal para dispositivos móviles</li>
</ul>
</div>

<!-- DSA Card -->
<div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant">
<span class="font-label-caps text-label-caps bg-tertiary-fixed text-on-tertiary-fixed px-3 py-1 rounded-full mb-3 inline-block">Firmas</span>
<h4 class="font-headline-sm text-headline-sm mb-2">DSA (Digital Signature Algorithm)</h4>
<p class="text-on-surface-variant mb-3">Algoritmo estándar del gobierno de EE.UU. específicamente diseñado para firmas digitales, no para cifrado.</p>
<ul class="text-sm text-on-surface-variant space-y-1">
<li>• Solo para firmas, no cifrado</li>
<li>• Estándar FIPS 186</li>
<li>• Base de ECDSA (versión con ECC)</li>
</ul>
</div>

<!-- ElGamal Card -->
<div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant md:col-span-2">
<span class="font-label-caps text-label-caps bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full mb-3 inline-block">Flexible</span>
<h4 class="font-headline-sm text-headline-sm mb-2">ElGamal</h4>
<p class="text-on-surface-variant mb-3">Algoritmo versátil basado en el problema del logaritmo discreto. Permite tanto cifrado como firmas digitales.</p>
<ul class="text-sm text-on-surface-variant space-y-1">
<li>• Seguridad basada en logaritmos discretos</li>
<li>• Usado en PGP (Pretty Good Privacy)</li>
<li>• Cifrado con expansión del mensaje</li>
</ul>
</div>
</div>
</section>
<!-- 5. Clave Pública y Clave Privada -->
<section id="clave-publica-privada" class="mb-stack-lg scroll-mt-20">
<div class="p-8 bg-surface-container-lowest border border-outline-variant rounded-xl">
<div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-secondary">security</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">5. Clave Pública y Clave Privada</h3>
<div class="prose max-w-none text-on-surface-variant">
<div class="grid md:grid-cols-2 gap-6 mb-6">
<div class="bg-surface-dim/30 p-6 rounded-lg">
<h4 class="font-bold mb-3 flex items-center gap-2">
<span class="material-symbols-outlined">lock_open</span>
Clave Pública
</h4>
<ul class="space-y-2">
<li>• Se comparte libremente con cualquiera</li>
<li>• Usada para <strong>cifrar</strong> mensajes</li>
<li>• Usada para <strong>verificar</strong> firmas digitales</li>
<li>• Puede distribuirse en servidores públicos</li>
<li>• No compromete la seguridad si se expone</li>
</ul>
</div>
<div class="bg-secondary-container/20 p-6 rounded-lg">
<h4 class="font-bold mb-3 flex items-center gap-2">
<span class="material-symbols-outlined">lock</span>
Clave Privada
</h4>
<ul class="space-y-2">
<li>• Debe mantenerse en secreto absoluto</li>
<li>• Usada para <strong>descifrar</strong> mensajes</li>
<li>• Usada para <strong>crear</strong> firmas digitales</li>
<li>• Nunca debe compartirse ni transmitirse</li>
<li>• Su exposición compromete toda la seguridad</li>
</ul>
</div>
</div>
<div class="bg-surface-container-high p-6 rounded-lg">
<h4 class="font-bold mb-3">⚙️ Gestión de Claves</h4>
<p class="mb-3">La seguridad del sistema depende completamente de la protección de la clave privada:</p>
<ul class="space-y-2">
<li>• <strong>Generación:</strong> Usar generadores criptográficamente seguros (CSPRNG)</li>
<li>• <strong>Almacenamiento:</strong> HSM (Hardware Security Modules) o almacenamiento cifrado</li>
<li>• <strong>Rotación:</strong> Cambiar claves periódicamente (cada 1-2 años)</li>
<li>• <strong>Respaldo:</strong> Copias seguras con acceso limitado</li>
<li>• <strong>Destrucción:</strong> Eliminación segura al final del ciclo de vida</li>
</ul>
</div>
</div>
</div>
</section>

<!-- 6. Firma Digital -->
<section id="firma-digital" class="mb-stack-lg scroll-mt-20">
<div class="p-8 bg-surface-container-lowest border border-outline-variant rounded-xl">
<div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-secondary">verified</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">6. Firma Digital</h3>
<div class="prose max-w-none text-on-surface-variant">
<p class="mb-4">Una firma digital es el equivalente electrónico de una firma manuscrita, pero con propiedades criptográficas que la hacen mucho más segura y verificable.</p>
            
<div class="bg-surface-dim/30 p-6 rounded-lg mb-6">
<h4 class="font-bold mb-3">🔐 Proceso de Firma Digital:</h4>
<ol class="space-y-3">
<li><strong>1. Hash del mensaje:</strong> Se genera un hash único del documento usando SHA-256 o similar</li>
<li><strong>2. Cifrado del hash:</strong> El hash se cifra con la clave privada del emisor</li>
<li><strong>3. Adjuntar firma:</strong> La firma cifrada se adjunta al mensaje original</li>
<li><strong>4. Verificación:</strong> El receptor descifra la firma con la clave pública y compara hashes</li>
</ol>
</div>

<h4 class="font-bold mb-3">✅ Propiedades Garantizadas:</h4>
<div class="grid md:grid-cols-3 gap-4">
<div class="bg-surface-container-high p-4 rounded-lg">
<h5 class="font-bold mb-2">Autenticidad</h5>
<p class="text-sm">Confirma quién creó el mensaje</p>
</div>
<div class="bg-surface-container-high p-4 rounded-lg">
<h5 class="font-bold mb-2">Integridad</h5>
<p class="text-sm">Detecta cualquier alteración del mensaje</p>
</div>
<div class="bg-surface-container-high p-4 rounded-lg">
<h5 class="font-bold mb-2">No Repudio</h5>
<p class="text-sm">El emisor no puede negar haberlo enviado</p>
</div>
</div>

<p class="mt-6"><strong>Casos de uso:</strong> Contratos electrónicos, transacciones financieras, actualizaciones de software, certificados digitales, blockchain y criptomonedas.</p>
</div>
</div>
</section>

<!-- 7. Ventajas y Desventajas -->
<section id="ventajas-desventajas" class="mb-stack-lg scroll-mt-20">
<div class="p-8 bg-surface-container-lowest border border-outline-variant rounded-xl">
<div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-secondary">balance</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">7. Ventajas y Desventajas</h3>
<div class="grid md:grid-cols-2 gap-6">
<div>
<h4 class="font-headline-sm text-headline-sm mb-4 text-green-600">✅ Ventajas</h4>
<ul class="space-y-3 text-on-surface-variant">
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-green-600 text-sm mt-1">check_circle</span>
<span><strong>Distribución segura:</strong> No requiere canal seguro para compartir claves públicas</span>
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-green-600 text-sm mt-1">check_circle</span>
<span><strong>Escalabilidad:</strong> Solo necesitas n pares de claves para n usuarios (vs n² en simétrico)</span>
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-green-600 text-sm mt-1">check_circle</span>
<span><strong>Firmas digitales:</strong> Permite autenticación y no repudio</span>
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-green-600 text-sm mt-1">check_circle</span>
<span><strong>Gestión simplificada:</strong> Cada usuario solo gestiona su propio par de claves</span>
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-green-600 text-sm mt-1">check_circle</span>
<span><strong>Infraestructura PKI:</strong> Permite certificados y autoridades de certificación</span>
</li>
</ul>
</div>
<div>
<h4 class="font-headline-sm text-headline-sm mb-4 text-red-600">⚠️ Desventajas</h4>
<ul class="space-y-3 text-on-surface-variant">
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-red-600 text-sm mt-1">cancel</span>
<span><strong>Rendimiento lento:</strong> 100-1000x más lento que cifrado simétrico</span>
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-red-600 text-sm mt-1">cancel</span>
<span><strong>Claves grandes:</strong> Requiere claves de 2048-4096 bits para seguridad adecuada</span>
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-red-600 text-sm mt-1">cancel</span>
<span><strong>Complejidad matemática:</strong> Implementación más compleja y propensa a errores</span>
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-red-600 text-sm mt-1">cancel</span>
<span><strong>Gestión de certificados:</strong> Requiere PKI y autoridades de certificación</span>
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-red-600 text-sm mt-1">cancel</span>
<span><strong>Vulnerabilidad cuántica:</strong> RSA y ECC son vulnerables a computación cuántica futura</span>
</li>
</ul>
</div>
</div>
<div class="mt-6 p-4 bg-surface-dim/30 rounded-lg">
<p class="text-on-surface-variant"><strong>💡 En la práctica:</strong> Los sistemas modernos usan <strong>criptografía híbrida</strong> - asimétrica para intercambiar claves y autenticación, simétrica para cifrar datos en masa.</p>
</div>
</div>
</section>

<!-- 8. Caso Práctico en PHP (RSA) -->
<section id="caso-practico" class="mb-stack-lg scroll-mt-20">
<div class="p-8 bg-surface-container-lowest border border-outline-variant rounded-xl">
<div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-secondary">terminal</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">8. Caso Práctico en PHP (RSA)</h3>
<div class="prose max-w-none text-on-surface-variant">
<p class="mb-4">PHP proporciona soporte nativo para RSA a través de la extensión OpenSSL. A continuación se muestra una implementación completa de cifrado/descifrado y firma digital.</p>
            
<div class="bg-gray-900 text-gray-100 p-6 rounded-lg font-code-block text-code-block overflow-x-auto mb-6">
<pre><code>&lt;?php
// Ejemplo completo de RSA en PHP

class CriptografiaRSA {
    private $privateKey;
    private $publicKey;
    
    // Generar par de claves RSA
    public function generarClaves($bits = 2048) {
        $config = array(
            "private_key_bits" => $bits,
            "private_key_type" => OPENSSL_KEYTYPE_RSA,
        );
        
        $res = openssl_pkey_new($config);
        openssl_pkey_export($res, $this->privateKey);
        
        $details = openssl_pkey_get_details($res);
        $this->publicKey = $details['key'];
        
        return [
            'privada' => $this->privateKey,
            'publica' => $this->publicKey
        ];
    }
    
    // Cifrar con clave pública
    public function cifrar($datos, $clavePublica) {
        openssl_public_encrypt($datos, $cifrado, $clavePublica);
        return base64_encode($cifrado);
    }
    
    // Descifrar con clave privada
    public function descifrar($datosCifrados, $clavePrivada) {
        $cifrado = base64_decode($datosCifrados);
        openssl_private_decrypt($cifrado, $descifrado, $clavePrivada);
        return $descifrado;
    }
    
    // Firmar datos
    public function firmar($datos, $clavePrivada) {
        openssl_sign($datos, $firma, $clavePrivada, OPENSSL_ALGO_SHA256);
        return base64_encode($firma);
    }
    
    // Verificar firma
    public function verificarFirma($datos, $firma, $clavePublica) {
        $firmaDecodificada = base64_decode($firma);
        return openssl_verify($datos, $firmaDecodificada, $clavePublica, OPENSSL_ALGO_SHA256) === 1;
    }
}

// USO DEL CÓDIGO
$rsa = new CriptografiaRSA();
$claves = $rsa->generarClaves();

// Cifrado
$mensaje = "Información confidencial";
$cifrado = $rsa->cifrar($mensaje, $claves['publica']);
echo "Cifrado: " . $cifrado . "\n";

// Descifrado
$descifrado = $rsa->descifrar($cifrado, $claves['privada']);
echo "Descifrado: " . $descifrado . "\n";

// Firma digital
$documento = "Contrato importante";
$firma = $rsa->firmar($documento, $claves['privada']);
echo "Firma: " . $firma . "\n";

// Verificación
$esValida = $rsa->verificarFirma($documento, $firma, $claves['publica']);
echo "Firma válida: " . ($esValida ? "Sí" : "No");
?&gt;</code></pre>
</div>

<div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded">
<p class="font-bold mb-2">⚠️ Limitaciones Importantes:</p>
<ul class="space-y-1 text-sm">
<li>• RSA solo puede cifrar datos pequeños (máx ~245 bytes con RSA-2048)</li>
<li>• Para archivos grandes, cifra con AES y usa RSA solo para la clave AES</li>
<li>• Siempre usa padding OAEP para cifrado y PSS para firmas en producción</li>
</ul>
</div>
</div>
</div>
</section>

<!-- 9. Recomendaciones de Seguridad -->
<section id="recomendaciones" class="mb-stack-lg scroll-mt-20">
<div class="p-8 bg-surface-container-lowest border border-outline-variant rounded-xl">
<div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-secondary">gpp_good</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">9. Recomendaciones de Seguridad</h3>
<div class="prose max-w-none text-on-surface-variant">
<div class="grid md:grid-cols-2 gap-6">
<div class="space-y-4">
<div class="bg-surface-dim/30 p-4 rounded-lg">
<h4 class="font-bold mb-2">🔑 Gestión de Claves</h4>
<ul class="text-sm space-y-1">
<li>• Usa al menos 2048 bits para RSA (4096 recomendado)</li>
<li>• Para ECC, usa curvas P-256 o superiores</li>
<li>• Nunca hardcodees claves privadas en el código</li>
<li>• Usa HSM o key vaults en producción</li>
<li>• Implementa rotación de claves periódica</li>
</ul>
</div>
<div class="bg-surface-dim/30 p-4 rounded-lg">
<h4 class="font-bold mb-2">🛡️ Implementación</h4>
<ul class="text-sm space-y-1">
<li>• Usa librerías criptográficas probadas (OpenSSL, libsodium)</li>
<li>• No inventes tu propio algoritmo criptográfico</li>
<li>• Implementa padding correcto (OAEP para RSA)</li>
<li>• Usa salt aleatorio para cada operación</li>
<li>• Valida todos los inputs antes de operaciones criptográficas</li>
</ul>
</div>
</div>
<div class="space-y-4">
<div class="bg-surface-dim/30 p-4 rounded-lg">
<h4 class="font-bold mb-2">🔒 Protocolos</h4>
<ul class="text-sm space-y-1">
<li>• Usa TLS 1.3 para comunicaciones</li>
<li>• Implementa Perfect Forward Secrecy (PFS)</li>
<li>• Verifica certificados SSL/TLS correctamente</li>
<li>• No uses protocolos obsoletos (SSL 2.0/3.0, TLS 1.0)</li>
<li>• Implementa certificate pinning en apps móviles</li>
</ul>
</div>
<div class="bg-surface-dim/30 p-4 rounded-lg">
<h4 class="font-bold mb-2">⚡ Mejores Prácticas</h4>
<ul class="text-sm space-y-1">
<li>• Usa criptografía híbrida (asimétrica + simétrica)</li>
<li>• Implementa rate limiting para prevenir ataques</li>
<li>• Registra intentos de acceso fallidos</li>
<li>• Mantén actualizado el software criptográfico</li>
<li>• Realiza auditorías de seguridad periódicas</li>
</ul>
</div>
</div>
</div>
<div class="mt-6 p-4 bg-red-50 border-l-4 border-red-500 rounded">
<p class="font-bold text-red-800 mb-2">🚨 Errores Comunes a Evitar:</p>
<ul class="text-sm text-red-700 space-y-1">
<li>• Usar generadores de números aleatorios no criptográficos</li>
<li>• Reutilizar nonces o IVs en cifrado simétrico</li>
<li>• No validar certificados en conexiones HTTPS</li>
<li>• Almacenar claves privadas sin cifrar</li>
<li>• Usar algoritmos obsoletos (MD5, SHA-1, DES)</li>
</ul>
</div>
</div>
</div>
</section>

<!-- 10. Conclusión -->
<section id="conclusion" class="mb-stack-lg scroll-mt-20">
<div class="p-8 bg-gradient-to-r from-secondary-container/30 to-tertiary-container/30 border border-outline-variant rounded-xl">
<div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-secondary">flag</span>
</div>
<h3 class="font-headline-md text-headline-md mb-4">10. Conclusión</h3>
<div class="prose max-w-none text-on-surface-variant">
<p class="mb-4">La criptografía de clave pública ha revolucionado la seguridad digital, permitiendo comunicaciones seguras en Internet, comercio electrónico, banca en línea y prácticamente todos los aspectos de nuestra vida digital moderna.</p>
            
<div class="grid md:grid-cols-3 gap-4 my-6">
<div class="bg-white p-4 rounded-lg text-center">
<div class="text-3xl font-bold text-secondary mb-2">2048+</div>
<div class="text-sm">Bits mínimos para RSA seguro</div>
</div>
<div class="bg-white p-4 rounded-lg text-center">
<div class="text-3xl font-bold text-secondary mb-2">256</div>
<div class="text-sm">Bits suficientes en ECC</div>
</div>
<div class="bg-white p-4 rounded-lg text-center">
<div class="text-3xl font-bold text-secondary mb-2">100x</div>
<div class="text-sm">Más lento que cifrado simétrico</div>
</div>
</div>

<h4 class="font-bold mb-3">🎯 Puntos Clave para Recordar:</h4>
<ul class="space-y-2 mb-6">
<li>✓ La criptografía asimétrica resuelve el problema de distribución de claves</li>
<li>✓ RSA sigue siendo el estándar más usado, pero ECC está ganando terreno</li>
<li>✓ Las firmas digitales garantizan autenticidad, integridad y no repudio</li>
<li>✓ En producción, siempre usa criptografía híbrida para mejor rendimiento</li>
<li>✓ La seguridad depende tanto del algoritmo como de la implementación correcta</li>
</ul>

<div class="bg-surface-container-high p-6 rounded-lg">
<h4 class="font-bold mb-3">🚀 Próximos Pasos:</h4>
<ol class="space-y-2">
<li><strong>1. Practica:</strong> Implementa el código de ejemplo y experimenta con diferentes tamaños de clave</li>
<li><strong>2. Profundiza:</strong> Estudia los detalles matemáticos de RSA y curvas elípticas</li>
<li><strong>3. Explora PKI:</strong> Aprende sobre certificados X.509 y autoridades de certificación</li>
<li><strong>4. Mantente actualizado:</strong> Investiga criptografía post-cuántica (NIST PQC)</li>
<li><strong>5. Certifícate:</strong> Considera certificaciones como CISSP, CEH o especializaciones en criptografía</li>
</ol>
</div>

<p class="mt-6 text-center font-bold text-lg">La criptografía es un campo en constante evolución. ¡Sigue aprendiendo y mantente seguro! 🔐</p>
</div>
</div>
</section>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-surface-container-highest dark:bg-primary-container text-on-surface-variant dark:text-on-primary-container font-label-caps text-label-caps w-full py-stack-lg border-t border-outline-variant dark:border-outline flat no shadows">
<div class="flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-gutter max-w-container-max mx-auto gap-stack-md">
<div class="flex flex-col items-center md:items-start gap-2">
<h2 class="font-headline-sm text-headline-sm font-bold text-primary dark:text-inverse-primary">CryptoVault Academy</h2>
<p class="">© 2024 CryptoVault Academy. Securing the digital frontier.</p>
</div>
<div class="flex gap-6">
<a class="text-on-surface-variant dark:text-on-primary-container hover:text-primary dark:hover:text-on-primary-fixed transition-colors" href="#">Documentation</a>
<a class="text-on-surface-variant dark:text-on-primary-container hover:text-primary dark:hover:text-on-primary-fixed transition-colors" href="#">Privacy Policy</a>
<a class="text-on-surface-variant dark:text-on-primary-container hover:text-primary dark:hover:text-on-primary-fixed transition-colors" href="#">Whitepaper</a>
<a class="text-on-surface-variant dark:text-on-primary-container hover:text-primary dark:hover:text-on-primary-fixed transition-colors" href="#">Github</a>
</div>
</div>
</footer>
<!-- Mobile FAB -->
<button class="fixed bottom-6 right-6 md:hidden w-14 h-14 bg-secondary text-on-primary rounded-full shadow-lg flex items-center justify-center z-40 active:scale-95 transition-transform">
<span class="material-symbols-outlined">menu_open</span>
</button>


</body></html>