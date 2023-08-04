<?php
session_start();
error_reporting(0);
if (isset($_SESSION['is_login']) || $_SESSION['is_login'] == 'yes') {
    header("Location: /home/home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
    <form action="home.php" method="post">
        <div class="container">
            <?php
            include_once('layout/header.php');
            ?>
            <div class="row g-3 align-items-center justify-content-center">
                <div class="col-auto">
                    <input type="text" name="username" id="name" placeholder="Username" class="form-control my-2 " Required>
                </div>
            </div>

            <div class="row g-3 align-items-center justify-content-center">
                <div class="col-auto">
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control my-2 " Required>
                </div>
            </div>

            <div class="row justify-content-center"> 
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary my-3" name="login">Login</button>
                </div>
            </div>

            <?php if ($login_error) : ?>
                            <div class="alert alert-danger text-center" role="alert" style="color: black;">
                                Login error. Incorrect username or password. Please try again.
                            </div>
                        <?php endif; ?>
            
            <div class="text-center"> 
                Do not have an account?
                <a href="/home/signup.php">Register</a>
            </div>
            
            <?php
            include_once('layout/footer.php');
            ?>
        </div>
    </form>
    <br>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>