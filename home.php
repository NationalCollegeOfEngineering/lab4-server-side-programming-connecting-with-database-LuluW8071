<?php
// session_start();
// include('helper/database.php');
// // error_reporting(0);

// if ($_SESSION['is_login'] != 'yes') {
//     // $username = $_POST['name'];
//     // $password = $_POST['password'];
//     if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin123') {
//         // set session/ cookies
//         $_SESSION['is_login'] = 'yes';
//         echo 'sdasd';

//     } else {
//         $_SESSION['is_login'] = 'no';
//         session_destroy();
//         header("location: /home/index.php");
//     }
// }

require_once "helper/database.php";
$pdo = connectDatabase();

$login_error = false;
$login_successful = false;

if (isset($_POST['login']) && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query check if the user exists in  database
    $select_query = "SELECT * FROM user WHERE name = :username AND password = :password";
    $stmt = $pdo->prepare($select_query);
    $stmt->execute(array(':username' => $username, ':password' => $password));
    $user = $stmt->fetch();

    if ($user) {
        $login_successful = true;
    } else {
        $login_error = true;
    }
}

if ($login_error) {
    header("Location: /home/index.php");
    echo "Login error";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <title>Database</title>
</head>
<style>
    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: transparent;
        border: .5px white solid;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
    }
</style>

<body>
    <div class="content">
        <div class="container">
        <?php if ($login_successful) : ?>
            <h2 class="mb-2">Welcome to the home page. The post are:</h2> <br/>
            <div class="table-responsive custom-table-responsive">
                <table class="table custom-table">
                    <thead>
                        <tr>
                            <th scope="col">SN</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Country</th>

                        </tr>
                    </thead>
                    <?php
                    $pdo = connectdatabase()
                        ?>
                    <tbody>
                        <tr scope="row">
                            <td>1</td>
                            <td>Rodney Floyd</td>
                            <td style="color:aqua">eddethe@aji.ph</td>
                            <td>Kenya</td>
                        </tr>
                        <tr class="spacer">
                            <td colspan="100"></td>
                        </tr>
                        
                        <tr scope="row">
                            <td>2</td>
                            <td>Ola Ball</td>
                            <td style="color:aqua">usa@gognuzli.sd</td>
                            <td>Burkina Faso</td>
                        </tr>
                        <tr class="spacer">
                            <td colspan="100"></td>
                        </tr>

                        <tr scope="row">
                            <td>3</td>
                            <td>Cordelia McGee</td>
                            <td style="color:aqua">wes@ta.su</td>
                            <td>Sudan</td>
                        </tr>
                        <tr class="spacer">
                            <td colspan="100"></td>
                        </tr>

                        <tr scope="row">
                            <td>4</td>
                            <td>Christian Gutierrez</td>
                            <td style="color:aqua">nutiv@milakaju.eu</td>
                            <td>Uganda</td>
                        </tr>
                        <tr class="spacer">
                            <td colspan="100"></td>
                        </tr>

                        <tr scope="row">
                            <td>5</td>
                            <td>Hunter Torres</td>
                            <td style="color:aqua">riw@no.as</td>
                            <td>Sudan</td>
                        </tr>
                        <tr class="spacer">
                            <td colspan="100"></td>
                        </tr>
                    </tbody>

                </table>
                <footer>
                    <?php include_once('layout/footer.php'); ?>
                    
                </footer>
            </div>
            <br>


            <div style="display: flex; justify-content: center;">
                <a href="#" class="styled-button-pagination">&lt;&lt;</a>
                &nbsp;&nbsp;
                <a href="#" class="styled-button-pagination">&gt;&gt;</a>
            </div>
            <?php endif?>
            <div class="btn"> 
                <a href="/home/logout.php" style="color:white">Logout</a>
                </div>
        </div>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>