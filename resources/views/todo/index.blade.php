@extends('layouts.index')

@section('title', 'Todo App')
@section('header', 'Todo Application Using Repository Pattern')

@section('content')
    <h3>
        <x-alert />
    </h3>
    @include('todo.create')
    @include('todo.list')
@endsection
