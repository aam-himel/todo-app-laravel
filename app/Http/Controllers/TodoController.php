<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(){
		$items = Todo::all();
		//dd($items);
		return view('todos.index', compact('items'));
	}
	public function create(){
		return view('todos.create');
	}
	
	public function store(Request $request){
        
		$request->validate([
			'title' => 'required',
			'content' => 'required',
		]);

        $newtodo = new Todo();
        $newtodo->title = $request->title;
        $newtodo->content = $request->content;
        $newtodo->save();
		return redirect()->route('todos');
	}

    public function show($id){
        $todoItem = Todo::find($id);

        return view('todos.show', compact('todoItem'));      ;
    }

    public function edit($id){
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $oldTodo = Todo::find($id);

        $oldTodo->title = $request->title;
        $oldTodo->content = $request->content;
        $oldTodo->save();

        return redirect()->route('todos')->with('message', 'Updated successfully!');
    }

    public function destroy($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('todos')->with('message', 'Item deleted successfully!');
    }
	
}




