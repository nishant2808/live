<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "nishant";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die ("Connection failed: " . $conn->connect_error);
}

// $sql = "CREATE TABLE mytable (
//         id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         fullname VARCHAR(30) NOT NULL,
//         email VARCHAR(50) NOT NULL,
//         password VARCHAR(30) NOT NULL,
//         age INT(30) DEFAULT NULL,
//         gender VARCHAR(30) DEFAULT NULL,
//         image VARCHAR (255) NOT NULL,
//         reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

//     )";
// if ($conn->query($sql) === TRUE) {
//   echo "table create mytable successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }



?>