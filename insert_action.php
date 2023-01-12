<?php
include('include/connect.php');

if (isset($_POST['submit'])){

    $title = $_POST['title'];
    $head = $_POST['head'];
    $description = $_POST['description'];

    if(isset($_FILES['img'])){

    // echo "<pre>";
    // print_r($_FILES['img']);
    // echo "<pre/>";
    $image = $_FILES['img']['name'];
    $img_ex = pathinfo($image, PATHINFO_EXTENSION);
    $pname ="img_".rand(1111,9999).".".$img_ex;
    $tname = $_FILES["img"]["tmp_name"];

    move_uploaded_file($tname, 'images/blog/' .$pname);
    $sql = "INSERT INTO `blog`(`title`, `head`, `img`, `description`) VALUES ('$title','$head','$pname','$description')";
    // $sql = "INSERT INTO `blog` (title, head, img, description) VALUES ('$title','$head','$pname','$description')";
    $result = mysqli_query($connect,$sql);

    if($result){
        header("location:view_blog.php");
        // echo "data inserted succesfully";
        
    }else{
        echo "data insert failed";
    }
}
}

elseif(isset($_POST['submit-c'])){

    $title = $_POST['title'];
    $description = $_POST['description'];

    if(isset($_FILES['img'])){

    // echo "<pre>";
    // print_r($_FILES['img']);
    // echo "<pre/>";
    $image = $_FILES['img']['name'];
    $img_ex = pathinfo($image, PATHINFO_EXTENSION);
    $pname ="img_".rand(1111,9999).".".$img_ex;
    $tname = $_FILES["img"]["tmp_name"];

    move_uploaded_file($tname, 'images/client/' .$pname);
    $sql = "INSERT INTO `client`( `title`, `file`, `description`) VALUES ('$title','$pname','$description')";
    // $sql = "INSERT INTO `blog` (title, head, img, description) VALUES ('$title','$head','$pname','$description')";
    $result = mysqli_query($connect,$sql);

    if($result){
        header("location:view_client.php");
        // echo "data inserted succesfully";
        
    }else{
        echo "data insert failed";
    }
}
}

?> 