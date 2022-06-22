<?php

include "config.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($link, "SELECT * FROM user WHERE id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if (isset($_POST['update'])) // when click on Update button
{
    $Countrycode = $_POST['name'];
    $Countryname = $_POST['password'];

    $edit = mysqli_query($link, "UPDATE user SET name='$Countrycode', password='$Countryname' WHERE id='$id'");

    if ($edit) {
        mysqli_close($link); // Close connection
        header("location:updateinfo.php"); // redirects to all records page
        exit;
    } else {
        echo mysqli_error($link);
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Moviebuzz</title>

</head>

<body class="bg-dark">



    <div class="text-center text-white">
        <h3>Update Data</h3>
        <form method="POST">
            <input type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="Enter User Name" Required>
            <input type="text" name="password" value="<?php echo $data['password'] ?>" placeholder="Enter Password" Required>
            <br><input class="btn btn-danger my-3 btnw" type="submit" name="update" value="Update">
        </form>
    </div>

</body>

</html>