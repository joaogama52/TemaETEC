<?php get_header(); ?>
 
    <div class="row slider">
        <div class="col-md-12">
            <?php masterslider(2); ?>
            <br>
        </div>
    </div>
    <div class="row">
    <?php
    $cont = 0;
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                $cont++;
            if ($cont <= 6){
     ?>
     <div class="col-md-4">
     <div class="card">
  <div class="img-responsive img-thumbnail foto"><?php the_post_thumbnail(); ?></div>
  <div class="container">
 
    <h4 ><b><?php the_title(); ?></b></h4> 
    <p><?php the_excerpt(); ?></p>
    <a class="btn btn-primary" href="<?php the_permalink();?>">Leia mais </a>
  </div>
  </div>
</div>
    
            
<?php
}}}
?>


<?php get_footer();?>