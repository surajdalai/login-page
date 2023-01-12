<?php
include("include/connect.php");
include("include/security.php");

$id = $_GET['updid'];

$query = "SELECT * FROM `blog` where `id`= '$id'";
$data = mysqli_query($connect, $query);
$result = mysqli_fetch_assoc($data);
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

    .mg_lft {
        margin-left: 100px;
    }
</style>

</head>

<body>
    <div class="container">
        <div class="col-xm-12 col-sm-12 col-12">
            <div class="row">
                <div class="col-xm-2 col-sm-2 col-12">
                </div>
                <div class="col-xm-10 col-sm-10 col-12 blog_mg">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Blog</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="update_action.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-outline">
                                    <input type="hidden" value="<?php echo $id ?>" name="uid" class="form-control form-control-lg" />
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" value="<?php echo $result['title'] ?>" class="form-control" name="title" placeholder="title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Heading</label>
                                    <input type="text" value="<?php echo $result['head']?>" class="form-control" name="head" placeholder="heading">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile" class="mg_lft">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <img src="images/blog/<?php echo $result['img'] ?>" alt="image" width="100px">
                                            <input type="file" class="custom-file-input mg_lft" name="img" id="exampleInputFile">
                                            <label class="custom-file-label mg_lft">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="description" id="editor" placeholder="description">
                                    <?php echo $result['description']?>
                                    </textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>