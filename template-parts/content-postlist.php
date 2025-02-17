<div class="container">
    <a href="<?php the_permalink(); ?>">
        <h1><?php the_title(); ?></h1>
    </a>
    <p>Date: <?php the_date('d/m/Y'); ?> - <a href='<?php the_permalink(); ?>'><?php comments_number(); ?></a></p>
    <a href="<?php the_permalink(); ?>"><img class="mr-3 img-fluid post-thumb d-none d-md-flex"
            src="<?php the_post_thumbnail_url(); ?>">
        </img></a>

    <p>
        <?php
        the_excerpt();
        ?>
    </p>
    <h6><a href="<?php the_permalink(); ?>">Read more -></a></h6>
</div>