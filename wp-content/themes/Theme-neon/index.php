<?php get_header(); ?>

<h1>Coucou</h1>
<div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-md-4">
            <div class="jumbotron text-white bg-dark">
                <h2 class="card-title"><?php the_title() ?></h2>
                <h4 class="card-subtitle mb-2">Auteur: <?php the_author(); ?></h4>
                Catégorie:
                <ul>
                    <?php the_category(); ?>
                </ul>
                Publié le <?php the_time(get_option('date_format')); ?>
                <hr class="my-4">
                <p><?php comments_number(); ?></p>
                <a class="btn btn-primary" href="<?php the_permalink(); ?>">Lire la suite</a>
            </div>
        </div>
<?php endwhile;
endif; ?>
</div>
<?php get_footer(); ?>