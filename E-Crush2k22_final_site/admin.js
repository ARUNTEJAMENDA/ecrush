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
})