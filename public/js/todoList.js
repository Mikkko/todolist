$.ajaxSetup({
headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
});

$(".cancel-editTodoList").click(function ()
{
    $(".editTodoListForm").hide();
    $(".todolist_title").show();
    $(".todolist-menu").show();
});

function showEditTodoListForm (id)
{
    var todolist = ".todolist_" + id + " ";
    $(todolist + ".editTodoListForm").show();
    $(todolist + ".todolist_title").hide();
    $(".todolist-menu").hide();
}

function showTaskDeadlineForm(id)
{
    var task = ".task_" + id + " ";
    $(task + ".taskDeadlineForm").show();
    $(task + ".task_title").hide();
    $(task + ".task_deadline").hide();
    $(task + ".task-menu").hide();
}

function showTaskEditTitleForm (id)
{
    var task = ".task_" + id + " ";
    $(task + ".editTaskTitleForm").show();
    $(task + ".task_title").hide();
    $(task + ".task_deadline").hide();
    $(task + ".task-menu").hide();
}

function cancelTaskTitle()
{
    $(".editTaskTitleForm").hide();
    $(".task_title").show();
    $(".task_deadline").show();
    $(".task-menu").show();
}

function cancelDeadline()
{
    $(".taskDeadlineForm").hide();
    $(".task_title").show();
    $(".task-menu").show();
}

function completeTask(id)
{
    var task = ".task_" + id + " ";
    var taskCheck = task + ".checkTask";
    var urlAction = "/task/" + id + "/completeTask";
    var status = "null";

    if($(taskCheck).is(":checked")) {
        status = "checked";
    }
    else
    {
        status = "null";
    }

    $.ajax({
        type: 'post',
        url: urlAction,
        data: {status: status}
    });
}

$(document).ready(function() {
    $(".tasks-row").sortable({
        handle: '.sort-task',
    });

    $(".tasks-row").sortable({
        update: function(event,ui)
        {
            $.map($(this).find('li'), function(el) {
               var id = el.id;
               var position = $(el).index();
               $.ajax({
                   url: '/task/sortTasks',
                   type: 'post',
                   data: {
                       id: id,
                       position: position
                   },
               });
           });
        }
    });
});
