$("#logoutLink").click(function() {
    $('#frm-logout').submit();
});

$(".alert").delay(3000).fadeOut("normal", function () {
    $(this).remove();
});

$(".alert").click(function () {
    $(this).remove();
});
