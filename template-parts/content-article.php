<div class="container">
    <div class="content-title">
        <h1><?php the_title(); ?>
    </div>
    <header class="content-header">
        <div class="meta mb-3"><span class="date"><?php the_date('d-M-Y'); ?></span>
            <?php
            the_tags('<i class="fa fa-tag"></i>', '<i class="fa fa-tag"></i>');
            ?>
            <span class="comment"><a href="#comments"><i class="fa fa-comment"></i>
                    <?php comments_number(); ?></a></span>
        </div>
    </header>
</div>
<div class="container content px-4">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <?php
        the_post_thumbnail('large');
        ?>
    </div>
    <div class="content col-sm-12 col-md-12 col-lg-12">
        <?php
        the_content();
        ?>
        <div class="return">
            <h3><a href="/"><- Return home</a></h3>
        </div>
        <?php
        comments_template();
        ?>
    </div>
</div>
</div>