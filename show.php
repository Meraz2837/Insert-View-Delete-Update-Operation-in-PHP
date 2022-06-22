<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <h2>User Details</h2>

    <table class="table table-striped" align="center">
        <tr>
            <td>Name</td>
            <td>Password</td>
        </tr>

        <?php

        include "config.php"; // Using database connection file here

        $records = mysqli_query($link, "SELECT * FROM user"); // fetch data from database

        while ($data = mysqli_fetch_array($records)) {
        ?>
            <tr>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['password']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <!-- Footer -->
    <!-- Copyright -->

</body>

</html>