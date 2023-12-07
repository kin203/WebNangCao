<?php
session_start();

    $id = $_GET['id'];
    $sql = "DELETE FROM product WHERE id_pr = $id";
    $query = mysqli_query($connect, $sql);

    header('location: home.php');
    
    if (!isset($_SESSION['user'])) {
    // code...
    header('location:../login.php');
}
	
?>