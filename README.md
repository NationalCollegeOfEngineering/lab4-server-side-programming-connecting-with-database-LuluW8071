[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/1F_pcGNd)

### Form validation with Php and MySQL database

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Image Carousel</title>
</head>
<body>
  <div class="carousel-container">
    <div class="carousel">
      <img src="images/images1.png" alt="Register">
      <img src="images/images2.png" alt="Login">
      <img src="images/images3.png" alt="Homepage">
    </div>
  </div>
  
  <script src="script.js"></script>
</body>
</html>


#### Note:  
Change the **table_name** to your own table in MySQL database
```
<!-- home.php -->
$select_query = "SELECT * FROM table_name WHERE name = :username AND password = :password";
<!-- signup.php -->
$insert_query = "INSERT INTO table_name(name, password, address) VALUES (:username, :password, :address)";
```