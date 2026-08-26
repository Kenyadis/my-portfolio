@props(['title', 'description', 'link' => null, 'technologies' => []])

<div class="group bg-white rounded-2xl shadow-sm border border-gray-100 p-6 card-hover">
    {{-- Project Icon --}}
    <div class="w-10 h-10 rounded-xl bg-primary-50 flex items-center justify-center mb-4 group-hover:bg-primary-100 transition-colors">
        <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
        </svg>
    </div>

    {{-- Title --}}
    <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-primary-600 transition-colors">{{ $title }}</h3>

    {{-- Description --}}
    <p class="text-gray-500 text-sm leading-relaxed mb-4">{{ $description }}</p>

    {{-- Technologies --}}
    @if (!empty($technologies))
        <div class="flex flex-wrap gap-2 mb-5">
            @foreach ($technologies as $tech)
                <span class="tech-badge text-xs font-medium bg-primary-50 text-primary-700 px-2.5 py-1 rounded-full">{{ $tech }}</span>
            @endforeach
        </div>
    @endif

    {{-- Link --}}
    @if ($link)
        <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"
           class="inline-flex items-center gap-1.5 text-sm font-semibold text-primary-600 hover:text-primary-700 transition-colors">
            View Project
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    @endif
</div>
