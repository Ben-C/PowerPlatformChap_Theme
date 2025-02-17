<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php

    wp_head();

    ?>
</head>

<body>
    <!-- Top Banner -->
    <div class="container-flex hero-banner">
        <div class="container">
            <div class="row">
                <div class="mobile-logo">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                    ?>
                    <img src="<?php echo $logo[0] ?>" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-5 col-lg-9">
                    <h2 class="sitesubtitle">The Power Platform Chap</h2>
                    <a href="/">
                        <h1 class="sitetitle">Benjamin Crowe</h1>
                    </a>
                </div>
                <!-- Site logo -->
                <div class="logo col-sm-3 col-md-3 col-lg-3">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                    ?>
                    <img src="<?php echo $logo[0] ?>" />
                </div>
            </div>
            <div class="row p-2">
            </div>
            <div class=" row social-row">
                <div class="social-container">
                    <a href="https://www.linkedin.com/in/benjamin-crowe/"><i
                            class="fa-brands fa-linkedin fa-2x social"></i>
                    </a>
                </div>
                <div class="social-container">
                    <a href="https://github.com/ben-C"><i class="fa-brands fa-github fa-2x social"></i>
                    </a>
                </div>
                <div class="social-container">
                    <a href="https://twitter.com/BnE_C"><i class="fa-brands fa-twitter fa-2x social"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>