if(localStorage.getItem("success"))
{
    $("#success").css("display", "block");
    $("#success_msg").text(localStorage.getItem("success"));
    localStorage.clear("success");
}
if(localStorage.getItem("error"))
{
    $("#error").css("display", "block");
    $("#error_msg").text(localStorage.getItem("error"));
    localStorage.clear("error");
}

function LoginAdmin() {
    $("#error").css("display", "none");
    $("#success").css("display", "none");

    event.preventDefault();
    var formData = $("#login_admin_form").serialize();
    var script_url = '../php_scripts/Admin/login_admin.php';

    $.ajax({
        type: 'POST',
        url: script_url,
        dataType: "json",
        data: formData,
        success: function (response) {
            if (response.status == "success") {
                $("#login_admin_form").trigger("reset");
                // $("#success").css("display", "block");
                // $("#success_msg").text(response.msg);
                localStorage.setItem("success", response.msg);
                window.open("index.php", "_self");
            }
            else if (response.status == "error") {
                $("#error").css("display", "block");
                $("#error_msg").text(response.msg);
            }
        },
        error: function (xhr, status, error) {
            $("#error").css("display", "block");
            $("#error_msg").text("Something went wrong!");
        }
    });
}