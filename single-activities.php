<?php get_header(); ?>
<?php const BR = "<br />"; ?>

    <?php if (have_posts()): ?>

        <?php while (have_posts()): the_post(); ?>

            <?php the_title(); ?>

            <?php the_content(); ?>

            <?php $values = get_fields(); ?>
            <?php
                // echo '<pre>', var_dump($values), '</pre>';
            ?>

                <?php if ($values) : ?>
                    <?php echo $values['activities-group']['info'].BR; ?>
                    <img src="<?=$values['image']['url'];?>">
                <?php endif; ?>

            <?php echo BR ;?>

            <?php previous_post_link(); ?>

            <?php next_post_link(); ?>

        <?php endwhile; ?>
    <?php endif; ?>


<?php get_footer(); ?>
