<?php
    include "config.php";
    $sql = "select * from stud";
    $res = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <table border=5>
        <tr><td colspan="4" align="center"><a href="insert.php">Insert data</a></tr>
        <tr>
            <td>name
            <td>Email
            <td>Delete
            <td>Update    
        <tr>
        <?php while($data=mysqli_fetch_assoc($res)) {?>
        <tr>
            <td><?php echo $data['name']?>
            <td><?php echo $data['email']?>
            <td><a href="delete.php?id=<?php echo $data['id']?>">Delete
            <td><a href="update.php?id=<?php echo $data['id']?>">update
        </tr>
        <?php }?>
    </table>
    </center>
</body>
</html>