<div>
    <x-button icon="pencil-alt" class="text-blue-600 h-9 w-9 border border-transparent hover:bg-blue-100" wire:click="$toggle('opened')" rounded></x-button>

    <x-modal wire:model.defer="opened">
        <x-card>
            <x-slot name="title">
                Edit Assigment
            </x-slot>

            <x-input placeholder="assigment" wire:model='list.assignment' />

            <x-slot name="footer">
                <div class="flex justify-between items-center">
                    <x-button label="Cancel" flat negative x-on:click="close"/>
                    <x-button label="Edit" primary  wire:click='update'/>
                </div>
            </x-slot>
        </x-card>
    </x-modal>
</div>
