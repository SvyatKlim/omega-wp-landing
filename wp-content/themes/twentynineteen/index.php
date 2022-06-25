<?php get_header(); ?>

<section class="intro" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/images/background.jpg' ?>')">
    <div class="container">
        <div class="intro__content">
            <h1 class="intro__title">Workforce Survey</h1>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi </p>
            <a class="button intro__button">Start Now</a>
        </div>
    </div>
</section>

<?php $blog = new WP_Query(
    ['post_type' => 'post',
        'numberposts' => -1,
        'order' => 'DESC',
        'orderby' => 'date']);
if ($blog->have_posts()){ ?>
<section class="posts container">
    <div class="posts__wrapper js-container">

        <?php while ($blog->have_posts()) {
            $blog->the_post();
            get_template_part('template-parts/card');
        }
        ?>

    </div>

</section>
<?php }
wp_reset_postdata(); ?>

<?php get_footer(); ?>
