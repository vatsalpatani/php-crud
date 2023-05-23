<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form>
            <tr>
                <td>Name : </td>
                <td><input type="text" name="nm">
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="email" name="em">
            </tr>
            <tr>
                <td><input type="submit" name="sub">
            </tr>
        </form>
    </table>
</body>
</html>

<?php
    include "config.php";
    if(isset($_GET['sub']))
    {
        $nm = $_GET['nm'];
        $em = $_GET['em'];
        $sql = "insert into `stud` (name,email) values('$nm','$em')";
        $res = mysqli_query($con,$sql);
        if($res)
        {
            echo "<script>alert('inserted');</script>";
        }
        header("location:index.php");                               
    }
?>