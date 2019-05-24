<?php


while(have_posts()){
    the_post(); ?>
    this a page mother fucka
    <h1> <?php the_title() ?></h1>
    <p> <?php the_content() ?> </p>
<?php }
?>


