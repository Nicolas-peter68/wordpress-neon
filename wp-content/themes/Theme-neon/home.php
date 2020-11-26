<?php get_header(); ?>
<h1>Le blog de la promo</h1>
<div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-md-6">
                <article class="post">
                    <div class="card text-white bg-dark mb-5">
                        <h3 class="card-header"><?php the_title(); ?></h3>
                        <div class="card-body">
                            <h5 class="card-title">Auteur: <?php the_author(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <hr class="my-4">
                            <p><?php comments_number(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a>
                        </div>
                    </div>
                </article>
            </div>
            <?php //get_template_part( 'archive' ); 
            ?>
    <?php endwhile;
    endif; ?>

</div>
<!--end row-->
<?php get_footer(); ?>