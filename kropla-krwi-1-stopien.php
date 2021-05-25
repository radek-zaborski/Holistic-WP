<?php /* Template Name: 1 stopień szkolenia kropli krwi */ ?>
<?php get_header(); ?>
<article class="level-1-blood">
  <div class="level-1-blood__container-main-image">
    <img class="level-1-blood__main-board-image" src="<?php echo get_field('zdjecia_planszy_programu_1_stopien'); ?>" />
  </div>
  <article class="level-1-blood__warning">
    <?php echo get_field('informacja_szkoleniowa_1_stopnia'); ?>
  </article>

  <div class="level-1-blood__images-group-container ">

    <?php if(have_rows('kolejne_zdjecia_z_kursu_1_stopnia')): ?>
    <?php while(have_rows('kolejne_zdjecia_z_kursu_1_stopnia')): the_row(); ?>

    <img class="level-1-blood__image" src="<?php echo get_field(the_sub_field('nastepne_zdjecie_z_kursu_1_stopnia')) ?>"
      alt="Second slide">

    <?php endwhile ;?>
    <?php endif ; ?>
  </div>

  <article class="level-1-blood__info">
    <?php echo get_field('opis_kursu_1_stopnia_krwi'); ?>
  </article>
  <article class="level-1-blood__program">
    <?php echo get_field('program_szkoleniowy_1_stopnia_krwi'); ?>
  </article>

</article>



<?php get_footer(); ?>