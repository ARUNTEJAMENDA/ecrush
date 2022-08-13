<?php 
     include "../php/config.php";
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $date = mysqli_real_escape_string($con,$_POST['date']);
    // echo $name.".<br>".$date.".<br>";
    $image1 = "";
    $image2 = "";
    $image3 = "";

    $img1_tmp = "";
    $img2_tmp = "";
    $img3_tmp = "";


    $errors = array();
    // $datetime = date("YmdHis");
    $datetime ="";
    $extensions = array("jpeg","jpg","png");

    // Inserting the file and user data to database
    //  $date = date("d-m-Y");

    if($_FILES['img1']['size'] != 0){
        $img1_name =$datetime."_".$_FILES['img1']['name'];
        $img1_size = $_FILES['img1']['size'];
        $img1_tmp = $_FILES['img1']['tmp_name'];
        $img1_type = $_FILES['img1']['type'];
        $temp = explode('.',$img1_name);
        $img1_ext = strtolower(end($temp));

        $image1 = 'week_with_ecrush_'.$img1_name;
        if(in_array($img1_ext,$extensions) === false){
            $errors[] = "This extension file1 not allowed, Please choose proper file Extension.";
        }
        if($img1_size > 10485760){
            $errors[] = "File1 size must be less than 10mb.";
        }  
    }

    if($_FILES['img2']['size'] != 0 ){
        $img2_name =$datetime."_".$_FILES['img2']['name'];
        $img2_size = $_FILES['img2']['size'];
        $img2_tmp = $_FILES['img2']['tmp_name'];
        $img2_type = $_FILES['img2']['type'];
        $temp = explode('.',$img2_name);
        $img2_ext = strtolower(end($temp));

        $image2 = 'week_with_ecrush_'.$img2_name;
        if(in_array($img2_ext,$extensions) === false){
            $errors[] = "This extension file2 not allowed, Please choose proper file Extension.";
        }
        if($img2_size > 10485760){
            $errors[] = "File2 size must be less than 10mb.";
        } 
    }

    if($_FILES['img3']['size'] != 0 ){
        $img3_name =$datetime."_".$_FILES['img3']['name'];
        $img3_size = $_FILES['img3']['size'];
        $img3_tmp = $_FILES['img3']['tmp_name'];
        $img3_type = $_FILES['img3']['type'];
        $temp = explode('.',$img3_name);
        $img3_ext = strtolower(end($temp));

        $image3 = 'week_with_ecrush_'.$img3_name;
        if(in_array($img3_ext,$extensions) === false){
            $errors[] = "This extension file3 not allowed, Please choose proper file Extension.";
        }
        if($img3_size > 10485760){
            $errors[] = "File3 size must be less than 10mb.";
        } 
    }


    if(empty($errors) == true){

        move_uploaded_file($img1_tmp,"../uploads/".$image1);
        move_uploaded_file($img2_tmp,"../uploads/".$image2);
        move_uploaded_file($img3_tmp,"../uploads/".$image3);
            
            $sql = "INSERT INTO week_with_ecrush(`name`, `date`, `file1_name`, `file2_name`, `file3_name`) VALUES('$name','$date','$image1','$image2','$image3')";
            // mysqli_query($conn, $sql1) or die("Error to insert, Hero data!");
            
            if(mysqli_query($con, $sql)){
                // $_SESSION['success_s'] = "Post is sent!";
                echo "Success";
                header("location:../admin.php");
                

            }else{
                // $_SESSION['error_s'] = "unable to post!";
                // header("location: ../services.php");

                echo "Error";
                die();
            }

    }else{
        $err = $errors[0];
        echo "$err";
        // $_SESSION['error_s'] = $err;
        //     header("location: ../services.php");
        die();
    }






?>