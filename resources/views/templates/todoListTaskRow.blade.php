<div class="row task-row task_{{$task->id}}">
    <div class="col-1 taskCheckBoxColumn">
        <input type="checkbox" onclick="completeTask({{$task->id}})" class="checkTask">
    </div>
    <div class="col">
        <span class="task_title text-justify-left">
            {{$task -> title}}
        </span>

        <form class="editTaskForm" action="task/{{$task->id}}/edit" method="get">
            <input type="date" name="deadline" value="{{$task->deadline}}">
            <button type="submit" class="edit-taskSubmit">
                <i class="fas fa-check fa-lg"></i>
            </button>
            <i class="fas fa-times fa-lg cancel-editTask"></i>
        </form>
    </div>
    <div class="col-4 col-sm-2 task-menu">

        <i class="fas fa-sort fa-xs sort-task"></i>
        <i onclick="showEditTaskForm({{$task->id}})" class="fas fa-pencil-alt fa-xs edit-task"></i>
        <form action="/task/{{$task->id}}/delete" method="post" class="delete-taskForm">
          {{csrf_field()}}
          {{method_field('DELETE')}}
            <button type="submit" class="delete-taskSubmit">
                <i class="far fa-trash-alt fa-xs delete-task"></i>
            </button>
        </form>
    </div>
</div>
