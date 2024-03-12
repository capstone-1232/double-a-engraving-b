<div class="category-card">
    <!-- create a container/card for the category image -->
    <?php
    // gets the featured image for the category, this will display on the catalog
    $image = get_field('category_featured_image');
    $size = 'category-thumb';
    if ($image) {
        echo wp_get_attachment_image($image, $size);
    }
    ?>
    <div class="category-title">
        <!-- create an area for the title of the category to be shown over-top of the category image -->
        <h2>
            <?php the_field('category_title'); ?>
        </h2>

    </div>
</div>