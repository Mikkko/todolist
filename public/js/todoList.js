function showEditTodoListForm (id) {
    var todolist = ".todolist_" + id + " ";
    $(todolist + ".editTodoListForm").show();
    $(todolist + ".todolist_title").hide();
    $(".todolist-menu").hide();
}

function showEditTaskForm (id) {
    var task = ".task_" + id + " ";
    $(task + ".task_title").hide();
    $(task + ".editTaskForm").show();
    $(".task-menu").hide();
}

function completeTask (id)
{
    var task = ".task_" + id + " ";
    var taskTitle = task + ".task_title";
    var taskCheck = task + ".checkTask";

    if($(taskCheck).is(":checked")) {
        $(taskTitle).css('text-decoration', 'line-through');
    }
    else
    {
        $(taskTitle).css('text-decoration', 'none');
    }
}

$(".cancel-editTodoList").click(function () {
    $(".editTodoListForm").hide();
    $(".todolist_title").show();
    $(".todolist-menu").show();
});

$(".cancel-editTask").click(function () {
    $(".editTaskForm").hide();
    $(".task-menu").show();
    $(".task-checkbox").show();
});
