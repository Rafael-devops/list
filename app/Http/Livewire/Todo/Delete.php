<?php

namespace App\Http\Livewire\Todo;

use App\Models\Todo;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class Delete extends Component
{
    use Actions;
    use WithPagination;

    public $opened = false;

    public Todo $list;

    public function destroy(): void
    {
        $this->list->delete();

        $this->notification()->success('assignment deleted successfully!');

        $this->redirect(route('index'));
    }

    public function render(): View
    {
        return view('livewire.todo.delete');
    }
}
