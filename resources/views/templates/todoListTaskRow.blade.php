<div class="row task-row">
    <div class="col col-1">
        <input type="checkbox" class="checkTask">
    </div>
    <div class="col">
        <span>
            {{$task -> title}}
        </span>
    </div>
    <div class="col col-4 col-sm-2">
        <i class="fas fa-sort fa-xs sort-task"></i>
        <i class="fas fa-pencil-alt fa-xs edit-task"></i>
        <form action="/task/{{$task->id}}/delete" method="post" class="delete-taskForm">
          {{csrf_field()}}
          {{method_field('DELETE')}}
            <button type="submit" class="delete-taskSubmit">
                <i class="far fa-trash-alt fa-xs delete-task"></i>
            </button>
        </form>
    </div>
</div>
