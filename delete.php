<?php
    include 'conn.php';
    $id = $_GET['id'];
    $query = "DELETE FROM bootstrapProducts WHERE pid = $id";
    $conn->query($query);
    header("location:http://localhost:8232/WE/Ecommerce_Bootstrap/index.php");
?>