<?php
include ("database.php");
$sql = "SELECT *FROM mytable";
$result = $conn->query($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .image {
        height: 100px;
        width: 60px;

    }
</style>

<body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">image</th>
                <th scope="col">id</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Age</th>
                <th scope="col">gender</th>

            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if (!empty ($row["image"])) {
                        $img = $row["image"];
                    } else {
                        $img = "dummy.jpeg";
                    }



                    ?>
                    <tr>
                        <td>

                            <img src="image/<?php echo $img; ?>" class="image">

                        </td>
                        <td>
                            <?php echo $row['id']; ?>
                        </td>
                        <td>
                            <?php echo $row['fullname']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        <td>
                            <?php echo $row['password']; ?>
                        </td>
                        <td>
                            <?php echo $row['age']; ?>
                        </td>
                        <td>
                            <?php echo $row['gender']; ?>
                        </td>


                    </tr>
                    <?php
                }

            } ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>