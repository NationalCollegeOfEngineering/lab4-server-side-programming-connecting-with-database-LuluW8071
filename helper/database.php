<?php 
function connectdatabase(){
    return new PDO('mysql:host=localhost;port=3306;dbname=register','root','');
}
?>