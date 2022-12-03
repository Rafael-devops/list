<?php

namespace App\Http\Livewire\Todo;

use App\Enum\StatusEnum;
use App\Models\Todo;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class Index extends Component
{
    use Actions;
    use WithPagination;

    public Todo $list;

    public function mount(Todo $list)
    {
        $this->list = $list;
    }

    public function getTodosProperty(): mixed
    {
        return Todo::query()
            ->orderBy('created_at', 'desc')
            ->paginate(5);
    }

    public function edit(Todo $list)
    {
        $this->list = $list;
    }

    public function render(): View
    {
        return view('livewire.todo.index', [
            'todo' => Todo::paginate(10),
        ]);
    }
}
