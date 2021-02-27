<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package youma
 */

get_header();
?>

<main id="primary" class="site-main col-md-8">

  <?php if (have_posts()) : ?>

    <header class="page-header">
      <h1 class="mb-0">本屋</h1>
      <?php $terms = get_terms('genre'); ?>
      <ul class="nav ml-0 pl-0 mb-3">
        <?php foreach ($terms as $term) : ?>
          <li class="nav-item"><a class="nav-link pl-0" href="<?php echo get_term_link($term); ?>"><?php echo esc_html($term->name); ?></a></li>
        <?php endforeach; ?>
      </ul>
      <h2><?php the_archive_title(); ?></h2>
    </header><!-- .page-header -->

    <ul class="nav">
      <?php
      /* Start the Loop */
      while (have_posts()) :
        the_post();
      ?>
        <li class="nav-item"><a href="<?php the_permalink(); ?>" class="nav-link"><?php the_title(); ?></a></li>
      <?php
      endwhile;
      ?>
    </ul>
  <?php
    the_posts_navigation();

  else :

    get_template_part('template-parts/content', 'none');

  endif;
  ?>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
