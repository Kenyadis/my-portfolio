<x-layouts.portfolio :title="'My Portfolio'" :name="'Ken Denver Castillo'" :email="'Kbernardez@gmail.com'" :github="'https://github.com/Kenyadis'">

    {{-- ============================================= --}}
    {{-- HERO / BASIC INFORMATION                      --}}
    {{-- ============================================= --}}
    <section id="about" class="relative overflow-hidden">
        {{-- Background decoration --}}
        <div class="absolute inset-0 hero-gradient opacity-5"></div>
        <div class="absolute inset-0 dot-pattern opacity-30"></div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-20 sm:pt-20 sm:pb-24">
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16">

                {{-- Profile Image --}}
                <div class="shrink-0 animate-fade-in">
                    <div class="relative">
                        <div class="w-44 h-44 sm:w-52 sm:h-52 rounded-full bg-gradient-to-br from-primary-400 to-primary-600 p-1 profile-ring">
                            <img src="{{ asset('images/profile.jpg') }}" alt="Ken Denver Castillo"
                                 class="w-full h-full rounded-full object-cover bg-white"
                                 onerror="this.src='https://ui-avatars.com/api/?name=Ken+Denver+Castillo&size=208&background=6366f1&color=ffffff&bold=true'">
                        </div>
                        {{-- Status badge --}}
                        <div class="absolute bottom-1 right-1 bg-white rounded-full px-3 py-1 shadow-md flex items-center gap-1.5 text-xs font-medium text-gray-700">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            Open to opportunities
                        </div>
                    </div>
                </div>

                {{-- Bio + Contact --}}
                <div class="text-center lg:text-left animate-fade-in" style="animation-delay: 150ms">
                    <p class="text-primary-600 font-semibold text-sm uppercase tracking-wider mb-2">BSIT Student</p>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 mb-4 leading-tight">
                        Ken Denver<br class="hidden sm:block"> Castillo
                    </h1>
                    <p class="text-gray-500 text-lg leading-relaxed max-w-xl mb-6">
                        Hallo! I am a passionate Information Technology student eager to learn and build innovative solutions through code.
                    </p>

                    {{-- Contact details --}}
                    <div class="flex flex-col sm:flex-row flex-wrap items-center lg:items-start gap-3 sm:gap-5 text-sm text-gray-500 mb-8">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-lg bg-primary-50 flex items-center justify-center">
                                <svg class="w-4 h-4 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <a href="mailto:Kbernardez@gmail.com" class="hover:text-primary-600 transition-colors">Kbernardez@gmail.com</a>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-lg bg-primary-50 flex items-center justify-center">
                                <svg class="w-4 h-4 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <span>0967 819 6809</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-lg bg-primary-50 flex items-center justify-center">
                                <svg class="w-4 h-4 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <span>Bangued, Abra</span>
                        </div>
                    </div>

                    {{-- CTA buttons --}}
                    <div class="flex flex-col sm:flex-row items-center lg:items-start gap-3">
                        <a href="#projects" class="px-7 py-3 bg-primary-600 text-white font-semibold rounded-full hover:bg-primary-700 transition-all hover:shadow-lg hover:shadow-primary-500/25 active:scale-95 text-sm">
                            View My Work
                        </a>
                        <a href="https://github.com/Kenyadis" target="_blank" rel="noopener noreferrer" class="px-7 py-3 bg-white text-gray-700 font-semibold rounded-full border border-gray-200 hover:border-primary-300 hover:text-primary-600 transition-all active:scale-95 text-sm flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            GitHub Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================= --}}
    {{-- EDUCATIONAL BACKGROUND                        --}}
    {{-- ============================================= --}}
    <section id="education" class="py-16 sm:py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading title="Education" />

            <div class="relative timeline-line space-y-8 pl-12 sm:pl-14">
                {{-- Item 1 --}}
                <div class="relative animate-fade-in">
                    <div class="absolute left-[-1.85rem] sm:left-[-2.1rem] w-6 h-6 rounded-full bg-primary-100 border-4 border-primary-500 top-1"></div>
                    <div class="bg-surface-alt rounded-2xl p-6 border border-gray-100 hover:border-primary-200 transition-colors">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1 mb-2">
                            <h3 class="text-lg font-bold text-gray-900">Bachelor of Science in Information Technology</h3>
                            <span class="text-xs font-semibold text-primary-600 bg-primary-50 px-3 py-1 rounded-full whitespace-nowrap">2026 &ndash; 2027</span>
                        </div>
                        <p class="text-gray-600 font-medium text-sm mb-1">DATA</p>
                        <p class="text-gray-400 text-sm">[Add details about relevant coursework, honors, activities, or achievements here.]</p>
                    </div>
                </div>

                {{-- Item 2 --}}
                <div class="relative animate-fade-in" style="animation-delay: 100ms">
                    <div class="absolute left-[-1.85rem] sm:left-[-2.1rem] w-6 h-6 rounded-full bg-gray-100 border-4 border-gray-300 top-1"></div>
                    <div class="bg-surface-alt rounded-2xl p-6 border border-gray-100 hover:border-primary-200 transition-colors">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-1 mb-2">
                            <h3 class="text-lg font-bold text-gray-900">School 2</h3>
                            <span class="text-xs font-semibold text-gray-500 bg-gray-100 px-3 py-1 rounded-full whitespace-nowrap">Year &ndash; Year</span>
                        </div>
                        <p class="text-gray-600 font-medium text-sm mb-1">Degree</p>
                        <p class="text-gray-400 text-sm">[Add details about your education here.]</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================= --}}
    {{-- PROJECTS                                      --}}
    {{-- ============================================= --}}
    <section id="projects" class="py-16 sm:py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading title="Projects" />

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 stagger-children">
                <x-project-card
                    title="Project 1"
                    description="Nothing"
                    link="#"
                    :technologies="['Laravel', 'PHP', 'MySQL', 'Tailwind CSS']"
                />

                <x-project-card
                    title="[Project Name 2]"
                    description="[Describe what this project does and your role in building it.]"
                    link="#"
                    :technologies="['JavaScript', 'HTML', 'CSS']"
                />

                <x-project-card
                    title="[Project Name 3]"
                    description="[Describe what this project does and your role in building it.]"
                    link="#"
                    :technologies="['Python', 'Flask', 'SQLite']"
                />

                <x-project-card
                    title="[Project Name 4]"
                    description="[Describe what this project does and your role in building it.]"
                    link="#"
                    :technologies="['Java', 'Android Studio']"
                />
            </div>
        </div>
    </section>

    {{-- ============================================= --}}
    {{-- GITHUB REPOSITORIES                           --}}
    {{-- ============================================= --}}
    <section id="github" class="py-16 sm:py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading title="GitHub Repositories" />

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 stagger-children">
                {{-- Repo 1 --}}
                <a href="https://github.com/Kenyadis/Denveay" target="_blank" rel="noopener noreferrer"
                   class="github-card group flex items-start gap-4 bg-surface-alt rounded-2xl p-5 border border-gray-100 hover:border-primary-200 card-hover">
                    <div class="w-10 h-10 rounded-xl bg-gray-900 flex items-center justify-center shrink-0 group-hover:bg-primary-600 transition-colors">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="min-w-0">
                        <p class="font-bold text-gray-900 group-hover:text-primary-600 transition-colors">Denveay</p>
                        <p class="text-gray-400 text-xs mt-0.5 truncate">https://github.com/Kenyadis/Denveay</p>
                    </div>
                    <svg class="w-4 h-4 text-gray-300 group-hover:text-primary-400 shrink-0 mt-1 ml-auto group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </a>

                {{-- Repo 2 --}}
                <a href="https://github.com/Kenyadis" target="_blank" rel="noopener noreferrer"
                   class="github-card group flex items-start gap-4 bg-surface-alt rounded-2xl p-5 border border-gray-100 hover:border-primary-200 card-hover">
                    <div class="w-10 h-10 rounded-xl bg-gray-900 flex items-center justify-center shrink-0 group-hover:bg-primary-600 transition-colors">
                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div class="min-w-0">
                        <p class="font-bold text-gray-900 group-hover:text-primary-600 transition-colors">GitHub Profile</p>
                        <p class="text-gray-400 text-xs mt-0.5 truncate">https://github.com/Kenyadis</p>
                    </div>
                    <svg class="w-4 h-4 text-gray-300 group-hover:text-primary-400 shrink-0 mt-1 ml-auto group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </a>

                {{-- Repo 3 --}}
                <a href="https://github.com/Kenyadis?tab=repositories" target="_blank" rel="noopener noreferrer"
                   class="github-card group flex items-start gap-4 bg-surface-alt rounded-2xl p-5 border border-gray-100 border-dashed hover:border-primary-300 card-hover">
                    <div class="w-10 h-10 rounded-xl bg-primary-50 flex items-center justify-center shrink-0 group-hover:bg-primary-100 transition-colors">
                        <svg class="w-5 h-5 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </div>
                    <div class="min-w-0">
                        <p class="font-bold text-primary-600 group-hover:text-primary-700 transition-colors">More Repositories...</p>
                        <p class="text-gray-400 text-xs mt-0.5">View all public repositories on GitHub</p>
                    </div>
                    <svg class="w-4 h-4 text-primary-300 group-hover:text-primary-500 shrink-0 mt-1 ml-auto group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

</x-layouts.portfolio>
