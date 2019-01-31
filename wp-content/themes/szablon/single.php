

<?php get_header(); ?>
     <div class="container">

      <div class="row"> 

<?php while (have_posts()) : the_post(); ?>
<div id="post-<?php the_ID();?>" <?php post_class(); ?>>
   <!-- Blog Post -->
   <div class="card mb-4">
          
            <?php the_post_thumbnail('full', array('class'=>'img-responsive'));?> 
            <div class="card-body">
              <h2 class="card-title"><?php the_title(); ?></h2>
              <?php the_content(); ?>
              <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p> -->
            
            </div>
            <div class="card-footer text-muted">
              Posted on <?php the_time('j F, Y'); ?>
              <a href="#">Start Bootstrap</a>
            </div>
          </div>


</div>
<?php edit_post_link(); ?>
<?php endwhile; 
?>

      </div>


   </div>
    <!-- /.container -->

    


    <?php get_footer(); ?>