<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Task extends Model
{
    protected $fillable = ['title', 'todolist_id', 'deadline', 'status'];

    public function todolist ()
    {
        return $this->belongsTo(TodoList::class)->orWherenull('No tasks there...');
    }

    public static function newTask ($todolist_id)
    {
        $deadline = Carbon::now()->addDays(2)->format('Y-m-d'); 
        return self::create(['title'=>request('title'), 'deadline'=>$deadline, 'todolist_id'=>$todolist_id]);;
    }

    public static function editTaskDeadline ($id)
    {
        return self::findOrFail($id)->update(['deadline'=>request('deadline')]);
    }

    public static function editTaskStatus ($id)
    {
        return self::findOrFail($id)->update(['status'=>request('status')]);
    }

    public static function editTaskTitle ($id)
    {
        return self::findOrFail($id)->update(['title'=>request('title')]);
    }

    public static function deleteAllTasksFromTodoList ($id)
    {
        return self::where('todolist_id', $id)->delete();
    }

    public static function deleteTaskWithDeadline () {
        $date = Carbon::now()->format('Y-m-d');
        return self::where('deadline', '<', $date)->delete();
    }

    public static function deleteTask ($id)
    {
        return self::where('id', $id)->delete();
    }
}
