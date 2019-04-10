<?php get_header(); ?>
<?php const BR = "<br />"; ?>

    <?php if (have_posts()): ?>

        <?php while (have_posts()): the_post(); ?>

            <?php $values = get_fields(); ?>
            <?php
                // echo '<pre>', var_dump($values), '</pre>';
            ?>

                <?php if ($values) : ?>

                    <a href="<?= $values['link'];?>">
                        <?php the_title(); ?>
                    </a>

                <?php endif; ?>

            <?php previous_post_link(); ?>

            <?php next_post_link(); ?>

        <?php endwhile; ?>
    <?php endif; ?>


<?php get_footer(); ?>
