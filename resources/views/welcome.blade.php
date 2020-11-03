@extends('layouts.app')
@section('title', 'All todos')

@section('content')
<div class="content-container">

  <div class="container-fluid">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
      <h1>ToDo AppExam</h1>
    
      <p>
        <a class="btn btn-lg btn-primary" href="{{ url('/todos') }}" role="button">Add You Todos + &raquo;</a>
      </p>
    </div>

  </div>
</div>
    @endsection