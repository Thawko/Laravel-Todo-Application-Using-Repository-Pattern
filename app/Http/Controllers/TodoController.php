<?php

namespace App\Http\Controllers;

use App\Repositories\TodoRepository;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    protected $todoRepository;

    public function __construct(TodoRepository $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    public function index()
    {
        $todos = $this->todoRepository->getAll();
        return view('todo.index', ['todos' => $todos]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:128'
        ]);
        $data = $request->only(['title']);
        $this->todoRepository->addTodo($data);
        return redirect()->back()->with('success', 'TODO created!');
    }

    public function edit($id)
    {
        $todo = $this->todoRepository->findById($id);
        return view('todo.edit', ['todo' => $todo]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:128'
        ]);
        $data = $request->only(['title']);
        $data['id'] = $id;
        $this->todoRepository->updateTodo($data);
        return redirect()->route('todo_index')->with('success', 'TODO updated!');
    }

    public function changeStatus($id)
    {
        $todo = $this->todoRepository->changeStatus($id);
        return redirect()->route('todo_index')->with('success', '"' . $todo->title . '" marked as ' . ($todo->completed ? 'complete' : 'incomplete') . '!');
    }

    public function destroy($id)
    {
        $todo = $this->todoRepository->deleteTodo($id);
        return redirect()->route('todo_index')->with('success', '"' . $todo->title . '" deleted!');
    }
}
