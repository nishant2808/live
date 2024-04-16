<?php include "database.php";
$fullname = $email = $password = $age = $gender = $success = "";
if (isset ($_POST['submit'])) {
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $gender = isset ($_POST['gender']);
    $filename = time() . '_' . $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $folder = "image/" . $filename;
    move_uploaded_file($temp_name, $folder);
    // if (move_uploaded_file($temp_name, $folder)) {
    //     echo "file moved";

    // } else {
    //     echo "not";
    // }






    $sql = "INSERT INTO `myTABLE` (fullname, email, password, age, gender,image)  VALUES ('$fullname', '$email', '$password', '$age', '$gender','$filename')";

    $result = $conn->query($sql);

    if ($result == 1) {
        header("location:dblogin.php");
    } else {
        $success = "you are not register" . $conn->error;
    }
}



?>
<html>

<head>
    <style>
        body {
            background: #E9AE30;
            padding: 50px;
            font-size: 25px;
        }

        .btn {
            background-color: #3979CD;
            color: whitesmoke;
            display: flex;

        }
    </style>
</head>

<body>
    <center>
        <h1> REGISTER FORM</h1>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Fullname:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td> E-mail:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td> Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td><input type="number" name="age"></td>
                </tr>
                <tr>
                    <td> <label name="gender">Gender:</label></td>
                    <td> Male:
                        <input type="radio" value="male" name="gender">
                        Female:
                        <input type="radio" value="female" name="gender">
                        Other:
                        <input type="radio" value="other" name="gender">
                    </td>
                </tr>
                <tr>
                    <td>Images Upload</td>
                    <td> <input type="file" name="image">
                    </td>
                </tr>
                <tr>
                    <td><br>
                        <button type="submit" name="submit" class="btn">Register</button>
                    </td>
                </tr>
            </table>
        </form>

        <div>
            <?php echo $success; ?>
        </div>
    </center>
</body>

</html>