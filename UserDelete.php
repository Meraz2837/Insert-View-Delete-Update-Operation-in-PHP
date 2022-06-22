<?php

include "config.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($link, "DELETE FROM user WHERE id = '$id'"); // delete query

if ($del) {
    mysqli_close($link); // Close connection
    header("location:deleteinfo.php"); // redirects to all records page
    exit;
} else {
    echo "Error deleting record" . mysqli_error($link); // display error message if not delete
}
