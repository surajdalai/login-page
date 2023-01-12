<?php include('include/connect.php');

if(isset($_POST['updidc'])){

$id = $_POST['id_c'];
$title = $_POST['title'];
$description = $_POST['description'];

if(isset($_FILES['img'])){
$image = $_FILES['img']['name'];
$img_ex = pathinfo($image, PATHINFO_EXTENSION);
$pname ="img_".rand(1111,9999).".".$img_ex;
$tname = $_FILES["img"]["tmp_name"];

move_uploaded_file($tname, 'images/client/' .$pname);

$query="UPDATE `client` SET `title`='$title',`file`='$pname',`description`='$description' WHERE `id`='$id'";
$result = mysqli_query($connect,$query);

if($result){
    header("location:view_client.php");
    echo "update successfully";
}else{
    echo "update failed";
}
}
}
?>