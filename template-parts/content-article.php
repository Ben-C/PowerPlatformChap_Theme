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
    <div class="content col-sm-12 col-md-12 col-lg-12">
    <div class="followit--follow-form-container" attr-a attr-b attr-c attr-d attr-e attr-f>
    <form data-v-1012f9c5="" action="https://api.follow.it/subscription-form/K2J5cXBXdXRXUENETkFpSkRpVEFPRThVSDRidjd1UURKbk0zcHlHdEhWZXh3UnEzYjBza05oV1lPSW5GQ0hNczI1ejI2eDU2aDlXa1I4V09CWlNXUE1YVWhOL0dwTnJpVWcrRW1BeENibjFDcFlTYmJUVjlyazA1UWUxUUZuL3R8cklBeHBsM2hsc2NyUDF0VWtpK0NJUXl2Vjc2dGRlcVFQWEZRNzdKZlNaOD0=/8" method="post"><div data-v-1012f9c5="" class="form-preview" style="background-color: rgb(37, 69, 80); position: static; border-style: solid; border-width: 0px; border-color: rgb(12, 33, 33);"><div data-v-1012f9c5="" class="preview-heading"><h5 data-v-1012f9c5="" style="text-transform: none !important; font-family: Arial; font-weight: bold; color: rgb(255, 255, 255); font-size: 16px; text-align: center;">Get new posts by email:</h5></div><div data-v-1012f9c5="" class="preview-input-field"><input data-v-1012f9c5="" type="email" name="email" required="" placeholder="Enter your email" spellcheck="false" style="text-transform: none !important; font-family: Arial; font-weight: normal; color: rgb(0, 0, 0); font-size: 14px; text-align: center; background-color: rgb(255, 255, 255);"></div><div data-v-1012f9c5="" class="preview-submit-button"><button data-v-1012f9c5="" type="submit" style="text-transform: none !important; font-family: Arial; font-weight: bold; color: rgb(255, 255, 255); font-size: 16px; text-align: center; background-color: rgb(12, 33, 33);">Subscribe</button></div></div></form><a href="https://follow.it" class="powered-by-line">Powered by <img src="https://follow.it/static/img/colored-logo.svg" alt="follow.it" height="17px"/></a>
  </div>
    </div>
        <?php
        comments_template();
        ?>
    </div>
</div>
</div>