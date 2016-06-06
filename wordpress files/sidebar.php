<!--begin subnavigation-->
<div class="text">
    <h2 class="sub-navigation-title"><?php echo get_the_title($post->post_parent); ?></h2>
    <ul class="sub-navigation-items"><?php
        if ($post->post_parent){
            wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __('')));
        }
        else {
            wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));
        } //if it has a parent, post it, if not, no title ?>
    </ul>
    

    <?php if (!(is_page())) : ?>
    <h2 class="sub-nav-title">Blog</h2><ul class="sub-nav-items"><?php wp_list_categories(array('title_li' => __(''))); //list categories ?></ul>
    <?php endif; ?>
    </div>   <!--end text div--> 
    <!--end subnavigation--> 

<!--old code here
<div id="sub-navigation">
<?php // my_subnavigation(); ?>
</div>end old subnav-->

<!--quote-->
<?php if(get_post_meta($post -> ID, 'Quote', true)): //if there is a quote custo field item ?>
<blockquote><?php echo get_post_meta($post->ID, 'Quote', true); //here's the quote entered in the dashboard ?></blockquote>
<?php endif; ?>
<!--end quote-->

<div id="my-quote">
<?php if (get_post_meta($post->ID, 'quote', true)) {
 //finish this...   
}?>
</div>

<div id="dynamic-widgets">
<?php dynamic_sidebar(); ?>
</div><!--end dynamic sidebar-->