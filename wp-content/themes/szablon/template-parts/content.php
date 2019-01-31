<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
   <!-- Blog Post -->
   <div class="card mb-4">
          
            <?php the_post_thumbnail('large', array('class'=>'img-responsive'));?> 
            <div class="card-body">
              <h2 class="card-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
              <?php the_excerpt(); ?>
              <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p> -->
              <a href="<?php the_permalink();?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php the_time('j F, Y'); ?>
              <a href="#">Start Bootstrap</a>
            </div>
          </div>


</article>