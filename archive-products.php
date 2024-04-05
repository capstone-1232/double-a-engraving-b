<?php

/**
 * This is the template page to display a  product category page
 * These posts will be uploaded by the client user
 * @package doubleAengraving
 * 
 */

get_header();

?>

<?php if ( have_posts()) : ?>


    <section class="specific-product-archive">
        <div class="inner-container">
        <div>
            <?php
            // remove the default "Category:" from the title, it doesnt look good
            $title = get_the_archive_title();
            $title = str_replace('Category:', '', $title);
            echo '<h1 class="page-title">' . $title . '</h1>';

            $description = get_the_archive_description();
            if ($description) {
                echo '<div class="category-description">' . $description . '</div>';
            }
            ?>
        </div>
        <div class="product-flex-container">
                <?php
                while (have_posts()) :
                    the_post();
                    ?>
                        <?php
                        get_template_part('template-parts/content', 'products');
                        ?>
                <?php
                endwhile;

                the_posts_navigation();
                else :
                    echo "No posts found";
                endif;
                ?>
            </div>
        <a href="<?php echo esc_url(home_url('/')); ?>custom-request" class="make-a-request-btn">Make a Request</a>
        </div>
    </section>
<?php
get_footer();

