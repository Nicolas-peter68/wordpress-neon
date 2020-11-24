<?php get_header(); ?>
<h1>Mon blog</h1>
<div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-10">
                <article class="post">
                    <h2><?php the_title(); ?></h2>
                    <?php the_post_thumbnail(); ?>
                    <p class="post__meta">
                        Publié le <?php the_time(get_option('date_format')); ?>
                        par <?php the_author(); ?> • <?php comments_number(); ?>
                    </p>
                    <?php the_excerpt(); ?>
                    <p>
                        <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
                    </p>
                </article>
            </div>
            <?php //get_template_part( 'archive' ); 
            ?>
    <?php endwhile;
    endif; ?>
    <div class="col-2">
        <aside class="site__sidebar">
            <ul>
                <?php dynamic_sidebar('blog-sidebar'); ?>
            </ul>
        </aside>
    </div>
</div>
<!--end row-->
<?php get_footer(); ?>