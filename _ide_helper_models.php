<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Task
 *
 * @property int $id
 * @property string $title
 * @property string $status
 * @property int $position
 * @property string $deadline
 * @property int $todolist_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\TodoList $todolist
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereDeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereTodolistId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereUpdatedAt($value)
 */
	class Task extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\TodoList[] $TodoList
 * @property-read int|null $todo_list_count
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\TodoList
 *
 * @property int $id
 * @property string $title
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Task[] $todolist_tasks
 * @property-read int|null $todolist_tasks_count
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TodoList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TodoList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TodoList query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TodoList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TodoList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TodoList whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TodoList whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TodoList whereUserId($value)
 */
	class TodoList extends \Eloquent {}
}

