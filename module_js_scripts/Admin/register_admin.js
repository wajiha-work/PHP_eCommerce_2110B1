function RegisterAdmin() {
    $("#error").css("display", "none");
    $("#success").css("display", "none");

    event.preventDefault();
    var formData = $("#register_admin_form").serialize();
    var script_url = '../php_scripts/Admin/register_admin.php';

    $.ajax({
        type: 'POST',
        url: script_url,
        dataType: "json",
        data: formData,
        success: function (response) {
            if (response.status == "success") {
                $("#register_admin_form").trigger("reset");
                // $("#success").css("display", "block");
                // $("#success_msg").text(response.msg);
                localStorage.setItem("success", response.msg);
                window.open("login.php", "_self");
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