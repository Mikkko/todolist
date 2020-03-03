<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Task;
use Carbon\Carbon;
use Session;

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
        return Validator::make($data, ['title' => ['required', 'string']]);
    }

    protected function editDeadlineValidator(array $data)
    {
        $before = Carbon::now()->addMonth()->format('Y-m-d');
        return Validator::make($data, ['deadline' => ['required', 'date', 'after:today', "before:$before"]]);
    }

    public function editDeadline (Request $request, $id)
    {
        $deadline = $request['deadline'];
        $this->editDeadlineValidator($request->all())->validate();
        Task::editTaskDeadline($id);
        return redirect()->route('todolists.index')->with('success', "Deadline successfully set on $deadline!");
    }

    protected function editTitleValidator(array $data)
    {
        return Validator::make($data, ['title' => ['required', 'string', 'max:128']]);
    }

    public function editTitle(Request $request, $id)
    {
        $this->editTitleValidator($request->all())->validate();
        Task::editTaskTitle($id);
        return redirect()->route('todolists.index')->with('success', 'Task title successfully edited!');
    }

    public function completeTask($id)
    {
        return Task::editTaskStatus($id);
    }

    public function sortTasks(Request $request)
    {
        $id=request('id');
        $position=request('position');
        return Task::where('id', $id)->update(['position'=>$position]);
    }

    public function delete ($id)
    {
        Task::deleteTask($id);
        return redirect()->route('todolists.index')->with('success', "Task successfully deleted!");
    }
}
