<?php get_header(); ?>

<main>
<!--the body loop-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(''); ?>
<?php endwhile; endif; ?>
    <p>***this is index.php</p>
    <?php get_sidebar(); ?>
    
    </main>

<?php get_footer(); ?>