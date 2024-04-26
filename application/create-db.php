<?php 

require_once "./database/Application.php";
session_start();
$application = new Application();

var_dump($application->create($_POST['car_number'], $_POST['description']));
?>