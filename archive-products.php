<?php

/**
 * This is the template page to display a single product category page
 * These posts will be uploaded by the client user
 * @package doubleAengraving
 * 
 */

get_header();

?>

<?php if ( have_posts()) : ?>
    <section>
        <h2>categories</h2>
    </section>

    <section>
        <div class="container">
            <?php the_archive_title('<h1 class="page-title">', '</h1>'); 
            the_archive_description('<div class="archive-description">', '</div>'); 
            ?>
        </div>
        <div class="new">
            <?php
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/content', 'catalog');

                endwhile;

                the_posts_navigation();
                else :
                    echo "aaa moment";
                endif;
                ?>  
        </div>
    </section>




<?php
get_footer();

