$(document).ready(function(){
    $("#onesubmit").click(function(){
        var onename = $("#onename").val();
        $.ajax({
            url:"main_api.php",
            method: "post",
            data:{}
        });
    });
})