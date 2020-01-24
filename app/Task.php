<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = ['title', 'todolist_id'];

  public function todolist ()
  {
      return $this->belongsTo(TodoList::class)->orWherenull('No tasks there');
  }

  public static function newTask ($id)
  {
      return self::create(['title'=>request('title'), 'todolist_id'=>$id]);
  }

  public static function deleteAllTasksFromTodoList ($id)
  {
      return self::where('todolist_id', $id)->delete();
  }

  public static function deleteTask ($id)
  {
      return self::where('id', $id)->delete();
  }
}
