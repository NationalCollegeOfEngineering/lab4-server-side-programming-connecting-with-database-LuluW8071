<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-table {
            width: 70%;
            margin: 0 auto;
            margin-top: 30px;
            border: 2px solid white;
        }

        .custom-table td {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 10px;
            font-weight: 5px;
            color: white;
        }

        .custom-table tr:hover {
            background-color: rgba(255, 255, 255, 0.3);
            cursor: pointer;
            transform: scale(1.003);
            transition: transform 0.3s ease-in-out;
        }

    </style>
</head>
<body>
    <?php
    include('helper/ajax_database.php');

    if(isset($_GET['search'])){
        $pdo = connectDatabase();
        $select_query = "SELECT username, address, contact FROM users WHERE username LIKE '%".$_GET['search']."%'";
        $stmt = $pdo->query($select_query);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $search_keyword = $_GET['search'];

        if (count($rows) > 0) {
            echo '<div class="table-responsive">';
            echo '<table class="table table-bordered custom-table">';
            echo '<thead style="background-color: transparent;"><tr><th>Username</th><th>Address</th><th>Contact</th></tr></thead><tbody>';

            foreach ($rows as $row){
                echo '<tr>';
                echo '<td>' . $row['username'] . '</td>';
                echo '<td>' . $row['address'] . '</td>';
                echo '<td>' . $row['contact'] . '</td>';
                echo '</tr>';
            }

            echo '</tbody></table>';
            echo '</div>';
        } else {
            echo 'No results found.';
        }
    }
    ?>

    <script>
        $(document).ready(function() {
            $('.custom-table').addClass('table-striped table-hover');
        });
    </script>
</body>
</html>
