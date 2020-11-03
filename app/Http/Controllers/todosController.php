<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo; // Trait

class todosController extends Controller
{
    public function index() {

        // get all todos
        $todos = Todo::all();

        return view('todos.index', ['todos' => $todos]);
        
    }

    // show single todo
    public function show( Todo $todo ){

        
        return view('todos.show')->with('todo', $todo); 
        
    }

    // create a todo 
    public function create( ) {

        return view('todos.create');

    }


    public function store( Request $request) {

         

        $this->validate($request, [
            'todoname' => 'required|min:4',
            'todoactivity' => 'required|max:150',
        ]);


        $todo = new Todo(); // Todo Model instance
        // name in model = name in html input
        $todo->name = $request->todoname;
        $todo->activity = $request->input('todoactivity');
        $todo->save();

        // flash message
        $request->session()->flash('success', 'Todo created successfully');

        return redirect('/todos'); // redirect to todos page after saving

    }

    // edit a todo
    public function edit( Todo $todo ) {

        // $todo = Todo::find($todo);

        return view('todos.edit')->with('todo', $todo);

    }

    // update a todo
    public function update( Request $request, Todo $todo ) {

        $this->validate($request, [
            'todoname' => 'required',
            'todoactivity' => 'required',
        ]);

        // update with form info [use input name]
        $todo->name = $request->get('todoname'); 
        $todo->activity = $request->get('todoactivity'); 

        $todo->save();

        // flash message
        $request->session()->flash('success', 'Todo updated successfully');

        return redirect('/todos');

    }

    // delete a todo
    public function destroy( Todo $todo ) {

        // $todo = Todo::find($todo); // find todo with id $todo

        $todo->delete();

        session()->flash('success', 'Todo deleted successfully');

        return redirect('/todos');

    }


    // complete a todo
    public function complete( Todo $todo ) {

        $todo->completed = true;

        $todo->save;

        session()->flash('success', 'Todo completed successfully');

        return redirect('/todos');

    }

}