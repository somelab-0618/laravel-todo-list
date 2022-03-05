<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $selected = $request->selected;

        if ($selected === '0') {
            $todos = Todo::where('is_done', 0)->get();
        } elseif($selected === '1') {
            $todos = Todo::where('is_done', 1)->get();
        } else {
            $todos = Todo::all();
        }

        return view('todos.index', compact('todos', 'selected'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TodoRequest $request)
    {
        $comment = $request->comment;

        $todo = new Todo();
        $todo->comment = $comment;
        $todo->save();

        return redirect()->route('todo.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->update(['is_done' => $todo->is_done === 0 ? 1 : 0]);
        return redirect()->route('todo.index', $request->selected);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->route('todo.index', $request->selected);
    }
}
