<x-layouts.portfolio :title="'Ken Denver Castillo — Portfolio'" :name="'Ken Denver B. Castillo'" :email="'kbernardez83@gmail.com'" :github="'https://github.com/Kenyadis'">

    {{-- ============================================= --}}
    {{-- HERO                                          --}}
    {{-- ============================================= --}}
    <section id="home" class="relative overflow-hidden hero-bg-fade">
        {{-- Constellation backdrop --}}
        <div class="constellation faded inset-0"></div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 pb-16 sm:pt-14 sm:pb-24">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">

                {{-- Profile Image --}}
                <div class="shrink-0 hero-enter-profile">
                    <div class="relative profile-float">
                        {{-- Soft cyan aura --}}
                        <div class="profile-aura" aria-hidden="true"></div>
                        <div class="w-44 h-44 sm:w-56 sm:h-56 rounded-full bg-gradient-to-br from-glow-400 via-glow-500 to-night-700 p-[3px] profile-ring">
                            <div class="rounded-full bg-night-900 overflow-hidden w-full h-full">
                                <img src="{{ asset('image/ken-profile.jpg') }}" alt="Ken Denver B. Castillo"
                                     class="w-full h-full object-cover"
                                     onerror="this.src='https://ui-avatars.com/api/?name=Ken+Denver+B.+Castillo&size=224&background=0d1220&color=4dd0e1&bold=true'">
                            </div>
                            {{-- Light sweep around the border --}}
                            <div class="profile-light-sweep" aria-hidden="true"></div>
                        </div>
                        {{-- Slowly rotating outer ring --}}
                        <div class="profile-outer-ring" aria-hidden="true"></div>
                        {{-- Status badge --}}
                        <div class="absolute bottom-1 right-1 bg-night-800/90 backdrop-blur border border-glow-500/20 rounded-full px-3 py-1 shadow-lg flex items-center gap-1.5 text-xs font-medium text-mist-200">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 status-dot animate-pulse"></span>
                            Open to opportunities
                        </div>
                    </div>
                </div>

                {{-- Intro --}}
                <div class="text-center lg:text-left">
                    <p class="section-eyebrow hero-enter mb-3" style="animation-delay: 350ms">BSIT 4 &middot; Full-Stack Developer</p>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-3 tracking-tight hero-enter-name" style="animation-delay: 500ms">
                        Ken Denver<br class="hidden sm:block"> B. Castillo
                    </h1>
                    <p class="text-glow-400 font-medium text-base sm:text-lg mb-5 hero-enter" style="animation-delay: 700ms">
                        BSIT Student &middot; Full-Stack Developer &middot; Laravel Enthusiast
                    </p>
                    <p class="text-mist-400 text-base leading-relaxed max-w-xl mb-8 hero-enter" style="animation-delay: 850ms">
                        I break down complex problems and build them back up into elegant web solutions. Fluent in Laravel and a growing list of programming languages, I am dedicated to continuous learning and building software that makes an impact.
                    </p>

                    {{-- CTA buttons --}}
                    <div class="flex flex-col sm:flex-row items-center lg:items-start gap-3 hero-enter" style="animation-delay: 1050ms">
                        <a href="#projects" class="btn-primary">
                            Explore Portfolio
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                        <a href="https://github.com/Kenyadis" target="_blank" rel="noopener noreferrer" class="btn-ghost">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            GitHub Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section transition divider --}}
    <div class="section-divider" aria-hidden="true"></div>

    {{-- ============================================= --}}
    {{-- ABOUT / BASIC INFORMATION                     --}}
    {{-- ============================================= --}}
    <section id="about" class="py-16 sm:py-20 relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal">
                <x-section-heading title="About" eyebrow="Profile" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 stagger-children">
                {{-- Bio panel --}}
                <div class="glass-panel card-hover p-7 reveal relative overflow-hidden">
                    <span class="corner-accent top-left"></span>
                    <span class="corner-accent top-right"></span>
                    <span class="corner-accent bottom-left"></span>
                    <span class="corner-accent bottom-right"></span>
                    <div class="w-11 h-11 rounded-xl bg-glow-500/10 border border-glow-500/20 flex items-center justify-center mb-5">
                        <svg class="w-5 h-5 text-glow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3">Profile</h3>
                    <p class="text-mist-400 text-sm leading-relaxed">
                        I break down complex problems and build them back up into elegant web solutions. Fluent in Laravel and a growing list of programming languages, I am dedicated to continuous learning and building software that makes an impact.
                    </p>
                </div>

                {{-- Contact details panel --}}
                <div class="glass-panel card-hover p-7 reveal relative overflow-hidden">
                    <span class="corner-accent top-left"></span>
                    <span class="corner-accent top-right"></span>
                    <span class="corner-accent bottom-left"></span>
                    <span class="corner-accent bottom-right"></span>
                    <div class="w-11 h-11 rounded-xl bg-glow-500/10 border border-glow-500/20 flex items-center justify-center mb-5">
                        <svg class="w-5 h-5 text-glow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-4">Contact Information</h3>
                    <dl class="space-y-3 text-sm">
                        <div class="flex items-start gap-3">
                            <dt class="text-mist-500 w-20 shrink-0 pt-0.5">Name</dt>
                            <dd class="text-mist-200 font-medium">Ken Denver B. Castillo</dd>
                        </div>
                        <div class="flex items-start gap-3">
                            <dt class="text-mist-500 w-20 shrink-0 pt-0.5">Course</dt>
                            <dd class="text-mist-200 font-medium">BSIT 4</dd>
                        </div>
                        <div class="flex items-start gap-3">
                            <dt class="text-mist-500 w-20 shrink-0 pt-0.5">Email</dt>
                            <dd class="text-glow-400 break-all"><a href="mailto:kbernardez83@gmail.com" class="hover:underline">kbernardez83@gmail.com</a></dd>
                        </div>
                        <div class="flex items-start gap-3">
                            <dt class="text-mist-500 w-20 shrink-0 pt-0.5">Phone</dt>
                            <dd class="text-mist-200 font-medium">09678196809</dd>
                        </div>
                        <div class="flex items-start gap-3">
                            <dt class="text-mist-500 w-20 shrink-0 pt-0.5">Location</dt>
                            <dd class="text-mist-200 font-medium">Bangued, Abra</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================= --}}
    {{-- EDUCATION                                    --}}
    {{-- ============================================= --}}
    <div class="section-divider" aria-hidden="true"></div>
    <section id="education" class="py-16 sm:py-20 relative">
        {{-- constellation --}}
        <div class="constellation faded inset-0"></div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal">
                <x-section-heading title="Education" eyebrow="Journey" />
            </div>

            <div class="timeline-line space-y-10 pl-12 sm:pl-16" id="education-timeline">
                {{-- Junior High School --}}
                <div class="relative reveal timeline-node">
                    <div class="absolute left-[-2.35rem] sm:left-[-3.1rem] w-5 h-5 rounded-full bg-glow-500 timeline-dot border border-night-950 top-2"></div>
                    <div class="glass-panel card-hover p-6 relative overflow-hidden">
                        <span class="corner-accent top-left"></span>
                        <span class="corner-accent bottom-right"></span>
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1 mb-2">
                            <h3 class="text-lg font-bold text-white">Junior High School</h3>
                            <span class="text-xs font-semibold text-night-900 bg-gradient-to-r from-glow-400 to-glow-500 px-3 py-1 rounded-full whitespace-nowrap">2016 &ndash; 2022</span>
                        </div>
                        <p class="text-glow-400 font-medium text-sm mb-1">Abra High School</p>
                        <p class="text-mist-400 text-sm">Bangued, Abra</p>
                    </div>
                </div>

                {{-- College --}}
                <div class="relative reveal timeline-node" style="transition-delay: 100ms">
                    <div class="absolute left-[-2.35rem] sm:left-[-3.1rem] w-5 h-5 rounded-full bg-gold-400 timeline-dot border border-night-950 top-2"></div>
                    <div class="glass-panel card-hover p-6 relative overflow-hidden">
                        <span class="corner-accent top-left"></span>
                        <span class="corner-accent bottom-right"></span>
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1 mb-2">
                            <h3 class="text-lg font-bold text-white">Bachelor of Science in Information Technology</h3>
                            <span class="text-xs font-semibold text-night-900 bg-gradient-to-r from-gold-300 to-gold-500 px-3 py-1 rounded-full whitespace-nowrap">2023 &ndash; 2027</span>
                        </div>
                        <p class="text-gold-300 font-medium text-sm mb-1">Data Center College of the Philippines Bangued</p>
                        <p class="text-mist-400 text-sm">Ubbog Lipcan, Bangued, Abra</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================= --}}
    {{-- PROJECTS                                     --}}
    {{-- ============================================= --}}
    <div class="section-divider" aria-hidden="true"></div>
    <section id="projects" class="py-16 sm:py-20 relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal">
                <x-section-heading title="Projects" eyebrow="Arsenal" />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 stagger-children">
                <x-project-card
                    title="Denveay"
                    description="A project repository — Denveay."
                    :technologies="[]"
                    link="https://github.com/Kenyadis/Denveay.git"
                />

                <x-project-card
                    title="My Web"
                    description="A personal portfolio website built with Laravel — this project."
                    :technologies="[]"
                    link="https://github.com/Kenyadis/my-portfolio.git"
                />
            </div>
        </div>
    </section>

    {{-- ============================================= --}}
    {{-- GITHUB REPOSITORIES                           --}}
    {{-- ============================================= --}}
    <div class="section-divider" aria-hidden="true"></div>
    <section id="github" class="py-16 sm:py-20 relative">
        <div class="constellation faded inset-0"></div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="reveal">
                <x-section-heading title="GitHub" eyebrow="Code Archive" />
            </div>

            {{-- GitHub identity banner --}}
            <div class="glass-panel p-6 mb-8 flex flex-col sm:flex-row items-center justify-between gap-5 reveal">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-night-800 border border-glow-500/20 flex items-center justify-center">
                        <svg class="w-6 h-6 text-glow-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </div>
                    <div>
                        <p class="text-white font-bold">Kenyadis</p>
                        <p class="text-mist-400 text-xs">BSIT 4 &middot; Full-Stack Developer</p>
                    </div>
                </div>
                <a href="https://github.com/Kenyadis" target="_blank" rel="noopener noreferrer" class="btn-ghost shrink-0">
                    View GitHub Profile
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 stagger-children">
                {{-- Repo 1 --}}
                <a href="https://github.com/Kenyadis/Denveay.git" target="_blank" rel="noopener noreferrer"
                   class="github-card group glass-panel card-hover flex items-start gap-4 p-5">
                    <div class="w-10 h-10 rounded-xl bg-night-800 border border-glow-500/20 flex items-center justify-center shrink-0 group-hover:border-glow-500/50 transition-colors">
                        <svg class="w-5 h-5 text-glow-400" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="min-w-0">
                        <p class="font-bold text-white group-hover:text-glow-400 transition-colors">Denveay</p>
                        <p class="text-mist-500 text-xs mt-0.5 truncate">github.com/Kenyadis/Denveay</p>
                    </div>
                    <svg class="w-4 h-4 text-mist-500 group-hover:text-glow-400 shrink-0 mt-1 ml-auto group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </a>

                {{-- Repo 2 --}}
                <a href="https://github.com/Kenyadis/my-portfolio.git" target="_blank" rel="noopener noreferrer"
                   class="github-card group glass-panel card-hover flex items-start gap-4 p-5">
                    <div class="w-10 h-10 rounded-xl bg-night-800 border border-glow-500/20 flex items-center justify-center shrink-0 group-hover:border-glow-500/50 transition-colors">
                        <svg class="w-5 h-5 text-glow-400" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="min-w-0">
                        <p class="font-bold text-white group-hover:text-glow-400 transition-colors">my-portfolio</p>
                        <p class="text-mist-500 text-xs mt-0.5 truncate">github.com/Kenyadis/my-portfolio</p>
                    </div>
                    <svg class="w-4 h-4 text-mist-500 group-hover:text-glow-400 shrink-0 mt-1 ml-auto group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </a>

                {{-- More repos --}}
                <a href="https://github.com/Kenyadis?tab=repositories" target="_blank" rel="noopener noreferrer"
                   class="github-card group glass-panel card-hover flex items-start gap-4 p-5 sm:col-span-2">
                    <div class="w-10 h-10 rounded-xl bg-glow-500/10 border border-glow-500/20 flex items-center justify-center shrink-0 group-hover:bg-glow-500/20 transition-colors">
                        <svg class="w-5 h-5 text-glow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                    </div>
                    <div class="min-w-0">
                        <p class="font-bold text-glow-400 group-hover:text-glow-500 transition-colors">More Repositories...</p>
                        <p class="text-mist-400 text-xs mt-0.5">View all public repositories on GitHub</p>
                    </div>
                    <svg class="w-4 h-4 text-glow-500/50 group-hover:text-glow-400 shrink-0 mt-1 ml-auto group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

</x-layouts.portfolio>
