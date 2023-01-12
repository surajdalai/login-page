<?php
include('../admin/include/connect.php');
include('header.php');
?>


<div class="inner-banner inner-bg4">
    <div class="container">
        <div class="inner-title text-center">
            <h3 style="color: black;">Our Latest Blogs</h3>
            <ul>
                <li>
                    <a href="index.html" style="color: black;">Home</a>
                </li>
                <li>
                    <i class='bx bxs-chevrons-right' style="color: black;"></i>
                </li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span>Blogs</span>
            <h2>Read Our Latest news</h2>
            
        </div>
        <div class="row pt-45">
        <?php
            $sql = "SELECT * FROM `blog`";
            $data = mysqli_query($connect,$sql);

            while($result = mysqli_fetch_assoc($data)){
    
        ?>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="../admin/images/blog/<?php echo $result['img'] ?> " alt="Blog Images">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-tag">
                            <a href="#"><span><?php echo $result['title'] ?></span></a>
                        </div>
                        <a href="blog-details.html">
                            <h3><?php echo $result['head'] ?></h3>
                        </a>
                        <p><?php echo $result['description'] ?></p>
                        <a href="blog-details.html" class="read-btn">Read More</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>