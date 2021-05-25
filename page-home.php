<?php /* Template Name: Page Home */ ?>

<?php get_header(); ?>
<article class="home-page">

  <img class="home-page__picture" src="<?php echo get_field('pierwsze_zdjecie_strona_glowna'); ?>"
    alt="Elżbieta Gołaszewska" />

  <article class="home-page__article">
    <?php echo get_field('tekst_na_stronie_glownej'); ?>
  </article>
</article>
<?php get_footer(); ?>