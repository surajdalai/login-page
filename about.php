
<?php
include('../admin/include/connect.php');
include('header.php');
?>

<div class="inner-banner inner-bg1">
<div class="container">
<div class="inner-title text-center">
<h3 style="color: black;">About Us</h3>
<ul>
<li>
<a href="index.html" style="color: black;">Home</a>
</li>
<li>
<i class='bx bxs-chevrons-right' style="color: black;"></i>
</li>
<li>About</li>
</ul>
</div>
</div>
</div>


<div class="about-area about-max pt-100 pb-70">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-5 col-xxl-6">
<div class="about-img about-ml">
<img src="assets/img/about/3.jpg" alt="About Images">
</div>
</div>
<div class="col-lg-7 col-xxl-6">
<div class="about-content about-width">
<span>About Us</span>
<h2>Honesty And Creative Internet Marketing Agency, CNSWEBSOLUTION PVT LTD</h2>
<p>
    The USA-based Internet marketing solutions provider CNSWEBSOLUTION provides cutting-edge SMO services, SEO tactics, web building, and various other Internet marketing-related services.
</p>
<p>
    As a top brand, our goal is to provide you with the greatest SEO and digital marketing options to boost a company's online presence and keep its website at the top of the search results. We collaborate closely with our esteemed clients to individually tailor the digital marketing services and strategies to meet their particular business requirements.
</p>
<div class="about-btn">
<a href="#" class="default-btn">Know More</a>
</div>
</div>
</div>
</div>
</div>
</div>



<div class="counter-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-3 col-sm-6 col-md-3">
<div class="single-counter">
<i class='flaticon-success'></i>
<h3><span class="counter">68</span></h3>
<p>5 Star Rating</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-3">
<div class="single-counter">
<i class='flaticon-launch'></i>
<h3><span class="counter">362</span>+</h3>
<p>Projects Done</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-3">
<div class="single-counter">
 <i class='flaticon-customer'></i>
<h3><span class="counter">245</span>+</h3>
<p>Happy Clients</p>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-3">
<div class="single-counter">
<i class='flaticon-team-building'></i>
<h3><span class="counter">40</span>+</h3>
<p>Expert Members</p>
</div>
</div>
</div>
</div>
</div>


<div class="client-area pt-100 pb-70">
<div class="container-fluid p-0">
<div class="section-title text-center">
<span>Testimonial</span>
<h2>Our Clients Feedback</h2>
<p>
It is a long established fact that a reader will be distracted by
the readable content of a page when looking at its layout.
</p>
</div>
<div class="client-slider owl-carousel owl-theme">

        <?php
            $sql = "SELECT * FROM `client`";
            $data = mysqli_query($connect,$sql);

            while($result = mysqli_fetch_assoc($data)){
    
        ?>

<div class="client-item">
<div class="client-item-img">
<img src="../admin/images/client/<?php echo $result['file'] ?>" alt="Client Images">
</div>
<h3><?php echo $result['title']?></h3>
<p><?php echo $result['description']?></p>
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