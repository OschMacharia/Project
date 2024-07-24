<?php
/**
 * The template part for displaying grid layout
 * @package Grocery Ecommerce
 * @subpackage grocery_ecommerce
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<div class="col-lg-4 col-md-4">
    <article class="grid-sec text-center p-2 mb-4">
        <?php 
            if(has_post_thumbnail() && get_theme_mod('grocery_ecommerce_grid_post_featured_image',true) == true) { 
            the_post_thumbnail(); 
            }
        ?>
        <h2><a href="<?php echo esc_url(get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
        <?php if( get_theme_mod( 'grocery_ecommerce_grid_post_date',true) != '' || get_theme_mod( 'grocery_ecommerce_grid_post_author',true) != '' || get_theme_mod( 'grocery_ecommerce_grid_post_comment',true) != '' || get_theme_mod( 'grocery_ecommerce_grid_post_time',true) != '') { ?>
            <div class="grid-post-info p-2 mb-2">
              <?php if( get_theme_mod( 'grocery_ecommerce_grid_post_date',true) != '') { ?>
                <i class="<?php echo esc_attr(get_theme_mod('grocery_ecommerce_postdate_icon',"fa fa-calendar pe-2 ")); ?>"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><span class="entry-date pe-2"><?php echo esc_html( get_the_date() ); ?></span><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a>
              <?php }?>
              <?php if( get_theme_mod( 'grocery_ecommerce_grid_post_author',true) != '') { ?>
                <i class="<?php echo esc_attr(get_theme_mod('grocery_ecommerce_postauthor_icon',"fa fa-user pe-2" )); ?>"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author pe-2"> <?php the_author(); ?></span><span class="screen-reader-text"><?php the_author(); ?></span></a>
              <?php }?>
              <?php if( get_theme_mod( 'grocery_ecommerce_grid_post_comment',true) != '') { ?>
                <i class="<?php echo esc_attr(get_theme_mod('grocery_ecommerce_postcomment_icon',"fa fa-comments pe-2" )); ?>"></i><span class="entry-comments pe-2"> <?php comments_number( __('0 Comments','grocery-ecommerce'), __('0 Comments','grocery-ecommerce'), __('% Comments','grocery-ecommerce') ); ?></span> 
              <?php }?>
              <?php if( get_theme_mod( 'grocery_ecommerce_grid_post_time',true) != '') { ?>
                <i class="<?php echo esc_attr(get_theme_mod('grocery_ecommerce_posttime_icon',"fa fa-clock pe-2" )); ?>"></i> <span class="entry-comments pe-2"> <?php echo esc_html( get_the_time() ); ?></span>
              <?php }?>
            </div>
        <?php }?>

        <?php if(get_the_excerpt()) { ?>
            <div class="entry-content"><p><?php $grocery_ecommerce_excerpt = get_the_excerpt(); echo esc_html( grocery_ecommerce_string_limit_words( $grocery_ecommerce_excerpt, esc_attr(get_theme_mod('grocery_ecommerce_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('grocery_ecommerce_grid_excerpt_suffix','...') ); ?></p></div>
        <?php }?>
        <?php if ( get_theme_mod('grocery_ecommerce_grid_button_text','Read Full') != '' ) {?>
            <div class="blogbtn my-3">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small"><?php echo esc_html( get_theme_mod('grocery_ecommerce_grid_button_text',__('Read Full', 'grocery-ecommerce')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('grocery_ecommerce_grid_button_text',__('Read Full', 'grocery-ecommerce')) ); ?></span></a>
            </div>
        <?php }?>
    </article>
</div>