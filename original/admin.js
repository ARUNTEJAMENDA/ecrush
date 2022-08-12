$(document).ready(function(){
    $("#osubmit").click(function(){
        var oname = $("#oname").val();
        var odate = $("#odate").val();
        var ofile1 = $("#ofile1").val();
        var ofile2 = $("#ofile2").val();
        var ofile3 = $("#ofile3").val();
        $.ajax({
            url:"week_with_ecrush.php",
            method: "post",
            data:{on:oname,od:odate,of1:ofile1,of2:ofile2,of3:ofile3},
            success: function(){
                alert("1. Files Added!!");
            }
        });
    });
    $("#tsubmit").click(function(){
        var tname = $("#tname").val();
        var tdate = $("#tdate").val();
        var tfile1 = $("#tfile1").val();
        var tfile2 = $("#tfile2").val();
        var tfile3 = $("#tfile3").val();
        var ta = $("#tactive").val();
        $.ajax({
            url:"special_wishes.php",
            method: "post",
            data:{tn:tname,td:tdate,tf1:tfile1,tf2:tfile2,tf3:tfile3,ta:tactive},
            success: function(){
                alert("2. Files Added!!");
            }
        });
    });
    $("#thsubmit").click(function(){
        var oname = $("#thname").val();
        var odate = $("#thdate").val();
        var ofile1 = $("#thfile1").val();
        var ofile2 = $("#thfile2").val();
        var ofile3 = $("#thfile3").val();
        $.ajax({
            url:"week_with_ecrush.php",
            method: "post",
            data:{on:oname,od:odate,of1:ofile1,of2:ofile2,of3:ofile3},
            success: function(){
                alert("Files Added!!");
            }
        });
    });
    $("#osubmit").click(function(){
        var oname = $("#oname").val();
        var odate = $("#odate").val();
        var ofile1 = $("#ofile1").val();
        var ofile2 = $("#ofile2").val();
        var ofile3 = $("#ofile3").val();
        $.ajax({
            url:"week_with_ecrush.php",
            method: "post",
            data:{on:oname,od:odate,of1:ofile1,of2:ofile2,of3:ofile3},
            success: function(){
                alert("Files Added!!");
            }
        });
    });
    $("#osubmit").click(function(){
        var oname = $("#oname").val();
        var odate = $("#odate").val();
        var ofile1 = $("#ofile1").val();
        var ofile2 = $("#ofile2").val();
        var ofile3 = $("#ofile3").val();
        $.ajax({
            url:"week_with_ecrush.php",
            method: "post",
            data:{on:oname,od:odate,of1:ofile1,of2:ofile2,of3:ofile3},
            success: function(){
                alert("Files Added!!");
            }
        });
    });
    $("#osubmit").click(function(){
        var oname = $("#oname").val();
        var odate = $("#odate").val();
        var ofile1 = $("#ofile1").val();
        var ofile2 = $("#ofile2").val();
        var ofile3 = $("#ofile3").val();
        $.ajax({
            url:"week_with_ecrush.php",
            method: "post",
            data:{on:oname,od:odate,of1:ofile1,of2:ofile2,of3:ofile3},
            success: function(){
                alert("Files Added!!");
            }
        });
    });
})