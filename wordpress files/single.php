<?php get_header(); ?>

<main>
<!--the body loop-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" class="post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_time('F j, Y'); ?>, by <?php the_author() ?> in <?php the_category(', '); ?></p>
    <?php the_post_thumbnail( 'large' ); //show the blog post featured image?>
<?php the_content(''); ?>
<?php endwhile; endif; ?>
        </article>
    <?php get_sidebar(); ?>
    
    </main>

<?php get_footer(); ?>