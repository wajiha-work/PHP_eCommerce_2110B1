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