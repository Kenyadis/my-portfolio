@props(['title'])

<div class="mb-10">
    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 relative inline-block pb-3">
        {{ $title }}
        <span class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-primary-500 to-primary-300 rounded-full"></span>
    </h2>
</div>
