<?php
get_header();
?>

<!-- Content -->
<article class="post-container mx-auto pl-1" style="width:50vw;">
    <div class="row">
        <!-- Second Column -->
        <div class="col-md-12">
            <h1><?php
            if (have_posts()) {
                while (have_posts()) :
                    the_post();
                    the_title();
                    endwhile;
            }
            ?></h1>
            <p><?php
            if (have_posts()) {
                while (have_posts()):
                    the_post();
                    get_template_part('template-parts/content', 'archive');
                endwhile;
            }
            ?>
        </div>

        <!-- Third Column -->
    </div>
    </div>
    </div>
    <?php
    get_footer();
    ?>