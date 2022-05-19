<?php
/*
 * Template for displaying the loop
 * 
 * @package Cognize
 */
?>

<?php global $cognize_post_count, $cognize_sticky_count ?>

<?php if($cognize_post_count % 2 != 0): ?>
<div class="loop-twin-posts clearfix <?php if($cognize_post_count == 1) echo 'loop-twin-first' ?>">
<?php endif ?>

<div id="post-<?php the_ID() ?>" <?php post_class( array('loop-section', 'grid-col-8', 'grid-float-left') ) ?>>
     <div class="loop-post-title">
          <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to <?php the_title_attribute() ?>"><?php the_title() ?></a></h1>
     </div>
     <div class="loop-post-meta">
          <span><?php _e('Written on', 'cognize') ?> </span><span class="loop-meta-date"><?php echo get_the_time('M, d, Y') ?></span>
          <span><?php _e('by', 'cognize') ?> </span><span class="loop-meta-author"><?php the_author_posts_link() ?></span>
     </div>
     <div class="loop-post-excerpt clearfix">
          <?php if ( has_post_thumbnail() ) { ?>
            <div class="loop-post-text grid-col-16">
                <div class="loop-thumbnail grid-col-6"><?php the_post_thumbnail( 'cognizeThumb' ) ?></div>
                <?php the_excerpt() ?></div>
          <?php } else { ?>
          <div class="loop-post-text grid-col-16"><?php the_excerpt() ?></div>
          <?php } ?>
          <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'cognize') . '</span>', 'after' => '</div>')) ?>
          <a class="read-more" href="<?php the_permalink() ?>"><?php echo apply_filters('cognize_readmore_text_filter', '') ?> <i class="mdf mdf-plus-square"></i></a>
     </div>

</div>
    
<?php if($cognize_post_count % 2 == 0 || (($posts_per_page == ($cognize_post_count - $cognize_sticky_count)?true:false) || wp_count_posts()->publish == 1)): ?></div><?php endif ?>
<?php $cognize_post_count++; ?>
<?php if(is_sticky()){$cognize_sticky_count++;} ?>
