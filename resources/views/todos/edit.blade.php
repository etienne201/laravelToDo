@extends('layouts.app')
@section('name', 'Edit Todo')

@section('content')

<div class="container pt-5">

    <div class="row justify-content-center mt-5">

        <div class="col-md-6">

            <div class="cerd">

                <div class="card-header" style="background-color: #004bea;">
                    <h1 style="color: #fff;">Edit todo</h1>
                </div>

                <div class="card-body" style="background: #fff;">

                <form action="/todos/{{$todo->id}}" method="POST">
                @csrf
                    <div class="form-group">
                        <input 
                            type="text" 
                            class="form-control" name="todoname" placeholder="enter a name"
                            class="@error('todoname') is-invalid @enderror"
                            value="{{ $todo->name }}"
                            >
                            <!-- old diplays old value in input -->
                    </div>
                    @error('todoname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <textarea 
                            class="form-control" name="todoactivity" rows="3" placeholder="enter a activity"
                            class="@error('todoactivity') is-invalid @enderror"
                            value="{{ $todo->activity }}"
                        ></textarea>
                    </div>
                    @error('todoactivity')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #004bea; border: none;">Update</button>
                </form>
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>

@endsection