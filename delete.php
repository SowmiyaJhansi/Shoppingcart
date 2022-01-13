<?php
    include("connect.php");
    $id = $_GET['id'];
    $q = "delete from listtb where Id = $id ";
    mysqli_query($con,$q);    
?>