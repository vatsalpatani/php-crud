<?php

    include "config.php";
    $id = $_REQUEST['id'];
    $sql = "delete from stud where id = $id";
    $res = mysqli_query($con,$sql);
    header("location:index.php");

?>