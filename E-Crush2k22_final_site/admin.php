<?php
    session_start();
    if(isset($_SESSION['code'])){
        include "php/config.php";
        if ($con){
            echo "🥰Happy Vibes onn..!!<hr>";
        }
        else{
            // echo "<script>alert('not connected')</script>";
        }
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
        h1{
            text-align: center;
        }
        .danger{color:red;}
    </style>
</head>
<body>
    <a href="admin/logout.php">logout</a>
    <h1>1.WEEK WITH ECRUSH</h1>
    <h2>daily posts</h2>
    <form action="apis/week_with_ecrush.php" method="post" enctype="multipart/form-data">
        <br><table>
            <tr><td>Name:</td><td><input required type="text" name="name"></td></tr>
            <tr><td>Date:</td><td><input required type="date" name="date"></td></tr>
            <tr><td colspan="2"><span class="danger">**images should be unique</span></td></tr>
            <tr><td>file1:</td><td><input required type="file" name="img1"></td></tr>
            <tr><td>file2:</td><td><input required type="file" name="img2"></td></tr>
            <tr><td>file3:</td><td><input required type="file" name="img3"></td></tr>
            <tr><td>active:</td><td><input required type="text" name="active" placeholder="( yes / no )"></td></tr>
        </table>
        <button name="osubmit" type="submit" value="submit">submit</button>
    </form>
    <?php
        //-------
        $q1ex = $con->query("SELECT * FROM `week_with_ecrush`");$q1c = $q1ex->num_rows;
        $options1 = "<option>select</option>";
        //-------
        echo '<br><table><tr><th>s.no</th><th>name</th><th>date</th><th>file1</th><th>file2</th><th>file3</th><th>active</th></tr>';
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
                    <td>".$row["active"]."</td>
                </tr>";
            $options1 = $options1."<option>".$row["sno"]."</option>";
        }
        echo "</table>
        <br><label>Delete Sno. : </label><select id='week_with_ecrush_option'>".$options1."</select><button id='week_with_ecrush' class=\"del\"'>Delete</button>
        <br><br>
        <button id='week_with_ecrush' class='deactivate'>Deactivate All</button>
        <br><br>
        <label>Activate Sno. : </label>
        <select id='week_with_ecrush_activate'>
            ".$options1."
        </select>
        <button id='week_with_ecrush' class='activate'>Activate</button>
        ";
    ?>
    <hr>
    <!-- ------------------------------------------- -->
    <h1>2. SPECIAL WISHES</h1>
    <form action="apis/special_wishes.php" method="post" enctype="multipart/form-data">
        <br><table>
            <tr><td>Name:</td><td><input required name="name" type="text" ></td></tr>
            <tr><td>Date:</td><td><input required name="date" type="date" ></td></tr>
            <tr><td colspan="2"><span class="danger">**images should be unique</span></td></tr>
            <tr><td>file1:</td><td><input required name="img1" type="file" ></td></tr>
            <tr><td>file2:</td><td><input required name="img2" type="file" ></td></tr>
            <tr><td>file3:</td><td><input required name="img3" type="file" ></td></tr>
            <tr><td>active</td><td><input required name="active" placeholder="( yes / no )" type="text"></td></tr>
        </table>
        <button name="tsubmit" type="submit" value="submit">submit</button>
    </form>
        <?php
            $q2ex = $con->query("SELECT * FROM `special_wishes`");$q2c = $q2ex->num_rows;
            $options2 = "<option>select</option>";
            //----------------
            echo '<br><table id="special_wishes"><tr><th>s.no</th><th>name</th><th>date</th><th>file1</th><th>file2</th><th>file3</th><th>active</th></tr>';
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
            echo "</table>
            <br><label>Delete Sno. : </label><select id='special_wishes_option'>".$options2."</select><button id='special_wishes' class=\"del\"'>Delete</button>
            <br><br>
            <button id='special_wishes' class='deactivate'>Deactivate All</button>
            <br><br>
            <label>Activate Sno. : </label>
            <select id='special_wishes_activate'>
                ".$options2."
            </select>
            <button id='special_wishes' class='activate'>Activate</button>
            ";
        ?>
    <!-- ------------------------------------------- -->
    <hr>
    <h1 id="weekend_trivia">3. WEEKEND TRIVIA</h1>
    <form action="apis/weekend_trivia.php" method="post" enctype="multipart/form-data">
        <br><table>
            <tr><td>NAME OF THE WEEK:</td><td><input name="name" required type="text"></td></tr>
            <tr><td>DATE:</td><td><input required name="date" type="date"></td></tr>
            <tr><td>LINK:</td><td><input required name="link" type="text"></td></tr>
            <tr><td>active</td><td><input required name="active" placeholder="( yes / no )" type="text"></td></tr>
        </table>
        <button name="thsubmit" type="submit" value="submit">submit</button>
    </form>
        <?php
            $q2ex = $con->query("SELECT * FROM `special_wishes`");$q2c = $q2ex->num_rows;
            $options2 = "<option>select</option>";
            //----------------
            echo '<br><table id="week_table"><tr><th>S.NO</th><th>NAME OF THE WEEK</th><th>DATE</th><th>LINK</th><th>WINNER-1</th><th>WINNER-2</th><th>WINNER-3</th><th>link active</th><th>winners display</th></tr>';
            $q2 = "SELECT * FROM `weekend_trivia`";
            $ex2 =mysqli_query($con,$q2);
            while($row = mysqli_fetch_assoc($ex2)){
                echo "<tr>
                        <td>".$row["sno"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["date"]."</td>
                        <td>".$row["link"]."</td>
                        <td>".$row["winner1"]."</td>
                        <td>".$row["winner2"]."</td>
                        <td>".$row["winner3"]."</td>
                        <td>".$row["active"]."</td>
                        <td>".$row["winners_display"]."</td>
                    </tr>";
                $options2 = $options2."<option>".$row["sno"]."</option>";
            }
            echo "</table>
            <br><label>Delete Sno. : </label><select id='weekend_trivia_option'>".$options2."</select><button id='weekend_trivia' class=\"del_data\"'>Delete</button>
            <br><br>
            <button id='weekend_trivia' class='deactivate'>Deactivate All</button>
            <br><br>
            <label>Activate Sno. : </label>
            <select id='weekend_trivia_activate'>
                ".$options2."
            </select>
            <button id='weekend_trivia' class='activate'>Activate</button>
            <br><br>
            <label>Display Winners Sno. : </label>
            <select id='winners_sno'>
                ".$options2."
            </select>
            <button id='weekend_trivia' class='display'>Activate</button>
            ";
        ?>
        <br>
        <br>
            <table>
                <tr><th>Sno.</th><th colspan="3">Update winners</th></tr>
                <tr><td rowspan="5"><?php echo "<select id='winners_sno' name='winners_sno'>".$options2."</select>";?></td></tr>
                <tr><td colspan="2"><span class="danger">**format is must and should!! otherwise winners will not be displayed (ex: studentname_1x0574_rgukt)</span></td><td rowspan="4"><button id="update_winners">Update winners</button></td></tr>
                <tr><td>WINNER-1(format:name_id_clg):</td><td><input required id="winner1" name="winner1" type="text" placeholder="name_id_college"></td></tr>
                <tr><td>WINNER-2(format:name_id_clg):</td><td><input required id="winner2" name="winner2" type="text" placeholder="name_id_college"></td></tr>
                <tr><td>WINNER-3(format:name_id_clg):</td><td><input required id="winner3" name="winner3" type="text" placeholder="name_id_college"></td></tr>
            </table>
            <!-- -------------------------------------------- -->
    <hr>
    <h1 id="notifications">4. NOTIFICATION POP-UP</h1>
    <form action="apis/add_notifications.php" method="post" enctype="multipart/form-data">
        <br><table>
            <tr><td>Notification name:</td><td><input required name="name" type="text"></td></tr>
            <tr><td>Date:</td><td><input required name="date"type="date"></td></tr>
            <tr><td>Message:</td><td><input required name="message" type="text"></td></tr>
            <tr><td>Link:</td><td><input required name="link" type="text"></td></tr>
            <tr><td>Active:</td><td><input required name="active" placeholder="( yes / no )" type="text"></td></tr>
        </table>
        <button name="thsubmit" type="submit" value="submit">submit</button>
    </form>
        <?php
            echo "<br><table><tr><td>Serial no.</td><td>Notification name</td><td>Date</td><td>Message</td><td>Link</td><td>Active</td><td>Operator</td></tr>";
            $options2 = "<option>select</option>";
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
                    $options2 = $options2."<option>".$row["sno"]."</option>";
            }
            echo "</table>
                <br><label>Delete Sno. : </label><select id='notifications_option'>".$options2."</select><button id='notifications' class=\"del_data\"'>Delete</button>
                <br><br>
                <button id='notifications' class='deactivate'>Deactivate All</button>
                <br><br>
                <label>Activate Sno. : </label>
                <select id='notifications_activate'>
                    ".$options2."
                </select>
                <button id='notifications' class='activate'>Activate</button>
                ";
                ?>
