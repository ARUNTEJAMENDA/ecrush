$(document).ready(function(){
    $("#onesubmit").click(function(){
        var onename = $("#onename").val();
        $.ajax({
            url:"week_with_ecrush.php",
            method: "post",
            data:{}
        });
    });
})