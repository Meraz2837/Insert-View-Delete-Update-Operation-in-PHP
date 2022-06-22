<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Delete</title>

</head>

<body class="container">


    <h2 align="center">User Details</h2>

    <table align="center" class="table">
        <tr>
            <th>Name</th>
            <th>Password</th>
            <th>Delete</th>
        </tr>

        <?php

        include "config.php"; // Using database connection file here

        $records = mysqli_query($link, "SELECT * FROM user"); // fetch data from database

        while ($data = mysqli_fetch_array($records)) {
        ?>
            <tr>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td><a class="btn btn-danger" href="UserDelete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <!-- Footer -->
    <!-- Copyright -->
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>