

 <?php
 include "php/config.php";
 $table_name= $_POST['table_name'];
 $sno= $_POST['sno'];
 $query = "DELETE FROM $table_name where sno = '$sno'";

 $sql = "SELECT file1_name, file2_name, file3_name from $table_name";
 $result = mysqli_query($con,$sql);

 if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $file1 = "uploads/".$row["file1_name"];
        $file2 = "uploads/".$row["file2_name"];
        $file3 = "uploads/".$row["file3_name"];
    }
    echo $file1." >> ".$file2." >> ".$file3;
}
if(mysqli_query($con,$query) && (unlink($file1) || unlink($file2) ||  unlink($file3))){
     echo "\ndeleted";
 }else{
     echo "delete-api problem";
 }
?>


