<div class="m-4">
    <div class="d-flex flex-row ">
        <input type="text" wire:model="todoText" wire:keydown.enter="addTodo" placeholder="Type and hit enter" 
        class="form-control flex-1 "
        >
        <button
            class="btn btn-outline-primary pill mx-2"
            wire:click="addTodo"
        >Add
        </button>
    </div>

    <div class="py-6">
        @if (count($todos) == 0)
            <p class="mt-4 text-center">There are no todos</p>
        @endif
        @foreach($todos as $index => $todo)
            <div class="my-3">
                <input type="checkbox" class="form-check-input mr-4"  {{$todo->completed ? ' checked' : ''}} wire:change="toggleTodo({{$todo->id}})">
                <label class=" fnt text-secondary text-capitalize {{$todo->completed ? 'text-decoration-line-through' : ''}}">{{$todo->todo}}</label>
                <button wire:click="deleteTodo({{$todo->id}})"
                class=" btn btn-outline-danger pill float-end mx-2"
                >
                <i class="bi bi-trash3"></i>
                </button>
            </div>
        @endforeach
    </div>
</div>
