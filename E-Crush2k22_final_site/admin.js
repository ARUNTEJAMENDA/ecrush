$(document).ready(function(){
  $(".del").click(function(){
        var table_name = this.id;
        var sno = $("#"+table_name+"_option").val();
        // alert(table_name+" >> "+sno);
        if(sno!="select"){
            if(confirm("Do you want to delete sno."+sno+" from table '"+table_name+"' ??")){
                $.ajax({
                    url:"apis/delete_data.php",
                    method: "post",
                    data:{table_name:table_name,sno:sno},
                    success: function(response){
                        alert(response);
                        location.reload();
                        // location.replace("admin.php");
                    }
                });
            }
        }else{
            alert("option not valid!!");
        }
    });
  $(".del_data").click(function(){
        var tname = this.id;
        var sno = $("#"+tname+"_option").val();
        // alert(tname+" >> "+sno);
        if(sno!="select"){
            if(confirm("Do you want to delete sno."+sno+" from table '"+tname+"' ??")){
                $.ajax({
                    url:"apis/delete_normal_data.php",
                    method: "post",
                    data:{table_name:tname,sno:sno},
                    success: function(response){
                        alert(response);
                        location.reload();
                        // location.replace("admin.php");
                    }
                });
            }
        }else{
            alert("option not valid!!");
        }
    });
    $(".deactivate").click(function(){
        var tname = this.id;
        $.ajax({
            url:"apis/deactive.php",
            method: "post",
            data:{table_name:tname},
            success: function(response){
                alert(response);
                location.reload();
                // location.replace("admin.php");
            }
        });
    });
    $(".activate").click(function(){
        var tname = this.id;
        var sno = $("#"+tname+"_activate").val();
        $.ajax({
            url:"apis/active.php",
            method: "post",
            data:{table_name:tname,sno:sno},
            success: function(response){
                alert(response);
                location.reload();
                // location.replace("admin.php");
            }
        });
    });
    $("#update_winners").click(function(){
        var sno = $("#winners_sno").val();
        if(sno !="select"){
            var w1 =$("#winner1").val();
            var w2 =$("#winner2").val();
            var w3 =$("#winner3").val();
            // alert(w1+w2+w3);
            $.ajax({
                url:"apis/update_winners.php",
                method: "post",
                data:{winners_sno:sno,winner1:w1,winner2:w2,winner3:w3},
                success: function(response){
                    alert(response);
                    location.reload();
                    // location.replace("admin.php");
                }
            });
        }else{
            alert("option not valid");
            $("winners_sno").css("border","2px solid red");
        }
    });
})