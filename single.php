<?php
get_header();
?>

<!-- Content -->
<article class="post-container mx-auto pl-1" style="width:100vw;">
    <?php
    if (have_posts()) {
        while (have_posts()):
            the_post();
            get_template_part('template-parts/content', 'article');
        endwhile;
    }
    ?>
</article>
    <?php
    get_footer();
    ?>