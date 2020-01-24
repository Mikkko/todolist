<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Task;

class TasksController extends Controller
{
    public function create (Request $request, $id)
    {
        $this->validator($request->all())->validate();
        Task::NewTask($id)->save();
        return redirect()->route('todolists.index')->with('success', 'New task successfully created!');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, ['title' => ['required', 'string', 'max:16']]);
    }

    public function delete ($id)
    {
        Task::deleteTask($id);
        return redirect()->route('todolists.index')->with('success', "Task $id successfully deleted!");
    }
}
