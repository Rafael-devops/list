<?php

namespace App\Http\Livewire\Todo;

use App\Enum\StatusEnum;
use App\Models\Todo;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class Create extends Component
{
    use Actions;
    use WithPagination;

    public Todo $list;

    public $opened = false;

    public function getRules(): array
    {
        return [
            'list.assignment' => ['required', 'max:255', 'min:3'],
            'list.status' => ['required', Rule::in($this->status->pluck('id'))],
            'list.title' => ['required', 'max:255', 'min:3']
        ];
    }

    public function mount(): void
    {
        $this->list = new Todo();
    }

    public function getStatusProperty(): Collection
    {
        return  collect(StatusEnum::cases())->map(fn (StatusEnum $status) => [
            'id' => $status->value,
            'name' => Str::title($status->name)
        ]);
    }

    public function store(): void
    {
        $this->validate();

        $this->list->save();

        $this->opened = false;

        $this->notification()->success('assignment created successfully!');

        $this->redirect(route('index'));
    }

    public function render(): View
    {
        return view('livewire.todo.create');
    }
}
