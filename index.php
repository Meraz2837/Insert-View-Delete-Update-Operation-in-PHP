<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Insert</title>
    <style>
        label,
        input {
            margin: 5px 0;
        }
    </style>
</head>

<body class="container">

    <form class="my-5" action="insert.php" method="post">
        <label class="form-label" for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Name" required>
        <label class="form-label" for="name">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
        <input type="submit" class="btn btn-primary" value="Insert">
    </form>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>