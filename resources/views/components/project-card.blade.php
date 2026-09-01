@props(['title', 'description' => null, 'link' => null, 'technologies' => []])

<div class="group glass-panel card-hover p-6 relative overflow-hidden">
    {{-- Corner accents --}}
    <span class="corner-accent top-left"></span>
    <span class="corner-accent top-right"></span>
    <span class="corner-accent bottom-left"></span>
    <span class="corner-accent bottom-right"></span>

    {{-- Project Icon --}}
    <div class="w-11 h-11 rounded-xl bg-glow-500/10 border border-glow-500/20 flex items-center justify-center mb-4 transition-colors group-hover:bg-glow-500/20 group-hover:border-glow-500/40">
        <svg class="w-5 h-5 text-glow-400 drop-shadow-[0_0_6px_rgba(77,208,225,0.6)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
        </svg>
    </div>

    {{-- Title --}}
    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-glow-400 transition-colors">{{ $title }}</h3>

    {{-- Description --}}
    @if ($description)
        <p class="text-mist-400 text-sm leading-relaxed mb-4">{{ $description }}</p>
    @endif

    {{-- Technologies --}}
    @if (!empty($technologies))
        <div class="flex flex-wrap gap-2 mb-5">
            @foreach ($technologies as $tech)
                <span class="tech-badge text-xs font-medium bg-night-700/60 border border-glow-500/10 text-mist-300 px-2.5 py-1 rounded-full">{{ $tech }}</span>
            @endforeach
        </div>
    @endif

    {{-- Link --}}
    @if ($link)
        <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"
           class="inline-flex items-center gap-1.5 text-sm font-semibold text-glow-400 hover:text-glow-500 transition-colors">
            View Repository
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    @endif
</div>
