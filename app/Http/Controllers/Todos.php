<?php

namespace App\Http\Controllers;

use Session;
use App\todo;
use Illuminate\Http\Request;

class Todos extends Controller
{
    public function index(){

        $todos = todo::all();
        return view('todo')->with('todo', $todos);
    }

    public function store(Request $request)
    {
        $todo = new todo;
        $todo->todo = $request->todo;
        
        $todo->save();
        Session::flash('success','your todo was created');
        return redirect()->back();
    }

    public function delete($id)
    {
        $todo =Todo::find($id);
        $todo->delete();

        Session::flash('success','your todo was deleted');
        return redirect()->back();

    }


    public function update($id)
    {
        $todo =Todo::find($id);

        
    
        return view('update')-> with('todo' , $todo);

    }

    public function save(request $req,$id)
    {
        $todo =Todo::find($id);
        $todo->todo= $req->todo;
        $todo->save();


        Session::flash('success','your todo was updated');
        return redirect()->back();

    }

    public function completed($id)
    {
        $todo =Todo::find($id);
        $todo->completed= 1;
        $todo->save();

        Session::flash('success','your todo was mark as completed');
        return redirect()->back();

    }
}?>

