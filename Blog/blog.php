<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if (is_single()): ?>
            <h1> <?php the_title(); ?> </h1>
            <?php the_content(); ?>
        <?php else: ?>
            <div class="date"><?php the_date(); ?></div>
            <h1> <?php the_title(); ?> </h1>
            <p> <?php the_excerpt(); ?> </p>
            <?php the_tags(); ?>
        <?php endif; ?>
    <?php endwhile;
else: ?>
    <p> Sorry, there are no posts at this time.</p>
<?php endif; ?>



