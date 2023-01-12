<?php include('include/connect.php');

if(isset($_POST['update'])){

    $id = $_POST['uid'];
    $title = $_POST['title'];
    $head = $_POST['head'];
    $description = $_POST['description'];

    if(isset($_FILES['img'])){
    $image = $_FILES['img']['name'];
    $img_ex = pathinfo($image, PATHINFO_EXTENSION);
    $pname ="img_".rand(1111,9999).".".$img_ex;
    $tname = $_FILES["img"]["tmp_name"];

    move_uploaded_file($tname, 'images/blog/' .$pname);

    $query="UPDATE `blog` SET `title`='$title',`head`='$head',`img`='$pname',`description`='$description' WHERE `id`='$id'";
    $result = mysqli_query($connect,$query);

    if($result){
        header("location:view_blog.php");
        echo "update successfully";
    }else{
        echo "update failed";
    }
}
}


?>