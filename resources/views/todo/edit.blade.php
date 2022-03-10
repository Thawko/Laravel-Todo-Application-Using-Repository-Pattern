@extends('layouts.index')

@section('title', 'Todo App')
@section('header', 'Todo Application Using Repository Pattern Edit Page')

@section('content')
    <div class="add-items d-flex justify-content-center">
        <form action="{{ route('todo_update', ['id' => $todo->id]) }}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-auto">
                    <input type="text" class="form-control" id="title" name="title" value="{{ $todo->title }}">
                </div>
                <div class="col-auto">
                    <button type="submit" class="add btn btn-primary font-weight-bold">
                        <i class="fa fa-refresh"></i> Edit
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
