<div>
    <x-button icon="trash" class="text-red-600 h-9 w-9 border border-transparent hover:bg-red-100" wire:click="$toggle('opened')" rounded></x-button>

    <x-modal wire:model.defer="opened">
        <x-card>
            <x-slot name="title">
                Are you sure about that ?
            </x-slot>

            <div class="">
                Do you want to remove this task
                <span class="text-black font-semibold">{{$this->list->assignment}}?</span>
            </div>

            <x-slot name="footer">
                <div class="flex justify-end items-center">
                    <x-button label="Cancel" flat  x-on:click="close"/>
                    <x-button label="Delete" red  wire:click="destroy"/>
                </div>
            </x-slot>
        </x-card>
    </x-modal>
</div>
