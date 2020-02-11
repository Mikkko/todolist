<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Task;
use Carbon\Carbon;

class TasksController extends Controller
{
    public function create (Request $request, $id)
    {
        $this->createTaskValidator($request->all())->validate();
        Task::newTask($id)->save();
        return redirect()->route('todolists.index')->with('success', 'New task successfully created!');
    }

    protected function createTaskValidator(array $data)
    {
        return Validator::make($data, ['title' => ['required', 'string', 'max:16']]);
    }

    protected function editDeadlineValidator(array $data)
    {
        $before = Carbon::now()->addMonth()->format('Y-m-d');
        return Validator::make($data, ['deadline' => ['required', 'date', 'after:today', "before:$before"]]);
    }

    public function edit (Request $request, $id)
    {
        $deadline = $request['deadline'];
        $this->editDeadlineValidator($request->all())->validate();
        Task::editTask($id);
        return redirect()->route('todolists.index')->with('success', "Deadline successfully set on $deadline!");
    }

    public function delete ($id)
    {
        Task::deleteTask($id);
        return redirect()->route('todolists.index')->with('success', "Task successfully deleted!");
    }
}
