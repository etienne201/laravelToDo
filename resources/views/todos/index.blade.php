@extends('layouts.app')
@section('title', 'All todos')

@section('content')
    <div class="container">
        <div class="row pt-3 justify-content-center" style="margin: 40px 0;">
            <div class="card" style="width: 100%">
                <h1 class="card-header text-center" style="background-color: #004bea; color: #fff;">All Todos</h1>
                <!-- if this session has flash message with 'success' key -->
                @if ( session()->has('success'))
                    <div class="alert alert-success">
                        <!-- get the value (message) for this key  -->
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="card-body">
                    <h5 class="card-name" style="color: #004bea;">What needs to be done</h5>
                    <ul class="list-group">
                        @forelse ( $todos as $todo )
                        <li class="list-group-item" style="color: #004bea;">
                            {{ $todo->name }}
                            <span class="float-right">
                                <a href="/todos/{{$todo->id}}">
                                    <i  style="color: #004bea;" class="fa fa-eye"></i>
                                </a>
                                <a href="/todos/{{$todo->id}}/edit">
                                    <i  style="color: #004bea;" class="fa fa-edit"></i>
                                </a>
                                <a href="/todos/{{$todo->id}}/delete">
                                    <i  style="color: #004bea;" class="fa fa-times-circle"></i>
                                </a>
                                @if ($todo->completed == false)
                                    <a href="/todos/{{$todo->id}}/complete">
                                        <i  style="color: #004bea;" class="fa fa-check-circle"></i>
                                    </a>
                                @endif
                            </span>
                        </li>    
                        @empty
                            <p class="text-center" style="color: #004bea;">No todos available.</p>
                        @endforelse
                    </ul>
                    <a href="{{ url('/create') }}" class="btn btn-primary  mt-3"  style="background-color: #004bea; border: none;"><i class="fa fa-plus"></i> Add a todo</a>
                </div>
            </div>
        </div>
    </div>
@endsection