<!-- ------------------------------------------------------- -->
<hr>
    <h1>5.CONTACT FORM</h1>
    <!-- <form action="contact_form.php" method="post" enctype="multipart/form-data">
        <br><table>
            <tr><td>Name:</td><td><input required type="text" ></td></tr>
            <tr><td>Date:</td><td><input required type="date"></td></tr>
            <tr><td>Message:</td><td><input required type="text"></td></tr>
            <tr><td>Mail:</td><td><input required type="text"></td></tr>
        </table>
        <button name="thsubmit" type="submit" value="submit">submit</button>
    </form> -->
        <?php
            echo "<br><table><tr><td>Serial no.</td><td>Name</td><td>Date</td><td>Message</td><td>Mail</td><td>Operator</td></tr>";
            $options2 = "<option>select</option>";
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
                    $options2 = $options2."<option>".$row["sno"]."</option>";
                }
            echo "</table>
                <br><label>Delete Sno. : </label>
                <select id='contact_form_option'>
                    ".$options2."
                </select>
                <button id='contact_form' class=\"del_data\"'>Delete</button>";
        ?>
    <!-- ------------------------------------------------- -->
    <hr>
    <h1>6. SUGGESTION</h1>
    <!-- <form action="suggestions.php" method="post" enctype="multipart/form-data">
        <br><table>
            <tr><td>Date:</td><td><input required type="text"></td></tr>
            <tr><td>Message:</td><td><input required type="text"></td></tr>
        </table>
        <button  name="thsubmit" type="submit" value="submit">submit</button>
    </form> -->
        <?php
            echo "<br><table><tr><td>Serial no.</td><td>Date</td><td>Message</td><td>Operator</td></tr>";
            $q6 = "SELECT * FROM `suggestions`";
            $options2 = "<option>select</option>";
            $ex6 =mysqli_query($con,$q6);
            while($row = mysqli_fetch_assoc($ex6)){
                echo "<tr>
                        <td>".$row["sno"]."</td>
                        <td>".$row["date"]."</td>
                        <td>".$row["message"]."</td>
                    </tr>";
                    $options2 = $options2."<option>".$row["sno"]."</option>";
                }
            echo "</table>
                <br><label>Delete Sno. : </label>
                <select id='suggestions_option'>
                    ".$options2."
                </select>
                <button id='suggestions' class=\"del_data\"'>Delete</button>";
        ?>
    <!-- ------------------------------------------------- -->
</body>
</html>
<!-- 
truncate table `week_with_ecrush`;
alter table `week_with_ecrush` auto_increment = 0;
truncate table `weekend_trivia`;
alter table `weekend_trivia` auto_increment = 0;
truncate table `suggestions`;
alter table `suggestions` auto_increment = 0;
truncate table `special_wishes`;
alter table `special_wishes` auto_increment = 0;
truncate table `notifications`;
alter table `notifications` auto_increment = 0;
truncate table `contact_form`;
alter table `contact_form` auto_increment = 0;
-->
<?php
}else{
    echo "you cant pass me.";
    header("refresh:2,index.php");
}
?>