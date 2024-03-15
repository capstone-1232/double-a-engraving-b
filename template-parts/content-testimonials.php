<div class="testimonial-card">
    <!-- create a container/card for testimonials -->
    <?php
    $description = get_field('description');
    $name = get_field('name');
    $rating = get_field('rating');
    ?>
    <div class="card-description">
        <!-- create an area for the description of the testimonial to be shown -->
        <p>
            <?php echo $description; ?>
        </p>
    </div>
    <div class="cardname-rating gallery gallery-columns-2">
        <!-- create an area for the name of the person who left the testimonial to be shown -->
        <p>
            <?php echo $name; ?>
        </p>
        <!-- create an area for the rating of the testimonial to be shown -->
        <p>
            <?php echo $rating; ?>
        </p>
    </div>
</div>