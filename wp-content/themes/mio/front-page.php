<?php get_header(); ?>
<?php 

while (have_posts()) {
    the_post(); ?>

    <h2 style="text-align: center">تتوفر منتجاتنا بثلاث روائح</h2><br>
    <div class="container">
        <div class="demo">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo get_theme_file_uri('/imgs/rose.jpg'); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Rose</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="<?php echo site_url('/rose'); ?>" class="btn btn-primary">Ingredients</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo get_theme_file_uri('/imgs/lovender.jpg'); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Lovender</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="<?php echo site_url('/lovender'); ?>" class="btn btn-primary">Ingredients</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo get_theme_file_uri('/imgs/chamomile.jpg'); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Chamomile</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a href="<?php echo site_url('/chamomile'); ?>" class="btn btn-primary">Ingredients</a>
                </div>
            </div>
            <!-- <img class="wajiha" src="<?php // echo get_theme_file_uri('/imgs/wajiha.jpeg'); ?>"></img> -->
        </div>
        
    </div>

    <?php
}
?>


<?php get_footer(); ?>
