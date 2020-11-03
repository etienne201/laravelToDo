@extends('layouts.app')
@section('title', 'Create Todo')

@section('content')

<div class="container pt-5">

    <div class="row justify-content-center mt-5">

        <div class="col-md-6">

            <div class="cerd">

                <div class="card-header" style="background-color: #004bea;">
                    <h1 style="color: #fff;">Create a todo</h1>
                </div>

                <div class="card-body" style="background: #fff;">
                <!-- Display errors if found (method 1) -->
               <!--  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif -->
                <form action="/create" method="POST">
                @csrf
                    <div class="form-group">
                        <input 
                            type="text" 
                            class="form-control" name="todoname" placeholder="enter a name"
                            class="@error('todoname') is-invalid @enderror"
                            value="{{old('todoname')}}"
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
                            value="{{old('todoactivity')}}"
                        ></textarea>
                    </div>
                    @error('todoactivity')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #004bea; border: none;">Create</button>
                </form>
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>

@endsection