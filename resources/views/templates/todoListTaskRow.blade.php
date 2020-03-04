<div class="col-1 taskCheckBoxColumn">
    <form method="post">
        <input type="checkbox" name="complete" onclick="completeTask({{$task->id}})" class="checkTask" {{$task->status}}>
    </form>
</div>
<div class="col">
    <p class="task_title col">
        {{$task->title}}
    </p>

    <form class="editTaskTitleForm" action="task/{{$task->id}}/editTaskTitle" method="get">
        <input name="title" class="editTaskTitleInput" type="text" value="{{$task->title}}">
        <button type="submit" class="edit-taskSubmit">
            <i class="fas fa-check fa-lg"></i>
        </button>
        <i class="fas fa-times fa-lg cancelEditTask" onclick="cancelTaskTitle()"></i>
    </form>

    <form class="taskDeadlineForm" action="task/{{$task->id}}/editDeadline" method="get">
        <input type="date" name="deadline" value="{{$task->deadline}}">
        <button type="submit" class="edit-TaskDeadlineSubmit">
            <i class="fas fa-check fa-lg"></i>
        </button>
        <i class="fas fa-times fa-lg cancelDeadline" onclick="cancelDeadline()"></i>
    </form>
</div>

<div class="col-3 ">
    <div class="task_deadline" onclick="showTaskDeadlineForm({{$task->id}})">
        {{$task->deadline}}
    </div>
</div>


<div class="col-4 col-sm-2 task-menu">

    <i class="fas fa-sort fa-xs sort-task"></i>
    <i class="fas fa-pencil-alt fa-xs edit-task" onclick="showTaskEditTitleForm({{$task->id}})"></i>
    <form action="/task/{{$task->id}}/delete" method="post" class="delete-taskForm">
      {{csrf_field()}}
      {{method_field('DELETE')}}
        <button type="submit" class="delete-taskSubmit">
            <i class="far fa-trash-alt fa-xs delete-task"></i>
        </button>
    </form>
</div>
<input type="hidden" class="hiddenId" id="{{$task->id}}">
