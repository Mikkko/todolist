<?php

namespace App;
use App\Task;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    protected $fillable = ['title', 'id', 'user_id'];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function todolist_tasks()
    {
        return $this->hasMany(Task::class, 'todolist_id');
    }

    public static function getAllTodoListsForCurrentUser ()
    {
        return self::where('user_id', auth()->id())->get();
    }

    public static function NewTodoList () {
        return self::create(['title' => 'New todolist', 'user_id' => auth()->id()]);
    }

    public static function deleteTodoList ($id)
    {
        Task::deleteAllTasksFromTodoList($id);
        return self::where('id', $id)->delete();
    }

    public static function editTodoList ($id)
    {
        return self::findOrFail($id)->update(['title'=>request('title')]);
    }
}
