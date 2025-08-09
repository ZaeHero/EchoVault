<x-layouts.app :title="__('EchoVault | New Echo')">
    <div class="flex flex-col gap-4 overflow-hidden">
        <!--Export-->
        <div class="w-full flex justify-start">
            <flux:button class="hover:cursor-pointer w-30" variant="primary" icon="arrow-down-on-square" label="Export"> Save </flux:button>
        </div>
        <!-- Audio Upload / Title / Images & Files upload -->
        <div class="w-full flex flex-row gap-4 items-top">
            <!-- Audio Record -->
            <div class="flex flex-col w-30 gap-4 items-center justify-center">
                <!-- record audio -->
                <div class="w-30 h-24">
                    <flux:button class="hover:cursor-pointer w-full h-full" variant="primary" icon="microphone" />
                </div>
                <!-- Audio Upload -->
                <div class="w-full">
                    <flux:input type="file" wire:model="audio" label="Audio File"/>
                </div>
                
            </div>
            <!--Title -->
            <div class="flex flex-col gap-4 w-full">
                <div class="w-full flex flex-row items-top gap-4">
                    <flux:input type="text" wire:model="title" placeholder="ex: My New Echo"/>
                    <!-- Images / file upload -->
                    <div class="h-fit flex flex-row gap-4">
                    <!-- Images Upload -->
                    <flux:input type="file" wire:model="images" multiple/>
                    <!-- Files Upload -->
                    <flux:input type="file" wire:model="files" multiple/>
                    </div>
                </div>
                <audio controls class="w-full">
                    <source src="" type="audio/mpeg">
                </audio>
            </div>
            
        </div>

        <!-- Summary / Notes -->
        <div class="w-full flex flex-col gap-4">
            <flux:field>
                <div class="flex justify-between items-center">
                    <flux:label>Summary</flux:label>
                    <flux:button variant="filled" size="sm" label="Edit">Edit </flux:button>
                </div>
                <flux:editor wire:model="content" disabled />
            </flux:field>
            <flux:field>
                <div class="flex justify-between items-center">
                    <flux:label>Notes</flux:label>
                    <flux:button variant="filled" size="sm" label="Edit">Edit </flux:button>
                </div>
                <flux:editor wire:model="notes" disabled />
            </flux:field>
        </div>

        <!-- Images -->
        <div class="w-full flex flex-col gap-4">
            <flux:field>
                <flux:label>Images</flux:label>
                <div class="size-36 rounded-xl bg-gray-200">

                </div>
                {{-- <div class="flex flex-wrap gap-2">
                    @foreach($images as $image)
                        <img src="{{ $image->temporaryUrl() }}" alt="Image" class="w-24 h-24 object-cover rounded-lg" />
                    @endforeach
                </div> --}}
            </flux:field>
        </div>
        
        <!-- Files -->
        <div class="w-full flex flex-col gap-4">
            <flux:field>
                <flux:label>Files</flux:label>
                <div class="w-full h-12 rounded-xl bg-gray-200">

                </div>
                {{-- <div class="flex flex-wrap gap-2">
                    @foreach($files as $file)
                        <div class="w-24 h-24 bg-gray-300 rounded-lg flex items-center justify-center">
                            <span class="text-sm">{{ $file->getClientOriginalName() }}</span>
                        </div>
                    @endforeach
                </div> --}}
            </flux:field>
        </div>
    </div>


</x-layouts.app>