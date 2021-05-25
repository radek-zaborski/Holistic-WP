<?php /* Template Name: Naturoterapie */ ?>

<?php get_header(); ?>
<article class="naturoteraphy">
  <div class="naturoteraphy__video">
    <iframe class="naturoteraphy__player" width="560" height="315" frameborder="0"
      src="<?php echo get_field('wideo_naturoterapie'); ?>">
    </iframe>
  </div>
  <h2 class="naturoteraphy__title">
    <?php echo get_field('pierwszy_tytul_naturoterapie'); ?>
  </h2>

  <article class="naturoteraphy__first-paragraph">
    <?php echo get_field('pierwszy_akapit_naturoterapie'); ?>
  </article>

  <h3 class="naturoteraphy__title-program">
    <?php echo get_field('tytul_turnusy_naturoterapie'); ?>
  </h3>

  <article class="naturoteraphy__day-schedule">
    <?php echo get_field('program_turnusow_naturoterapie'); ?>
  </article>

  <article class="naturoteraphy__add-notes">
    <?php echo get_field('uwagi_dodatkowe_naturoterapie'); ?>
  </article>

  <article class="naturoteraphy__information">
    <?php echo get_field('informacje_naturoterapie'); ?>
  </article>

  <article class="naturoteraphy__warning">
    <?php echo get_field('tytul_ostrzezenie_naturoterapie'); ?>
  </article>

  <article class="naturoteraphy__notify">
    <?php echo get_field('tytul_zgloszenia_naturoterapie'); ?>
  </article>
</article>
<?php get_footer(); ?>