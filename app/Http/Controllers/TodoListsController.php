<?php

namespace App\Http\Controllers;
use App\TodoList;
use Illuminate\Http\Request;
use Validator;

class TodoListsController extends Controller
{
    public function index ()
    {
        $todolists = TodoList::getAllTodoListsForCurrentUser();
        return view('todolist.index', compact('todolists'));
    }

    public function create ()
    {
        TodoList::newTodoList()->save();
        return redirect()->route('todolists.index')->with('success', 'New TodoList successfully created!');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, ['title' => ['required', 'string', 'max:32']]);
    }

    public function edit(Request $request, $id)
    {
        $this->validator($request->all())->validate();
        TodoList::editTodoList($id);
        return redirect()->route('todolists.index')->with('success', 'TodoList title successfully edited!');
    }

    public function delete ($id)
    {
        TodoList::deleteTodoList($id);
        return redirect()->route('todolists.index')->with('success', "TodoList successfully deleted!");
    }
}
