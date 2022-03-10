<h2>All Tasks</h2>
<ul class="list-group">
    @foreach ($todos as $todo)
        <li class="list-group-item text-dark {{ $todo->completed ? 'bg-success' : 'bg-warning' }}">
            <div class="row">
                <div class="col-9">{{ $todo->title }}</div>
                <div class="col-1"><a class="text-dark"
                        href="{{ route('todo_completed', ['id' => $todo->id]) }}"><i
                            class="fa {{ $todo->completed ? 'fa-close' : 'fa-check' }}"></i></a>
                </div>
                <div class="col-1"><a class="text-dark"
                        href="{{ route('todo_edit', ['id' => $todo->id]) }}"><i class="fa fa-edit"></i></a></div>
                <div class="col-1"><a class="text-dark"
                        href="{{ route('todo_destroy', ['id' => $todo->id]) }}"> <i class="fa fa-trash"></i></a>
                </div>
            </div>
        </li>
    @endforeach
</ul>
