<?php
get_header();
?>

<!-- Content -->
<article class="post-container content px-3 py-5 p-md-5">
    <div class="container-flex">
        <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-lg-9">
                <?php
                if (have_posts()) {
                    while (have_posts()):
                        the_post();
                        get_template_part('template-parts/content', 'postlist');
                    endwhile;
                }
                ?>
            </div>
            <div class="col-sm-3 col-md-12 col-lg-3">
                <?php
                        get_template_part('template-parts/content', 'archivelist');
                ?>
            </div>
        </div>
    </div>
</article>
<?php

the_posts_pagination();

?>

<!-- Third Column -->
</div>
<?php
get_footer();
?>