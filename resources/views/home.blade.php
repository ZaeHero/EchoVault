<x-layouts.app :title="__('EchoVault | Home')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl items-center">   
        <div class="container flex flex-col gap-4">
            <!-- Search input / Filter / New -->
            <div class="flex items-center justify-between gap-4">
                <!-- Search input / Filter -->
                <div class="flex flex-row gap-4 w-2/3">
                    <flux:input
                    type="search"
                    placeholder="{{ __('Search...') }}"
                    class="flex-1"
                    icon="magnifying-glass"
                    />
                    <flux:modal.trigger name="filter" >
                        <flux:button class="!px-4 hover:cursor-pointer size-10" icon="funnel" label="__('Filter')" />
                    </flux:modal.trigger>
                    @include('components.layouts.homepage.filter-pop-up')
                </div>
                <!-- New -->
                <div class="flex-none">
                    <flux:button href="{{ route('new-echo') }}" class="!px-4 hover:cursor-pointer" variant="primary" icon="plus" > {{ __('New Echo') }}</flux:button>
                </div>
            </div>
            <!-- Echoes List -->
            <div class="w-full">
                <flux:table>
                <flux:table.columns>
                    <flux:table.column class="strong">Title</flux:table.column>
                    <flux:table.column class="strong flex justify-end">Audio Duration</flux:table.column>
                    <flux:table.column class="strong">Summary</flux:table.column>
                    <flux:table.column class="strong">Tags</flux:table.column>
                    <flux:table.column class="strong flex justify-end">Actions</flux:table.column>
                </flux:table.columns>\

                <flux:table.rows>
                    
                        <flux:table.row class="hover:bg-amber-500/50 hover:cursor-pointer p-4" onclick="window.location='{{ route('edit-echo') }}'">
                            <flux:table.cell class="">Echo I</flux:table.cell>
                            <flux:table.cell class="flex justify-end">12:00</flux:table.cell>
                            <flux:table.cell class=""></flux:table.cell>
                            <flux:table.cell class="">
                                <flux:badge color="amber" size="sm" inset="top bottom">Demo</flux:badge>
                                <flux:badge color="amber" size="sm" inset="top bottom">New</flux:badge>
                                <flux:badge color="amber" size="sm" inset="top bottom">Urgent</flux:badge>
                            </flux:table.cell>
                            <flux:table.cell class="flex justify-end">
                                <flux:button icon="trash" variant="subtle" class="!px-2" />
                            </flux:table.cell>
                        </flux:table.row>
                    
                    

                </flux:table.rows>
            </flux:table>
            </div>
        </div>
    </div>
    
</x-layouts.app>
