{{-- <x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar> --}}

<x-layouts.app.header class="2xl:mx-72" :title="$title ?? null">
    <flux:main class="">
        {{ $slot }}
    </flux:main>
</x-layouts.app.header>
