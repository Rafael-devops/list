<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="h-auto w-auto bg-white rounded-lg p-4 shadow-2xl">
        @if (!$this->list->count() == 0)
            <div class="flex justify-between">
                <p class="text-xl font-bold mt-2 text-[#063c76]">Todo List</p>
                <livewire:todo.create />
            </div>
        @endif

        @if ($this->list->count() == 0)
            <div class="flex justify-between">
                <div class="mt-10 mb-10">
                    <x-svg.empty />
                </div>

                <div class="mr-48 ml-32  mt-32">
                    <div class="flex  justify-center mt-8 mr font-semibold text-3xl">Tudo limpo por aqui</div>
                    <span class="flex  justify-center mt-2 ml-2 font-normal text-xl">Que tal criar uma tarefa ?</span>

                    {{-- <div class="flex  justify-center mt-8 mb-4 font-semibold text-lg">
                        <livewire:todo.create />
                    </div> --}}
                </div>
            </div>
        @else
            @foreach ($this->todos as $todo)
                <ul class="my-4 ">
                    <li class=" mt-4" id="1">
                        <div class="flex gap-2">
                            <div class="w-9/12 h-12 bg-[#e0ebff] rounded-[7px] flex justify-start items-center px-3">
                                <span id="check1"
                                    class=" w-7 h-7 bg-white rounded-full border border-white transition-all cursor-pointer hover:border-[#36d344] flex justify-center items-center"
                                    onclick="checked(1)"><i class="text-white fa fa-check"></i></span>
                                <span id="strike1"
                                    class="strike_none text-sm ml-4 text-[#5b7a9d] font-semibold">{{ $todo->assignment }}</span>
                            </div>

                            <div class="justify-center ml-8">
                                <livewire:todo.edit :list="$todo" />
                                <livewire:todo.delete :list="$todo">
                            </div>
                        </div>
                    </li>
                </ul>
            @endforeach
        @endif
    </div>
</div>
