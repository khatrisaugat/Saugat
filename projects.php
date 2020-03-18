<?php include('includes/header.php');
?>
<div class="conatiner margin-top">
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide col-sm-3">
      	<div class="imgBx card">
      		<img src="images/Notebahadur.png" width="100%">
      	</div>
      	<h3>Notebahadur</h3>
      	<p>A students best friend.</p>
      </div>
      <div class="swiper-slide col-sm-3">
      	<div class="imgBx">
      		<img src="images/SIS.png" width="100%">
      	</div>
      	<h3>SIS</h3>
      	<p>School Information System</p>
      </div>
      <div class="swiper-slide col-sm-3">
      	<div class="imgBx">
      		<img src="images/goals.svg" width="100%">
      	</div>
      	<h3>Not Posted</h3>
      	<p>Comming Soon!!!</p>
      </div>
      <div class="swiper-slide col-sm-3">
      	<div class="imgBx">
      		<img src="images/goals.svg" width="100%">
      	</div>
      	<h3>Not Posted</h3>
      	<p>Comming Soon!!!</p>
      </div>
      <div class="swiper-slide col-sm-3">
      	<div class="imgBx">
      		<img src="images/goals.svg" width="100%">
      	</div>
      	<h3>Not Posted</h3>
      	<p>Comming Soon!!!</p>
      </div>
      <div class="swiper-slide col-sm-3">
      	<div class="imgBx">
      		<img src="images/goals.svg" width="100%">
      	</div>
      	<h3>Not Posted</h3>
      	<p>Comming Soon!!!</p>
      </div>
    
  </div>
  <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
  <!-- Swiper JS -->
  <script src="includes/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 70,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
  </div>
  <?php include('includes/footer.php');
?>