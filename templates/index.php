<!doctype html>
<html>
    <?php wp_head(); ?>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
    
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
    
    <!--begin styles-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" /> 
<!--end styles-->
    
</head>

<body <?php body_class(); ?>>

<nav>
<a href="adamkozie.com"><img src="../images/ak-logo-icon.png" alt="AK logo"></a>
<ul>
<li><a target="_blank" href="https://www.facebook.com/adam.kozie">Facebook</a></li>
<li><a target="_blank" href="https://www.linkedin.com/in/adam-kozie-093191b4">LinkedIn</a></li>
<li><a target="_blank" href="http://akozieitc240.blogspot.com/">Blog</a></li>
<li><a href="mailto:atkozie@gmail.com">Contact</a></li>
</ul>
</nav>

<main>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
<h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
<?php the_content(''); // get page or posting written content ?>
<?php endwhile; endif; // end the loop ?>
</main>

<footer>
<ul>
<li>&#169; All Rights Reserved  /</li>
<li>A Kozie  /</li>
<li>2016</li>
</ul>

</footer>



<?php wp_footer(); ?>
</body>
</html>
