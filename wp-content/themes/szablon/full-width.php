
<?php get_header();
/*
Template Name: Full Width(Pelny rozmiar)
*/
?>

<!-- PARALLAX -->
<?php if(has_post_thumbnail()) : ?>
	<div class="parallax-window" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url(); ?>">
		<div class="text-center">
			<h2>
			Lorem Ipsum placeholder text for use in your graphic.
			</h2>
		</div>
    </div>
<?php endif; ?>

<!-- BOX_1 -->
<div class="container" id="box_1">
	<div class="row">
		<div class="col-sm-12 col-md-6">
			<?php while (have_posts()) : the_post(); ?>
				<h1>Lorem ipsum dolor sit amet</h1>
				<?php the_content(); ?>
			<?php endwhile; ?>
    	</div>
    	<div class="col-sm-12 col-md-6">
		<img src="http://127.0.0.1/wordpress/wp-content/uploads/2019/01/sniadanie-1-1024x576.jpg" alt="Obrazek posiada pusty atrybut alt; plik o nazwie sniadanie-1-1024x576.jpg" alt="Placeholder" class="rounded">
	    </div>
  	</div>
</div>

<!-- BOX_2_CARD -->
<div class="box">
    <div class="container">
     	<div class="row">			 
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="box-part text-center">
                   	<i class="fa fa-automobile fa-3x" aria-hidden="true"></i>  
				 	<div class="title">
						<h4>Instagram</h4>
					</div>    
					<div class="text">
						<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
					</div>
				</div>
			</div>	 
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="box-part text-center">
					    <i class="fa fa-hotel fa-3x" aria-hidden="true"></i>
                	<div class="title">
							<h4>Twitter</h4>
						</div>
						<div class="text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>        
					 </div>
				</div>	 
				
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="box-part text-center">           
                        <i class="fa fa-wifi fa-3x" aria-hidden="true"></i>            
						<div class="title">
							<h4>Facebook</h4>
						</div>           
						<div class="text">
							<span>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam. Assum decore te sed. Elitr scripta ocurreret qui ad.</span>
						</div>          
					</div>
			</div>	 
		</div>		
    </div>
</div>

<!-- BOX_3 -->
<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-6">
			<img src="http://127.0.0.1/wordpress/wp-content/uploads/2019/01/hotel2-1024x678.jpg" alt="Placeholder" class="rounded">
	    </div>
		
		<div class="col-sm-12 col-md-6">
		<?php while (have_posts()) : the_post(); ?>
				<h1>Lorem ipsum dolor sit amet</h1>
				<?php the_excerpt(); ?>
		<?php endwhile; ?>
		</div>
    
	</div>
</div>


<!-- BOX_4 -->
<div class="container-fluid">
    <div class="row">	
		<div class="col-lg-12 ">
		<div class="text-center">
			 <h1>Lorem ipsum dolor sit amet, id quo eruditi eloquentiam.</h1>
		 	<button type="button" class="btn btn-dark btn-lg"><a class="link" href="#box_1">More..</a></button>
		</div>	
		</div>
	</div>
</div>


<!-- BOX_5_MAPS -->
<h1 class="text-center">
	Lorem ipsum dolor 
</h1>

<div class="container-fluid">
	<div class="row">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6294.282016456051!2d22.508902954880558!3d51.23956660343489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472259d24b5a6357%3A0xfdb661add44d0054!2sE.Leclerc!5e0!3m2!1spl!2spl!4v1548961500143" width="100%" height="450" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

<!-- FOOTER -->
    <?php get_footer(); ?>