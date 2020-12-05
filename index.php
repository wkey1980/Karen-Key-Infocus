<?php get_header(); ?>

<main class="main">

<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <article class="post">
            <?php the_title(); ?>
            <?php the_content(); ?>
        </article>

    <?php endwhile ?>

<?php else : ?>

    <article class="post error">
        <h1 class="404">
            <?php _e( 'No posts found in blog', 'karen_key_infocus' ); ?>
        </h1>
    </article>

<?php endif; ?>


</main>

<?php get_footer(); ?>

