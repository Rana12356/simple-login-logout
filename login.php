<?php
session_start();

//user_type = 1 = admin
//user_type = 2 = user

if (isset($_SESSION['email'])) {
    header('location:dashboard.php');
}

if (isset($_POST['submit'])) {
    $_SESSION['email'] = $_POST['email'];
    if ($_SESSION['email'] == 'rana@rana.com') {
        $_SESSION['user_type'] = 1;
    } else {
        $_SESSION['user_type'] = 2;
    }
    header('location:dashboard.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <label class="w-100 mt-2">
                                Email
                                <input type="email" name="email" class="form-control" placeholder="Your Email">
                            </label>
                            <label class="w-100 mt-2">
                                Password
                                <input type="password" name="password" class="form-control" placeholder="Your Password">
                            </label>
                            <div class="d-grid mt-2">
                                <button type="submit" name="submit" class="btn btn-outline-info" value="submit">Login</button>
                            </div>
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