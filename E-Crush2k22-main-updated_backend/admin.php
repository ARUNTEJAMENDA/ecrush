<?php
    include "./php/config.php";
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <script src="assets/js/jquery.js"></script>
    <title>Admin</title>
</head>
<body>
    <div class="one" id="one">
    <h1 style="text-align:center;">1.WEEK WITH ECRUSH</h1>
    <h2>daily posts</h2>
    <form  method="POST" action="apis/week_with_ecrush.php" enctype="multipart/form-data">
        <table>
            <tr><td>Name:</td><td><input type="text" name="name"></td></tr>
            <tr><td>Date:</td><td><input type="date" name="date"></td></tr>
            <tr><td>file1:</td><td><input type="file" name="img1"></td></tr>
            <tr><td>file2:</td><td><input type="file" name="img2"></td></tr>
            <tr><td>file3:</td><td><input type="file" name="img3"></td></tr>
        </table>
        <button type="submit" name="submit">submit</button>
    </form>
    <table border="5px">
        <tr><th>s.no</th><th>name</th><th>date</th><th>file1</th><th>file2</th><th>file3</th><th>operator</th></tr>
    <?php
        $sql = "SELECT * FROM `week_with_ecrush`";
        $result = mysqli_query($con, $sql);
        $options1 = "<option>select</option>";

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                    <td>".$row["sno"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["date"]."</td>
                    <td>".$row["file1_name"]."</td>
                    <td>".$row["file2_name"]."</td>
                    <td>".$row["file3_name"]."</td>
                    <td>".$row["operation"]."</td>
                </tr>";
                $options1 = $options1."<option>".$row['sno']."</option>";
        }
        echo "</table>";
        echo "<label>Delete Sno. : </label>
        <select id='week_with_ecrush_option'>
            ".$options1."
        </select>
        <button id='week_with_ecrush' class=\"del\"'>Delete</button>";
    }
    
    ?>        


    <h1 style="text-align:center;">SPECIAL WISHES</h1>

    <form method="POST" action="apis/special_wishes.php" enctype="multipart/form-data">
        <table>
      <tr><td>Name:</td><td><input name="name" type="text" ></td></tr>
     <tr> <td>Date:</td><td><input name="date" type="date" ></td></tr>
      <tr><td>file1:</td><td><input name="img1" type="file" ></td></tr>
      <tr><td>file2:</td><td><input name="img2" type="file" ></td></tr>
      <tr><td>file3:</td><td><input name="img3" type="file" ></td></tr>
      <tr><td>active</td><td><input name="active" type="text"></td></tr>
    </table>
    <button type="submit" name="submit" >submit</button>
    </form>
    <table border="5px">
        <tr><th>s.no</th><th>name</th><th>date</th><th>file1</th><th>file2</th><th>file3</th><th>action</th></tr>
    <?php
        $sql = "SELECT * FROM `special_wishes`";
        $result = mysqli_query($con, $sql);
        $options1 = "<option>select</option>";
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                    <td>".$row["sno"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["date"]."</td>
                    <td>".$row["file1_name"]."</td>
                    <td>".$row["file2_name"]."</td>
                    <td>".$row["file3_name"]."</td>
                    <td>".$row["active"]."</td>
                    
                </tr>";
                $options1 = $options1."<option>".$row['sno']."</option>";
        }
        echo "</table>";
        echo "<label>Delete Sno. : </label>
        <select id='special_wishes_option'>
            ".$options1."
        </select>
        <button id='special_wishes' class=\"del\"'>Delete</button>";
    }
    ?>        
    
</div>
<!-- <td>button><a href='apis/delete_special_wishes.php?deleteid=".$row['sno']."'>delete</a></button></td> -->


<div class="2" id="2">
    <h1 style="text-align:center">2.WEEKEND TRIVIA</h1>
    <form>
        <table>
    
      <tr><td>NAME OF THE WEEK:</td><td><input type="text"></td></tr>
      <tr><td>DATE:</td><td><input type="text"></td></tr>
      <tr><td>LINK:</td><td><input type="text"></td></tr>
      
      <tr><td>WINNER-1:</td> <td><input type="text"><input type="text"><input type="text"></td></tr>
      <tr><td>WINNER-2:</td> <td><input type="text"><input type="text"><input type="text"></td></tr>
      <tr><td>WINNER-3:</td> <td><input type="text"><input type="text"><input type="text"></td></tr>
      
        </table> 
    
      <button style="text-align:center">SUBMIT</button>
    </form> <br><br>
    
       <!-- table-2 starts -->
    
       <table border="5px">
        <tr>
            <th>S.NO</th>
            <th>NAME OF THE WEEK</th>
            <th>DATE</th>
            <th>LINK</th>
            <th>WINNER-1</th>
            <th>WINNER-2</th>
            <th>WINNER-3</th>
            <th>OPERATOR</th>
            
        </tr>
    
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    
        </tr> 
        
       </table>
    </div>

<div class="3" id="3">
    <h1 style="text-align:center">3.NOTIFICATION POP-UP</h1>
    <form><table>
    <tr><td>Notification name:</td><td><input type="text"></td><br></tr>
    <tr><td>Date:</td><td><input type="text"><br></td></tr>
    <tr><td>Message:</td><td><input type="text"></td><br></tr>
    <tr><td>Link:</td><td><input type="text"></td><br></tr>
    <tr><td>Active:</td><td><input type="text"></td><br></tr>
    </table>
    <input type="submit" name="submit">

    </form><br>
    <table border="5px">
        <tr>
            <td>Serial no.</td>
            <td>Notification name</td>
            <td>Date</td>
            <td>Message</td>
            <td>Link</td>
            <td>Active</td>
            <td>Operator</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
        <tr>
               
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
    </table>
    <br>
</div>
<div class="4" id="4">
    <h1 style="text-align:center">4.CONTACT FORM</h1>
    <form><table>
    <tr><td>Name:</td><td><input type="text"></td><br></tr>
    <tr><td>Date:</td><td><input type="text"><br></td></tr>
    <tr><td>Message:</td><td><input type="text"></td><br></tr>
    <tr><td>Mail:</td><td><input type="text"></td><br></tr>
    </table>
    <input type="submit" name="submit">

    </form><br>
    <table border="5px">
        <tr>
            <td>Serial no.</td>
            <td>Name</td>
            <td>Date</td>
            <td>Message</td>
            <td>Mail</td>
            <td>Operator</td>
        </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </table><br>
</div>
    <div class="5">
    <h1 style="text-align:center">5.SUGGESTION</h1>
    <form>
    <table>
    <tr><td>Date:</td><td><input type="text"><br></td></tr>
    <tr><td>Message:</td><td><input type="text"></td><br></tr>

    </table>
    <input type="submit" name="submit">

    </form><br>
    <table border="5px">
        <tr>
            <td>Serial no.</td>
            <td>Date</td>
            <td>Message</td>
            <td>Operator</td>
        </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </table>
</div>
</body>

<script src="assets/js/admin.js"></script>

</html>