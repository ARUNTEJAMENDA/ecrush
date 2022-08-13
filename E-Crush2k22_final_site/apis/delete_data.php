 <?php
    include "../php/config.php";
    $table_name= $_POST['table_name'];
    $sno= $_POST['sno'];
    //------------
    $sql = "SELECT * from `$table_name` where sno ='$sno'";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $file1 = "../uploads/".$row["file1_name"];
        $file2 = "../uploads/".$row["file2_name"];
        $file3 = "../uploads/".$row["file3_name"];
    }
    // echo $file1."\n".$file2."\n".$file3;
    //-------------
    $query = "DELETE FROM $table_name where sno = '$sno'";
    //-------------
    // if(true){
    if(unlink($file1) && unlink($file2) &&  unlink($file3) && mysqli_query($con,$query)){
        echo "\n".$sno."\n".$file1."\n".$file2."\n".$file3;
        echo "\ndeleted";
    }else{
        echo "delete-api problem";
    }
?>


