<?php get_header(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h2>Seja bem vindo ao meu novo tema</h2>
            </div>
        </div>
    </div>
    
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
            if ($cont <= 3){
     ?>
     <div class="col-md-4">
     <div class="card">
  <img src="<?php the_post_thumbnail (); ?>
  <div class="container">
 
    <h4 ><b><?php the_title(); ?></b></h4> 
    <p><?php the_excerpt(); ?></p>
    <a class="btn btn-primary" href="<?php the_permalink();?>">Leia mais </a>
  </div>
  </div>
</div>
          <!-- <div class="col-md-4"> <div class="img-responsive img-thumbnail foto"><?php the_post_thumbnail (); ?></div>
               <h3><?php the_excerpt(); ?></h3>
              
               <p><php the_excerpt(); ?></p>
               <a class="btn btn-primary" href="<?php the_permalink();?>">Leia mais </a>
            </div>   -->
            
<?php
}}}
?>


<?php get_footer();?>