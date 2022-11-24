<?php

namespace App\Http\Livewire\Todo;

use App\Models\Todo;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class Edit extends Component
{
    use Actions;
    use WithPagination;

    public Todo $list;

    public $opened = false;

    public function getRules(): array
    {
        return [
            'list.assignment' => 'required',
        ];
    }

    public function update(): void
    {
        $this->validate();

        $this->list->save();

        $this->notification()->success('assignment updated successfully!');

        // $this->redirect(route('index'));
    }

    public function render(): View
    {
        return view('livewire.todo.edit');
    }
}
