<?php 

    include "config.php";
    $id = $_REQUEST['id'];
    $sql = "select * from stud where id = $id";
    $res = mysqli_query($con,$sql);
    $data = mysqli_fetch_assoc($res);
    
?>
<table>
        <form method="post">
            <tr>
                <td>Name : </td>
                <td><input type="text" name="nm" value=<?php echo $data['name'];?>>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="email" name="em" value=<?php echo $data['email'];?>>
            </tr>
            <tr>
                <td><input type="submit" name="sub">
            </tr>
        </form>
</table>
<?php 
if(isset($_POST['sub']))
{
    $nm = $_POST['nm'];
    $em = $_POST['em'];
    $sql = "update `stud` set name = '$nm' , email = '$em' where id=$id";
    $res = mysqli_query($con,$sql);
    if($res)
    {
        echo "<script>alert('updated');</script>";
    }
    header("location:index.php");                               
}
?>