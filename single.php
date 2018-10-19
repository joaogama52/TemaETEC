<?php get_header();?>

    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                the_title();
                the_content();
                
        ?>
        <?php if(!is_page ('contato')) { ?>

        <div class="row">
            </div>
            <?php } ?>
            <?php if(is_page ('contato')) {?>
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.63687874815!2d-46.437499085372465!3d-24.008596584144186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1c2b90e95c99%3A0x95c78d06367a5564!2sEtec+Praia+Grande+-+Sede!5e0!3m2!1spt-BR!2sbr!4v1539829492362" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>    
        
        <?php
        }
        }
        ?>
<?php } get_footer();?>