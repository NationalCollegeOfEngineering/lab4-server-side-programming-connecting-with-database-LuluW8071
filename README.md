[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/1F_pcGNd)

### Form validation with Php and MySQL database
  <div class="carousel-container">
    <div class="carousel">
      <img src="images/Images1.png" alt="Register">
      <img src="images/Images2.png" alt="Login">
      <img src="images/Images3.png" alt="Homepage">
    </div>
  </div>

### Ajax Search
<img src="images/Images4.png" alt="AjaxSearch">

#### Note:  
Change the **table_name** to your own table in MySQL database
```
<!-- home.php -->
$select_query = "SELECT * FROM table_name WHERE name = :username AND password = :password";

<!-- signup.php -->
$insert_query = "INSERT INTO table_name(name, password, address) VALUES (:username, :password, :address)";

<!-- server.php -->
$select_query = "SELECT username, address, contact FROM table_name WHERE username LIKE '%".$_GET['search']."%'";
```
