<?php
    include "config.php";
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
    <form>
        <table>
            <tr><td>Name:</td><td><input type="text" id="onename"></td></tr>
            <tr><td>Date:</td><td><input type="text" id="onedate"></td></tr>
            <tr><td>file1:</td><td><input type="file" id="onef1"></td></tr>
            <tr><td>file2:</td><td><input type="file" id="onef2"></td></tr>
            <tr><td>file3:</td><td><input type="file" id="onef3"></td></tr>
        </table>
        <button id="onesubmit" type="submit" value="submit">submit</button>
    </form>
    <table border="5px">
        <tr><th>s.no</th><th>name</th><th>date</th><th>file1</th><th>file2</th><th>file3</th><th>operator</th></tr>
    <?php
        $q1 = "SELECT * FROM `week_with_ecrush`";
        while($row = mysqli_fetch_array(mysqli_query($con,$q1))){
            echo "<tr>
                    <td>".$row["sno"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["date"]."</td>
                    <td>".$row["file1_name"]."</td>
                    <td>".$row["file2_name"]."</td>
                    <td>".$row["file3_name"]."</td>
                    <td>".$row["operation"]."</td>
                </tr>";
        }
    ?>        
    </table>
    <h1 style="text-align:center;">SPECIAL WISHES</h1>

    <form>
        <table>
      <tr><td>Name:</td><td><input type="text" ></td></tr>
     <tr> <td>Date:</td><td><input type="text" ></td></tr>
      <tr><td>file1:</td><td><input type="file" ></td></tr>
      <tr><td>file2:</td><td><input type="file" ></td></tr>
      <tr><td>file3:</td><td><input type="file" ></td></tr>
      <tr><td>active</td><td><input type="text"></td></tr>
    </table>
    <button type="submit" value="submit">submit</button>
    </form>
    <table border="5px">
        <tr>
            <th>s.no</th>
            <th>name</th>
            <th>date</th>
            <th>file1</th>
            <th>file2</th>
            <th>file3</th>
            <th>active</th>
            <th>operator</th>
            
        </tr>
        <tr>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
         </tr>
        
    </table>
</div>
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
</html>
