<?php

namespace App\Repositories;

use App\Models\Todo;

class TodoRepository
{

    protected $todo;

    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function getAll()
    {
        return $this->todo->orderBy('completed')->get();
    }

    public function addTodo($data)
    {
        $todo = new $this->todo;
        $todo->title = $data["title"];
        $todo->save();
        return $todo->fresh();
    }

    public function findById($id)
    {
        return $this->todo->where("id", $id)->get()[0];
    }

    public function updateTodo($data)
    {
        $todo = $this->todo->find($data["id"]);
        $todo->title = $data["title"];
        $todo->update();
        return $todo;
    }

    public function deleteTodo($id)
    {
        $todo = $this->todo->find($id);
        $todo->delete();
        return $todo;
    }

    public function changeStatus($id)
    {
        $todo = $this->todo->find($id);
        $todo->completed = !$todo->completed;
        $todo->update();
        return $todo;
    }
}
