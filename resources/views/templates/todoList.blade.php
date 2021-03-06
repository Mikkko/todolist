<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-xl-4 todolist_{{$todolist->id}} todolist">
            <div class="row thead-row">
                <div class="col-1">
                    <i class="fas fa-clipboard-list fa-2x"></i>
                </div>
                <div class="col">
                    <form class="editTodoListForm" action="todolist/{{$todolist->id}}/edit" method="get">
                        <input name="title" class="todoListTitleInput" type="text" value="{{$todolist->title}}">
                        <button type="submit" class="edit-todoListSubmit">
                            <i class="fas fa-check fa-lg"></i>
                        </button>
                        <i class="fas fa-times fa-lg cancel-editTodoList"></i>
                    </form>
                    <p class="todolist_title">
                        {{$todolist->title}}
                    </p>
                </div>
                <div class="col-4 col-sm-2 todolist-menu">
                    <i onclick="showEditTodoListForm({{$todolist->id}})" class="fas fa-pencil-alt edit-todoList"></i>
                    <form action="todolist/{{$todolist->id}}/delete" method="post" class="delete-todoListForm">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit" class="delete-todoListSubmit">
                            <i class="fas fa-trash-alt delete-todoList"></i>
                        </button>
                    </form>
                </div>
            </div>
            <form action="/todolist/{{$todolist->id}}/task/create" method="post" class="create-taskForm">
                {{csrf_field()}}
                <div class="row tmiddle-row">
                    <div class="col-1">
                        <i class="fas fa-plus fa-2x"></i>
                    </div>
                    <div class="col">
                        <input name="title" placeholder="Start typing here to create a task..." type="text" class="taskTitleInput" required>
                    </div>
                    <div class="col-4 col-sm-2 mr-1">
                        <button type="submit" class="createTaskSubmit">Add Task</button>
                    </div>
                </div>
            </form>
            <div class="row">
              <ul class="tasks-row col-12">
              @if(count($todolist->todolist_tasks)>0)
                  @foreach($todolist->todolist_tasks as $task)
                      <li id="{{$task->id}}" class="row task_{{$task->id}} task-row">
                          @include('templates.todoListTaskRow')
                      </li>
                  @endforeach
              </ul>

              @else
                  @include('templates.todoListNoTasksRow')
              @endif
            </div>
        </div>
    </div>
</div>
