<div class="product-card">
    <!-- create a container to display all products relevant to the category -->
    <?php
    $image = get_field('product_image');
    $alt = get_the_title();
    $productname = get_field('product_title');
    if ($image) {
        $product_link = get_permalink(); // Get the URL of the current product page
        echo '<div class="product-image">';
        echo '<a href="' . $product_link . '">' . wp_get_attachment_image($image, 'front-thumb', false, ['alt' => $alt]) .  '</a>';
        echo '</div>';
        echo '<div class="product-title">';
        echo '<p>' . $productname . '</p>';
        echo '</div>';
    }
    ?>

    

</div>