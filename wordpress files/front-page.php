<?php get_header(); ?>

<main>
<!--the body loop-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(''); ?>
<?php endwhile; endif; ?>
    <p>***this is front-page.php</p>
    <?php get_sidebar(); ?>
    <div class="textimage">
<img src="../images/ak-logo.jpg" alt="AK logo">
<h1>Home</h1>
<hr>
<h2>Template</h2>
</div><!--end textimage-->
    
    <section class="slider">
    <div class="flexslider">
          <ul class="slides">
            <li><img src="http://www.adamkozie.com/images/banner-afropop.jpg" alt="afropop"></li>
              <li><img src="http://www.adamkozie.com/images/banner-class.jpg" alt="class"></li>
              <li><img src="http://www.adamkozie.com/images/banner-exex.jpg" alt="exex"></li>
              <li><img src="http://www.adamkozie.com/images/banner-lasara.jpg" alt="lasara"></li>
          </ul>
        </div><!--end flexslider-->
        </section>

<div class="text">
<p>This is the home template page for WEB170.</p>
<hr class="intro">
</div><!--end text-->
    
    <div class="ctas">
        <div class="cta1cont">
            <div class="cta1">
                <h3>About Me</h3>
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <?php the_content(''); //loop one?>
                <?php endwhile; endif; ?>
            </div><!--end cta1-->
            <div class="cta2">
                <h3>Latest Posts</h3>
                <ul>
                <?php rewind_posts(); //stop loop?>
                <?php query_posts('showposts=4'); ?>
                <?php while(have_posts()): the_post(); //loop two?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                    </ul>
            </div><!--end cta2-->
        </div><!--end cont-->
        <div class="cta3">
        <h3>Contact</h3>
            <p>555-555-5555</p>
            <p>atkozie@gmail.com</p>
            <p>facebook.com/adam.kozie</p>
        </div>
    </div><!--end ctas-->

<div class="banner">
<img src="../images/banner-class.jpg" alt="Lasara banner" />
</div><!--end banner-->
    <div class="text">
<p>An 'ASAP' website I made quick and dirty when fitness instructor Lasara Jarvis needed something up online immediately.</p>
</div><!--end text-->
    
 
    
    
    </main>

<?php get_footer(); ?>