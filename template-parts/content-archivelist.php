<div class="container cat-container">
    <?php
if (have_posts()) {
    while (have_posts()):
    the_post();
    $tags = get_the_tags();
    endwhile;
    if ($tags) {
        echo "<h3>Content by tags</h3>";
        the_tags();
    }
}
?>
</div>
<div class="container cat-container">
    <h3>Content by category</h3>
    <ul><?php echo wp_list_categories(); ?></ul>
</div>