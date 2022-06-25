<?php
global $post;
$post_info = get_field('post_info', $post->ID);
$img = $post_info['thumbnail'];
?>

<div class="card js-card">
    <div class="card__inner">
        <div class="card__image">
            <img src="<?php echo $img['sizes']['blog']; ?>" alt="<?php echo $img['alt']; ?>">
        </div>
        <div class="card__content">
            <h4><?php the_title(); ?></h4>
            <div class="card__description"><?php echo $post_info['short_descr']; ?></div>
            <div class="card__description hidden-content js-card-content"><?php echo $post_info['full_descr']; ?></div>
            <a class="card__btn js-card-button" href="#">
                <?php echo file_get_contents(get_template_directory_uri() . '/assets/images/arrow.svg', false); ?>
                Show&nbsp
                <span class="card__btn--more">more</span>
                <span class="card__btn--less">less</span>
            </a>
        </div>
    </div>
</div>