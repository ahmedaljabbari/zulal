<?php get_header(); ?>
<?php 

while (have_posts()) {
    the_post(); ?>
    <h3>Ingredients</h3>
    <div class="poster">
        
        <img src="<?php echo get_theme_file_uri('/imgs/rose.jpg'); ?>">
        
        <ul class="">
            <li class="">Aqua</li>
            <li class="">Cocamidopropyl Betaine</li>
            <li class="">Sodium Laureth Sulfate</li>
            <li class="">Lauryl Glucoside</li>
            <li class="">Sodium Chloride</li>
            <li class="">Glycerin,peg-40 Hydrogenated Castor Oil</li>
            <li class="">Parfume</li>
            <li class="">Rose Centifolia Flower Extract</li>
            <li class="">Citric Acid, Benzyl Alcohol</li>
            <li class="">Methylchloroisothiazolinone and MethylisothiazolinoneTocopheryl Acetate</li>
            <li class="">Tea Tree Oil</li>
        </ul>
    </div>
        
    <?php
}
?>

<?php get_footer(); ?>