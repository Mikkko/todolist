function showEditForm (id) {
    var todolist = ".todolist_" + id + " ";
    $(todolist + ".editTodoListForm").show();
    $(todolist + ".todolist_title").hide()
    $(".todolist-menu").hide();
}
