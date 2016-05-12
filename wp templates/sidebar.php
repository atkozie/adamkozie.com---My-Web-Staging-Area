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