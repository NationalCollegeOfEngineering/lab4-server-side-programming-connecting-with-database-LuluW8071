<?php
require_once "helper/database.php";
$pdo = connectDatabase();

$signup_success = false;

if (isset($_POST['signup']) && isset($_POST['username'])) {
    $insert_query = "INSERT INTO user(name, password, address) VALUES (:username, :password, :address)";
    $stmt = $pdo->prepare($insert_query);
    $result = $stmt->execute(
        array(
            ':username' => $_POST['username'],
            ':password' => $_POST['password'],
            ':address' => $_POST['address']
        )
    );

    if ($result) {
        $signup_success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form action="" method="post">
            <div class="container">
                <header class="text-center p-3">
                    <h3 class="font-weight-bold">Register Now</h3>
                </header>
                <div class="row g-3 align-items-center justify-content-center">
                    <div class="col-auto">
                        <input type="text" name="username" placeholder="Username" id="" class="form-control my-2 ">
                    </div>
                </div>

                <div class="row g-3 align-items-center justify-content-center">
                    <div class="col-auto">
                        <input type="password" name="password" placeholder="Password" id=""
                            class="form-control my-2">
                    </div>
                </div>

                <div class="row g-3 align-items-center justify-content-center">
                    <div class="col-auto">
                        <input type="text" name="address" placeholder="Address" id="" class="form-control my-2">
                    </div>
                </div>

                <div class="row justify-content-center my-3">
                    <div class="col-auto">
                    <button type="submit" class="btn btn-primary" name="signup">Submit</button>                        </div>
                </div>

                <?php if ($signup_success): ?>
        <div class="text-center"> 
            Signup Successfully! <a href="/home/">Login</a>
        </div>
    <?php endif; ?>
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>