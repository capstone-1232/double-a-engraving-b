

<?php foreach (get_categories() as $cat): ?>
    <!-- create a card to contain the category image and name -->
    <div class="category-card">

        <?php
        $size = 'category-thumb';
        $url = get_term_link($cat);
        ?>
        <!-- section for category image -->
        <div class="category-image">
            <!-- grabs the category image, sets its size to the custom size, and grabs alt text -->
            <a href="<?php echo esc_url($url); ?>">
                <?php z_taxonomy_image($cat->term_id, $size, $attr); ?>
            </a>
        </div>

        <!-- section for category name -->
        <div class="category-name">
            <?php
            // makes the name clickable and link to category
            $url = get_term_link($cat);
            ?>
            <a href="<?php echo esc_url($url); ?>">
                <?php echo $cat->name; ?>
            </a>


        </div>


        <?php
        ?>
    </div>

<?php endforeach; ?>