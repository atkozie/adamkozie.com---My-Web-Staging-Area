<?php get_header(); ?>

<main>
<!--the body loop-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="post-excerpt">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php //the_content(''); replaced with the excerpt below ?>
    <p><?php the_time('F j, Y'); ?>, by <?php the_author() ?> in <?php the_category(', '); ?></p>
        
    <?php the_post_thumbnail( 'thumbnail' ); //show the blog post featured image?>
        <?php the_excerpt(); //blog post excerpt ?><a class="readmore" href="<?php the_permalink(); //display the URL ?>">Read More</a>
        </article>
<?php endwhile; endif; //end of body loop ?>
    <?php get_sidebar(); ?>
    
    </main>

<?php get_footer(); ?>