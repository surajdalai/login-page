<?php
include("include/connect.php");
include ("include/security.php");

?>
<?php
include("include/header.php");
?>
<?php
include("include/sidebar.php");
?>

<style>
    .blog_mg {
        margin-top: 30px;
    }
</style>
</head>

<!-- /.row -->

<div class="container-fluid">
    <div class="col-xm-12 col-sm-12 col-12">
        <div class="row">
            <div class="col-xm-2 col-sm-2 col-12">
            </div>
            <div class="col-xm-10 col-sm-10 col-12 blog_mg">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">View Blog</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Heading</th>
                                            <th>File</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    <?php
                                    
                                    $sql = "SELECT * FROM `blog`";
                                    $data = mysqli_query($connect,$sql);
                                    $total = mysqli_num_rows($data);
                                    $a=1;
                                    while( $result = mysqli_fetch_assoc($data)){
                                    ?>
                                    <tr>
                                        <td><?php echo $a ?></td>
                                        <td><?php echo $result['title'] ?></td>
                                        <td><?php echo $result['head'] ?></td>
                                        <td><img width='30px' src="images/blog/<?php echo $result['img'] ?> " alt="Blog Images"></td>
                                        <td><?php echo substr_replace($result['description'], "...", 20);?></td>
                                        <td>
                                        <button class="btn btn-primary"><a href="update.php?updid=<?php echo $result['id'] ?>" class="text-light" >Update</a></button>
                                        <button class="btn btn-danger"><a href="delete.php?deleteid=<?php echo $result['id'] ?>"  class="text-light">Delete</a></button>
                                        </td>
                                    </tr>

                                    <?php

                                    $a++;
                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                </div>
                <!-- /.row -->
            </div>

        </div>
    </div>
</div>