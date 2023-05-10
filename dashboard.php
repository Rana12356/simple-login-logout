<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}
if (isset($_POST['logout'])) {
    unset($_SESSION['email']);
    unset($_SESSION['user_type']);
    header('location:login.php');
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Dashboard</h3>
                    </div>
                    <div class="card-body">
                        <h1>Welcome <?php echo $_SESSION['email']; ?></h1>
                        <?php if ($_SESSION['user_type'] == 1) { ?>
                            <h3>You are admin</h3>
                        <?php } else { ?>
                            <h3>You are user</h3>
                        <?php } ?>
                        <form action="" method="post">
                            <button type="submit" name="logout" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>