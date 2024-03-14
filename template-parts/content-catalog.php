<div class="category-card">
    <!-- create a container/card for the category image -->
    <?php
    // gets the featured image for the category, this will display on the catalog
    $image = get_field('product_image');
    $size = 'category-thumb';
    if ($image) {
        $image_url = wp_get_attachment_image_url($image, $size);
        $category_link = get_permalink(); // Assuming the image links to the current category page
        echo '<a href="' . $category_link . '"><img src="' . $image_url . '" alt="Category Image"></a>';
    }
    ?>
    <div class="category-title">
        <!-- create an area for the title of the category to be shown over-top of the category image -->
        <h2>
            <?php the_field('category_title'); ?>
        </h2>

    </div>
</div>