<?php include "database.php";
$username=$password=$success="";
if(isset($_POST['submit'])){
    $username=$_POST['email'];
    $password=$_POST['password'];

$sql= "SELECT * FROM `myTABLE` where email = '$username' AND password = '$password' ";
 
$result = $conn->query($sql);

           if($result->num_rows>0){
header("location:table.php");
           }
           else{
            $success = "you email or password doesn't match";
           }

           
    


 }

?>
<html>
    <head>
        <style>
            body{
                background: #E9AE30;
                padding: 50px;
                font-size:25px;
            }
            .btn{
                background-color:#3979CD;
                color:whitesmoke;
                display: flex;
                
            }
            </style>
</head>
    <body>
        <center>
        <h1> REGISTER FORM</h1>
        <form method="POST">
            <table>
             <tr>
           <td> Username:</td>
            <td><input type="email" name="email" required></td>
        </tr>
           <tr>
           <td> Password:</td>
            <td><input type="password" name="password" required></td>
        </tr>
              <tr>
                <td><br>
            <button type="submit" name="submit" class="btn">Register</button>
        </td>
        </tr>
        </table>        
</form>
<div>

<?php echo $success;     ?>
        </div>
        </center>
</body>
</html>