<?php
    include "php/config.php";
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.js"></script>
    <script src="admin.js"></script>
    <title>Admin</title>
    <style>
        table,td,th{
            height:max-content;
            width:max-content;
            padding:5px;
            border:1px solid black;
            border-collapse:collapse;
            text-align: center;
        }
        input{
            padding:5px;
            width:90%;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">1.WEEK WITH ECRUSH</h1>
    <h2>daily posts</h2>
    <form action="apis/week_with_ecrush.php" method="post" enctype="multipart/form-data">
        <table>
            <tr><td>Name:</td><td><input required type="text" name="name"></td></tr>
            <tr><td>Date:</td><td><input required type="date" name="date"></td></tr>
            <tr><td>file1:</td><td><input required type="file" name="img1"></td></tr>
            <tr><td>file2:</td><td><input required type="file" name="img2"></td></tr>
            <tr><td>file3:</td><td><input required type="file" name="img3"></td></tr>
        </table>
        <button name="osubmit" type="submit" value="submit">submit</button>
    </form>
    <?php
        //-------
        $q1ex = $con->query("SELECT * FROM `week_with_ecrush`");$q1c = $q1ex->num_rows;
        $options1 = "<option>select</option>";
        //-------
        echo '<table><tr><th>s.no</th><th>name</th><th>date</th><th>file1</th><th>file2</th><th>file3</th></tr>';
        $q1 = "SELECT * FROM `week_with_ecrush`";
        $ex1 = mysqli_query($con,$q1);
        while($row = mysqli_fetch_assoc($ex1)){
            echo "<tr>
                    <td>".$row["sno"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["date"]."</td>
                    <td>".$row["file1_name"]."</td>
                    <td>".$row["file2_name"]."</td>
                    <td>".$row["file3_name"]."</td>
                </tr>";
            $options1 = $options1."<option>".$row["sno"]."</option>";
        }
        echo "</table>
        <br>
        <label>Delete Sno. : </label>
        <select id='week_with_ecrush_option'>
            ".$options1."
        </select>
        <button id='week_with_ecrush' class=\"del\"'>Delete</button>";
    ?>
    <hr>
    <!-- ------------------------------------------- -->
    <h1 style="text-align:center;">2. SPECIAL WISHES</h1>
    <form action="apis/special_wishes.php" method="post" enctype="multipart/form-data">
        <table>
            <tr><td>Name:</td><td><input required name="name" type="text" ></td></tr>
            <tr><td>Date:</td><td><input required name="date" type="date" ></td></tr>
            <tr><td>file1:</td><td><input required name="img1" type="file" ></td></tr>
            <tr><td>file2:</td><td><input required name="img2" type="file" ></td></tr>
            <tr><td>file3:</td><td><input required name="img3" type="file" ></td></tr>
            <tr><td>active</td><td><input required name="active" type="text"></td></tr>
        </table>
        <button name="tsubmit" type="submit" value="submit">submit</button>
    </form>
    <table>
        <?php
            $q2ex = $con->query("SELECT * FROM `special_wishes`");$q2c = $q2ex->num_rows;
            $options2 = "<option>select</option>";
            //----------------
            echo '<tr><th>s.no</th><th>name</th><th>date</th><th>file1</th><th>file2</th><th>file3</th><th>active</th></tr>';
            $q2 = "SELECT * FROM `special_wishes`";
            $ex2 =mysqli_query($con,$q2);
            while($row = mysqli_fetch_assoc($ex2)){
                echo "<tr>
                        <td>".$row["sno"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["date"]."</td>
                        <td>".$row["file1_name"]."</td>
                        <td>".$row["file2_name"]."</td>
                        <td>".$row["file3_name"]."</td>
                        <td>".$row["active"]."</td>
                    </tr>";
                $options2 = $options2."<option>".$row["sno"]."</option>";
            }
            echo "</table><br>
            <label>Delete Sno. : </label>
            <select id='special_wishes_option'>
                ".$options2."
            </select>
            <button id='special_wishes' class=\"del\"'>Delete</button>";
        ?>
    <!-- ------------------------------------------- -->
    <hr>
    <h1>3. WEEKEND TRIVIA</h1>
    <form action="weekend_trivia.php" method="post" enctype="multipart/form-data">
        <table>
            <tr><td>NAME OF THE WEEK:</td><td><input required required type="text"></td></tr>
            <tr><td>DATE:</td><td><input required required type="text"></td></tr>
            <tr><td>LINK:</td><td><input required required type="text"></td></tr>
            <tr><td>WINNER-1(format:name_id_clg):</td><td><input required required type="text" placeholder="xxx_xxxxx_xxxx"></td></tr>
            <tr><td>WINNER-2(format:name_id_clg):</td><td><input required required type="text" placeholder="xxx_xxxxx_xxxx"></td></tr>
            <tr><td>WINNER-3(format:name_id_clg):</td><td><input required required type="text" placeholder="xxx_xxxxx_xxxx"></td></tr>
        </table>
        <button name="thsubmit" type="submit" value="submit">submit</button>
    </form>
    <table>
            <tr><th>S.NO</th><th>NAME OF THE WEEK</th><th>DATE</th><th>LINK</th><th>WINNER-1</th><th>WINNER-2</th><th>WINNER-3</th><th>OPERATOR</th></tr>
        <?php
            $q3 = "SELECT * FROM `weekend_trivia`";
            $ex3 =mysqli_query($con,$q3);
            while($row = mysqli_fetch_assoc($ex3)){
                echo "<tr>
                        <td>".$row["sno"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["date"]."</td>
                        <td>".$row["link"]."</td>
                        <td>".$row["winner1"]."</td>
                        <td>".$row["winner2"]."</td>
                        <td>".$row["winner3"]."</td>
                    </tr>";
            }
        ?>        
    </table>
    <!-- -------------------------------------------- -->
    <hr>
    <h1>4. NOTIFICATION POP-UP</h1>
    <form action="notifications.php" method="post" enctype="multipart/form-data">
        <table>
            <tr><td>Notification name:</td><td><input required required type="text"></td><br></tr>
            <tr><td>Date:</td><td><input required required type="text"><br></td></tr>
            <tr><td>Message:</td><td><input required required type="text"></td><br></tr>
            <tr><td>Link:</td><td><input required required type="text"></td><br></tr>
            <tr><td>Active:</td><td><input required required type="text"></td><br></tr>
        </table>
        <button name="thsubmit" type="submit" value="submit">submit</button>
    </form>
    <table>
        <tr><td>Serial no.</td><td>Notification name</td><td>Date</td><td>Message</td><td>Link</td><td>Active</td><td>Operator</td></tr>
        <?php
            $q4 = "SELECT * FROM `notifications`";
            $ex4 =mysqli_query($con,$q4);
            while($row = mysqli_fetch_assoc($ex4)){
                echo "<tr>
                        <td>".$row["sno"]."</td>
                        <td>".$row["notification_name"]."</td>
                        <td>".$row["date"]."</td>
                        <td>".$row["message"]."</td>
                        <td>".$row["link"]."</td>
                        <td>".$row["active"]."</td>
                    </tr>";
            }
        ?>            
    </table>
<!-- ------------------------------------------------------- -->
    <h1>5.CONTACT FORM</h1>
    <form action="contact_form.php" method="post" enctype="multipart/form-data">
        <table>
            <tr><td>Name:</td><td><input required required type="text"></td><br></tr>
            <tr><td>Date:</td><td><input required required type="text"><br></td></tr>
            <tr><td>Message:</td><td><input required required type="text"></td><br></tr>
            <tr><td>Mail:</td><td><input required required type="text"></td><br></tr>
        </table>
        <button name="thsubmit" type="submit" value="submit">submit</button>
    </form>
    <table>
        <tr><td>Serial no.</td><td>Name</td><td>Date</td><td>Message</td><td>Mail</td><td>Operator</td></tr>
        <?php
            $q5 = "SELECT * FROM `contact_form`";
            $ex5 =mysqli_query($con,$q5);
            while($row = mysqli_fetch_assoc($ex5)){
                echo "<tr>
                        <td>".$row["sno"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["date"]."</td>
                        <td>".$row["message"]."</td>
                        <td>".$row["email"]."</td>
                    </tr>";
            }
        ?>
    </table>
    <!-- ------------------------------------------------- -->
    <hr>
    <h1>6. SUGGESTION</h1>
    <form action="suggestions.php" method="post" enctype="multipart/form-data">
        <table>
            <tr><td>Date:</td><td><input required required type="text"><br></td></tr>
            <tr><td>Message:</td><td><input required required type="text"></td><br></tr>
        </table>
        <button name="thsubmit" type="submit" value="submit">submit</button>
    </form>
    <table>
        <tr><td>Serial no.</td><td>Date</td><td>Message</td><td>Operator</td></tr>
        <?php
            $q6 = "SELECT * FROM `suggestions`";
            $ex6 =mysqli_query($con,$q6);
            while($row = mysqli_fetch_assoc($ex6)){
                echo "<tr>
                        <td>".$row["sno"]."</td>
                        <td>".$row["date"]."</td>
                        <td>".$row["message"]."</td>
                    </tr>";
            }
        ?>
    </table>
    <!-- ------------------------------------------------- -->
</body>
</html>
