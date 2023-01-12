<?php

include ("include/connect.php");
if(isset($_GET['deleteid']))
{
$id = $_GET['deleteid'];
$sql = "DELETE FROM `blog` WHERE id=$id";
$result = mysqli_query($connect,$sql);

if($result){
    header("location:view_blog.php");
    echo "deleted successfully";
}else{
    echo "delete failed";
}
}

elseif(isset($_GET['deleteidc']))
{
$id= $_GET['deleteidc'];    
$query = "DELETE FROM `client` WHERE `id` ='$id'";

$result = mysqli_query($connect,$query);

if($result){
    header("location:view_client.php");
    echo "deleted successfully";
}else{
    echo "delete failed";
}
}
?>