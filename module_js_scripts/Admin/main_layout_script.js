// Logout Admin
function LogoutAdmin() {
    $("#error").css("display", "none");
    var script_url = '../php_scripts/admin/logout_admin.php';

    $.ajax({
        type: 'POST',
        url: script_url,
        dataType: "json",
        // data: formData,
        success: function (response) {
            if (response.status == "success") {
                localStorage.setItem("success", response.msg);
                window.open("login.php", "_self");
            }
            else if (response.status == "error") {
                $("#error").css("display", "block");
                $("#error_msg").text( response.msg);
            }
        },
        error: function (xhr, status, error) {
            $("#error").css("display", "block");
            $("#error_msg").text("Something went wrong!");
        }
    });
}