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
                        <form action="insert_action.php" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Heading</label>
                                    <input type="text" class="form-control" name="head" placeholder="heading">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="img" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="description" id="editor" name="description" placeholder="description"></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>