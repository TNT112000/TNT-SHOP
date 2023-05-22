<?php 

unset($_SESSION["username"]);
unset($_SESSION["is_login"]);

header('location: ../?page=login')


?>

