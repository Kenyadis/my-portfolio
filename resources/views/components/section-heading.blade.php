@props(['title', 'eyebrow' => null])

<div class="mb-10">
    @if ($eyebrow)
        <span class="section-eyebrow mb-2 inline-flex">{{ $eyebrow }}</span>
    @endif
    <h2 class="text-2xl sm:text-3xl font-bold text-white relative inline-block pb-3">
        {{ $title }}
        <span class="absolute bottom-0 left-0 w-full h-[2px] bg-gradient-to-r from-glow-400 via-glow-500 to-transparent rounded-full shadow-[0_0_10px_rgba(77,208,225,0.5)]"></span>
    </h2>
</div>
