<div>
    <x-button info label="New Task" icon="plus" class="font-bold text-xl" wire:click="$toggle('opened')" rounded>

    </x-button>

    <x-modal.card title="Create Task" class="w-3/4" blur wire:model.defer="opened">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <x-input label="Taks" placeholder="Task" wire:model='list.assignment' />
            <x-select  label="Status Task" placeholder="Status Task" :options="$this->status"
                option-label="name" option-value="id"
                wire:model="list.status" />

            <div class="col-span-1 sm:col-span-2">
            </div>

        </div>

        <x-slot name="footer">
            <div class="flex justify-between gap-x-4">
                <x-button flat negative />

                <div class="flex">
                    <x-button flat label="Cancel" x-on:click="close" />
                    <x-button primary label="Create" wire:click='store' />
                </div>
            </div>
        </x-slot>
    </x-modal.card>
</div>
