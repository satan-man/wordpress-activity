<?php
	/* Template Name:Home */
get_header();
 ?>
<style>
body
	{
		background-color: black;
		background-image: url("fv.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	div.background
	{
		border-bottom: 1px solid yellow;
		border:2px groove yellow;
		opacity: 0.6;
		height:100px;
		border-radius: 5px ;


	}
</style>
<div class="background">
				<a style="font-size:6vw; font-weight: bold; color: white; position:relative; left:1396px; bottom: 40px;">Pak-Shoe</a>
</div>
<div class="email">
	<p><img src="http://localhost/wordpress1/wp-content/uploads/2021/04/logo.jpg" alt="logo" style="float:left;width:70px;height:70px; position:relative; left:1325px; bottom: 105px;">
</div>
	 <div class="container">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="http://localhost/wordpress1/wp-content/uploads/2021/04/x.jpg" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="http://localhost/wordpress1/wp-content/uploads/2021/04/zz.jpg" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="http://localhost/wordpress1/wp-content/uploads/2021/04/z.jpg" alt="Third slide">
			    </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>


	</div>

 	<?php get_footer(); ?>

