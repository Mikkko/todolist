<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col col-12 col-md-10 col-xl-4 todolist_{{$todolist->id}}">

            <div class="row thead-row">
                <div class="col col-1">
                    <i class="fas fa-clipboard-list fa-2x"></i>
                </div>
                <div class="col">
                  <form class="editTodoListForm" action="todolist/{{$todolist->id}}/edit" class="col-12" method="get">
                      <input name="title" type="text" class="col-6 col-sm-10" value="{{$todolist->title}}">
                      <button type="submit" class="edit-todoListSubmit">
                          <i class="fas fa-check fa-lg"></i>
                      </button>
                      <i class="fas fa-times fa-lg"></i>
                  </form>
                      <span class="todolist_title">{{$todolist->title}}</span>
                </div>
                <div class="col col-4 col-sm-2">
                    <div class="todolist-menu">
                        <i onclick="showEditForm({{$todolist->id}})" class="fas fa-pencil-alt col-5 edit-todoList"></i>
                        <form action="todolist/{{$todolist->id}}/delete" method="post" class="delete-todoListForm">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="delete-todoListSubmit">
                                <i class="fas fa-trash-alt col-5 delete-todoList"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <form action="/todolist/{{$todolist->id}}/task/create" method="post" class="create-taskForm">
                {{csrf_field()}}
                <div class="row tmiddle-row">
                    <div class="col col-1">
                        <i class="fas fa-plus fa-2x"></i>
                    </div>
                    <div class="col">
                        <input name="title" placeholder="Start typing here to create a task..." type="text" class="col" required>
                    </div>
                    <div class="col col-4 col-sm-2 mr-1">
                        <button type="submit" class="createTaskSubmit">Add Task</button>
                    </div>
                </div>
            </form>
            @if(count($todolist->todolist_tasks) > 0 )
                @foreach($todolist->todolist_tasks as $task)
                    @include('templates.todoListTaskRow')
                @endforeach
            @else
                @include('templates.todoListNoTasksRow')
            @endif
        </div>
    </div>
</div>
