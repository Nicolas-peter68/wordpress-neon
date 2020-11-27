<?php get_header(); ?>
<?php
if (is_category()) {
    $title = "Catégorie : " . single_tag_title('', false);
} elseif (is_tag()) {
    $title = "Étiquette : " . single_tag_title('', false);
} elseif (is_search()) {
    $title = "Vous avez recherché : " . get_search_query();
} else {
    $title = 'Le Blog';
}
?>
<h1><?php echo $title; ?></h1>
<div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-md-6">
                <div class="jumbotron text-white bg-dark">
                    <h2 class="card-title"><?php the_title() ?></h2>
                    <h4 class="card-subtitle mb-2">Auteur: <?php the_author(); ?></h4>
                    Catégorie:
                    <ul>
                        <?php the_category(); ?>
                    </ul>
                    <p>Publié le <?php the_time(get_option('date_format')); ?></p>
                    <hr class="my-4">
                    <p><?php comments_number(); ?></p>
                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Lire la suite</a>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>
<aside class="site__sidebar">
    <ul>
        <?php dynamic_sidebar('blog-sidebar'); ?>
    </ul>
</aside>
<?php posts_nav_link(); ?>
<?php the_posts_pagination(); ?>
<?php get_footer(); ?>