<?php /* Template Name: Drugi stopień kropli krwi */ ?>

<?php get_header(); ?>

<article class="level-2-blood">

  <div class="level-2-blood__container-main-image">
    <img class="level-2-blood__main-board-image"
      src="<?php echo get_field('zdjecie_planszy_2_stopnia_kropli_krwi'); ?>">
  </div>

  <article class="level-2-blood__information">
    <?php echo get_field('informacja_o_rozporzadzeniu_-_2_stopien_kropli_krwi'); ?>
  </article>

  <div class="level-2-blood__photo-course-container">
    <?php if(have_rows('zdjecia_ze_szkolenia_2_stopnia_kropli_krwi')): ?>
    <?php while(have_rows('zdjecia_ze_szkolenia_2_stopnia_kropli_krwi')): the_row(); ?>
    <div class="level-2-blood__single-image-course">
      <img src="<?php echo get_field(the_sub_field('zdjecie_szkolenia_2_stopnia_kropli_krwi')) ?>" alt="Second slide" />
    </div>
    <?php endwhile ;?>
    <?php endif ; ?>
  </div>

  <article class="level-2-blood__first-info">
    <?php echo get_field('tytul_2_stopnia_kropli_krwi'); ?>
  </article>
  <div class="level-2-blood__container-image-dark-field">
    <img class="level-2-blood__microscope-dark-field"
      src="<?php echo get_field('zdjecie_z_mikroskopu_2_stopnia_krwi'); ?>" alt="dark field microscope photo" />
  </div>
  <article class="level-2-blood__article-info">
    <?php echo get_field('opis_2_stopnia_kropli_krwi'); ?>
  </article>
  <article class="level-2-blood__group-container-blood">
    <article class="level-2-blood__leukocytes-group">
      <?php echo get_field('tytul_grupy_granulocyty_2_stopien'); ?>
      <article class="level-2-blood__granulocytes">
        <?php if(have_rows('zdjecia_granulocytow_2_stopien')): ?>
        <?php while(have_rows('zdjecia_granulocytow_2_stopien')): the_row();  ?>
        <article class="level-2-blood__simple-granulocyte">
          <div class="level-2-blood__image-granulocyte">
            <img src="<?php echo get_field(the_sub_field('zdjecie')); ?>" alt="image granulocyte" />
          </div>
          <div class="level-2-blood__title-granulocyte">
            <?php echo get_field(the_sub_field('podpis_zdjecia')); ?>
          </div>
        </article>
        <?php endwhile ;?>
        <?php endif; ?>
      </article>
      <?php echo get_field('tytul_agranulocytow_2_stopien'); ?>
      <article class="level-2-blood__agranulocytes">
        <?php if(have_rows('zdjecia_agranulocytow')): ?>
        <?php while(have_rows('zdjecia_agranulocytow')): the_row(); ?>
        <article class="level-2-blood__simple-agranulocyte">
          <div class="level-2-blood__image-agranulocyte">
            <img src="<?php echo get_field(the_sub_field('zdjecie')); ?>" alt="image agranulocyte" />
          </div>
          <div class="level-2-blood__title-agranulocyte">
            <?php echo get_field(the_sub_field('tytul_zdjecia')); ?>
          </div>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
      </article>
      <article class="level-2-blood__end-information">
        <?php echo get_field('informacje_koncowe_2_stopnia_krwi'); ?>
      </article>
    </article>
  </article>
</article>

<?php get_footer(); ?>