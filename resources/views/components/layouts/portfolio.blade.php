<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Portfolio' }}</title>
    <script>
        (function() {
            try {
                const stored = localStorage.getItem('theme');
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                if (stored === 'light' || (!stored && !prefersDark)) {
                    document.documentElement.classList.remove('dark');
                } else {
                    document.documentElement.classList.add('dark');
                }
            } catch (e) {}
        })();
    </script>
    @php
        $metaDescription = 'Portfolio of Ken Denver B. Castillo — BSIT 4 student, full-stack developer, and Laravel enthusiast based in Bangued, Abra.';
        $canonicalUrl = url('/');
        $metaImage = asset('image/ken-profile.jpg');
        $personSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => $name ?? 'Ken Denver B. Castillo',
            'jobTitle' => 'BSIT Student · Full-Stack Developer · Laravel Enthusiast',
            'email' => $email ?? 'kbernardez83@gmail.com',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Bangued',
                'addressRegion' => 'Abra',
                'addressCountry' => 'PH',
            ],
            'sameAs' => [$github ?? 'https://github.com/Kenyadis'],
        ];
    @endphp
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="author" content="{{ $name ?? 'Ken Denver B. Castillo' }}">
    <meta name="theme-color" content="#0a0e17">
    <link rel="canonical" href="{{ $canonicalUrl }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? 'Portfolio' }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:image" content="{{ $metaImage }}">
    <meta property="og:image:alt" content="Portrait of {{ $name ?? 'Ken Denver B. Castillo' }}">
    <meta property="og:site_name" content="{{ $name ?? 'Portfolio' }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Portfolio' }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ $metaImage }}">
    <meta name="twitter:image:alt" content="Portrait of {{ $name ?? 'Ken Denver B. Castillo' }}">
    <script type="application/ld+json">{!! json_encode($personSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>
    @fonts
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-night-950 text-mist-200 dark:bg-night-950 dark:text-mist-200 bg-light-50 text-light-900 antialiased font-sans min-h-screen overflow-x-hidden transition-colors duration-300">

    <a href="#main-content" class="skip-link">Skip to content</a>
    <div class="scroll-progress" aria-hidden="true"><span id="scroll-progress-bar"></span></div>

    {{-- Atmospheric background --}}
    <div class="page-backdrop" aria-hidden="true">
        <span class="glow-orb orb-1"></span>
        <span class="glow-orb orb-2"></span>
        <span class="glow-orb orb-3"></span>
        <div class="particle-field" id="particle-field"></div>
    </div>

    {{-- Navigation --}}
    <nav class="fixed top-0 inset-x-0 z-50 px-3 sm:px-6 pt-3 sm:pt-4">
        <div class="max-w-6xl mx-auto rounded-2xl glass-panel px-4 sm:px-6">
            <div class="flex items-center justify-between h-14 sm:h-16">
                {{-- Logo / Name --}}
                <a href="{{ url('/') }}" class="text-lg sm:text-xl font-bold gradient-text tracking-tight select-none">
                    {{ $name ?? '[Your Name]' }}
                </a>

                {{-- Desktop Nav --}}
                <div class="hidden md:flex items-center gap-1">
                    <a href="#home" class="nav-link px-3 lg:px-4 py-2 text-sm font-medium rounded-lg">Home</a>
                    <a href="#about" class="nav-link px-3 lg:px-4 py-2 text-sm font-medium rounded-lg">About</a>
                    <a href="#education" class="nav-link px-3 lg:px-4 py-2 text-sm font-medium rounded-lg">Education</a>
                    <a href="#certificates" class="nav-link px-3 lg:px-4 py-2 text-sm font-medium rounded-lg">Certificates</a>
                    <a href="#projects" class="nav-link px-3 lg:px-4 py-2 text-sm font-medium rounded-lg">Projects</a>
                    <a href="#github" class="nav-link px-3 lg:px-4 py-2 text-sm font-medium rounded-lg">GitHub</a>
                    <button id="theme-toggle" type="button" class="ml-2 p-2 rounded-lg text-mist-300 dark:text-mist-300 text-light-700 hover:text-glow-400 hover:bg-night-700/50 dark:hover:bg-night-700/50 hover:bg-light-200/70 transition" aria-label="Toggle theme">
                        <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden dark:block" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                        <svg id="theme-toggle-light-icon" class="w-5 h-5 block dark:hidden" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </button>
                    <a href="mailto:{{ $email ?? 'your.email@example.com' }}" class="ml-2 px-4 sm:px-5 py-2 text-sm font-semibold text-night-900 bg-gradient-to-r from-glow-400 to-glow-500 rounded-full hover:brightness-110 hover:shadow-[0_8px_24px_-6px_rgba(38,198,218,0.7)] transition-all active:scale-95">
                        Contact Me
                    </a>
                </div>

                {{-- Mobile Menu Button --}}
                <div class="md:hidden flex items-center gap-1">
                    <button id="theme-toggle-mobile" type="button" class="p-2 rounded-lg text-mist-300 dark:text-mist-300 text-light-700 hover:text-glow-400 hover:bg-night-700/50 dark:hover:bg-night-700/50 hover:bg-light-200/70 transition" aria-label="Toggle theme">
                        <svg class="w-5 h-5 hidden dark:block" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                        <svg class="w-5 h-5 block dark:hidden" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </button>
                    <button id="mobile-menu-btn" class="p-2 rounded-lg text-mist-300 dark:text-mist-300 text-light-700 hover:text-glow-400 hover:bg-night-700/50 dark:hover:bg-night-700/50 hover:bg-light-200/70 transition" aria-label="Toggle menu" aria-controls="mobile-menu" aria-expanded="false">
                        <svg id="menu-icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Mobile Nav --}}
            <div id="mobile-menu" class="mobile-menu md:hidden">
                <div class="py-3 space-y-1 border-t border-glow-500/10">
                    <a href="#home" class="mobile-nav-link block px-4 py-2.5 text-sm font-medium text-mist-300 hover:text-glow-400 rounded-lg hover:bg-night-700/40 transition-all">Home</a>
                    <a href="#about" class="mobile-nav-link block px-4 py-2.5 text-sm font-medium text-mist-300 hover:text-glow-400 rounded-lg hover:bg-night-700/40 transition-all">About</a>
                    <a href="#education" class="mobile-nav-link block px-4 py-2.5 text-sm font-medium text-mist-300 hover:text-glow-400 rounded-lg hover:bg-night-700/40 transition-all">Education</a>
                    <a href="#certificates" class="mobile-nav-link block px-4 py-2.5 text-sm font-medium text-mist-300 hover:text-glow-400 rounded-lg hover:bg-night-700/40 transition-all">Certificates</a>
                    <a href="#projects" class="mobile-nav-link block px-4 py-2.5 text-sm font-medium text-mist-300 hover:text-glow-400 rounded-lg hover:bg-night-700/40 transition-all">Projects</a>
                    <a href="#github" class="mobile-nav-link block px-4 py-2.5 text-sm font-medium text-mist-300 hover:text-glow-400 rounded-lg hover:bg-night-700/40 transition-all">GitHub</a>
                    <div class="px-4 pt-2">
                        <a href="mailto:{{ $email ?? 'your.email@example.com' }}" class="block text-center px-5 py-2.5 text-sm font-semibold text-night-900 bg-gradient-to-r from-glow-400 to-glow-500 rounded-full transition-all">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main id="main-content" tabindex="-1" class="pt-24 sm:pt-28">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="relative mt-4 border-t border-glow-500/10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="text-center md:text-left">
                    <p class="text-lg font-bold gradient-text mb-1">{{ $name ?? '[Your Name]' }}</p>
                    <p class="text-sm text-mist-400">BSIT 4 &middot; Full-Stack Developer &middot; Built with Laravel</p>
                </div>
                <div class="flex items-center gap-3">
                    @if ($github ?? null)
                        <a href="{{ $github }}" target="_blank" rel="noopener noreferrer" class="p-2.5 rounded-xl bg-night-800/70 border border-glow-500/10 hover:border-glow-500/40 hover:text-glow-400 transition-all" aria-label="GitHub">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                    @endif
                    @if ($email ?? null)
                        <a href="mailto:{{ $email }}" class="p-2.5 rounded-xl bg-night-800/70 border border-glow-500/10 hover:border-glow-500/40 hover:text-glow-400 transition-all" aria-label="Email">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </a>
                    @endif
                </div>
            </div>
            <div class="border-t border-glow-500/10 mt-8 pt-6 text-center text-xs text-mist-500">
                &copy; {{ date('Y') }} {{ $name ?? '[Your Name]' }}. All rights reserved.
            </div>
        </div>
    </footer>

    <div id="toast" class="toast" role="status" aria-live="polite"></div>

    <button id="back-to-top" type="button" class="back-to-top" aria-label="Back to top" title="Back to top" hidden>
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
        </svg>
    </button>

</body>
</html>
