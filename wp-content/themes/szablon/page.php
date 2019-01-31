
<?php get_header(); ?>


<?php if(has_post_thumbnail()) : ?>
<div class="parallax-window" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url(); ?>">
<h2>
      <?php the_title(); ?>
      
</h2>
      </div>
      <?php else :?>
      <h2>
      <?php the_title(); ?>
      
</h2>

<?php endif; ?>

      <h1>TO JA !</h1>
      <div class="container">
            <div class="row">


<?php while (have_posts()) : the_post(); 
get_template_part('template-parts/content', 'page');

if(comments_open()) :
    comments_template();
   endif;

endwhile; 

?>

</div>

      </div>


   </div>
    <!-- /.container -->

    


    <?php get_footer(); ?>