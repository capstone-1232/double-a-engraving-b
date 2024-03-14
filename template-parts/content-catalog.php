<div class="category-card">
    <!-- create a container/card for the category image -->
    <?php

    $categories = get_categories();
    $image = get_field('product_image');
    $size = 'category-thumb';

    if ($image) {

        $category = get_the_category();
        $category = $category[0]->cat_ID;
        $category = get_category($category);
        $category_link = get_category_link($category->term_id);

        $image_url = wp_get_attachment_image($image);
        echo '<div class="category-image">';
        // this is some built in, dynamic SEO - the image always have alt text of the category name and "category product image"
        echo '<a href="' . esc_url($category_link) . '">' . wp_get_attachment_image($image, $size, ['alt' => esc_html($category->name) . ' category product image']) . '</a>';
        echo '</div>';
    }
    ?>
    <div class="category-title">
        <!-- create an area for the title of the category to overlayed on the image or can be right under it in a card. -->
        <h2>
            <?php echo '<div class="category-title">';
            echo '<h2>' . esc_html($category->name) . '</h2>';
            echo '</div>'; ?>
        </h2>

    </div>
</div>