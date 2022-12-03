@if (!$this->list->count() == 0)
    <header class="bg-white shadow-sm">
        <div class="flex justify-between mx-auto max-w-7xl py-4 px-4 sm:px-6 lg:px-8">
            <h1 class="text-lg font-semibold leading-6 text-gray-900 mt-1">Tasks</h1>

            <div>
                <livewire:todo.create />
            </div>
        </div>
    </header>
@endif
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="h-auto w-3/4 bg-white rounded-lg p-4 shadow-2xl">
        @if ($this->list->count() == 0)
            <div class="flex justify-between">
                <div class="mt-10 mb-10">
                    <x-svg.empty />
                </div>

                <div class="mr-48 ml-32  mt-32">
                    <div class="flex  justify-center mt-8 mr font-semibold text-3xl">Tudo limpo por aqui</div>
                    <span class="flex  justify-center mt-2 ml-2 font-normal text-xl">Que tal criar uma tarefa ?</span>

                    <div class="flex  justify-center mt-8 mb-4 font-semibold text-lg">
                        <livewire:todo.create />
                    </div>
                </div>
            </div>
        @else
            @foreach ($this->todos as $todo)
                <ul role="list" class=" sm:grid-cols-2 lg:grid-cols-3 mt-3 mb-6">
                    <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow-lg">
                        <div class="flex w-full items-center justify-between space-x-6 p-6">
                            <div class="flex-1 truncate">
                                <div class="flex items-center space-x-3">
                                    <h3 class="truncate text-lg font-medium text-gray-900">{{ $todo->title }}</h3>
                                    <span
                                        class="inline-block flex-shrink-0 rounded-full bg-green-100 px-2 py-0.5 text-xs font-medium text-green-800">{{ $todo->status }}</span>
                                </div>
                                <p class="mt-1 truncate text-md text-gray-500">{{ $todo->assignment }}</p>
                            </div>

                            <div class="flex justify-between">
                                <livewire:todo.edit :list="$todo" />
                                <livewire:todo.delete :list="$todo">
                            </div>
                        </div>
                    </li>
                    <!-- More people... -->
                </ul>
            @endforeach

            {{ $this->todos->links() }}
        @endif
    </div>
</div>
