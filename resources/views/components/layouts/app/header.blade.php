<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
        @livewireStyles
    
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800 flex flex-col 2xl:mx-72">
        <flux:header class="">
            <div class="w-full flex flex-row items-center sticky top-0 z-10 bg-white dark:bg-zinc-950/50 rounded-xl p-5 mt-5 border border-amber-500/30">
                <!-- Link Home -->
                <div class="w-full">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2" wire:navigate>
                        <!-- Logo -->
                        <div>

                        </div>
                        <!-- Text -->
                        <div>
                            <span class="text-lg font-semibold">EchoVault</span>
                        </div>
                    </a>
                </div>
                <!-- Navigation -->
                <div>

                </div>
                <!-- User Menu -->
                <div>
                    <flux:dropdown position="top" align="end">
                        <flux:profile class="cursor-pointer" :initials="auth()->user()->initials()" />
                        <flux:menu>
                            <flux:menu.radio.group>
                                <div class="p-0 text-sm font-normal">
                                    <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                        <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                            <span class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                                {{ auth()->user()->initials() }}
                                            </span>
                                        </span>
                                        <div class="grid flex-1 text-start text-sm leading-tight">
                                            <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                            <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                        </div>
                                    </div>
                                </div>
                            </flux:menu.radio.group>
                            <flux:menu.separator />
                            <flux:menu.radio.group>
                                <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>Settings</flux:menu.item>
                            </flux:menu.radio.group>
                            <flux:menu.separator />
                            <form method="POST" action="{{ route('logout') }}" class="w-full">
                                @csrf
                                <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                                    Log Out
                                </flux:menu.item>
                            </form>
                        </flux:menu>
                    </flux:dropdown>
                </div>
            </div>
        </flux:header>

         {{ $slot }}   

        @fluxScripts
        @livewireScripts
    </body>
    @include('components.layouts.app.footer')
</html>
