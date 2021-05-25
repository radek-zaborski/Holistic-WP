<?php /* Template Name: Szkolenie z kropli krwi */ ?>

<?php get_header()?>
<article class="training-blood">
  <h2 class="training-blood__title">
    <?php echo get_field('tytul_szkolenia_kropli_krwi'); ?>
  </h2>

  <nav>
    <ul class="training-blood__container-menu training-blood__container-menu--undecorate ">
      <li class="training-blood__link-menu training-blood__link-menu--undecorate">
        <a
          href="<?php echo get_field('link_do_1_stopnia_szkolenia_kropli_krwi'); ?>"><?php echo get_field('tytul_1_stopnia_szkolenia_kropli_krwi'); ?></a>
      </li>
      <li class="training-blood__link-menu training-blood__link-menu--undecorate">
        <a
          href="<?php echo get_field('link_do_2_stopnia_szkolenia_kropli_krwi'); ?>"><?php echo get_field('tytul_2_linku_szkolenia_kropli_krwi'); ?></a>
      </li>
      <li class="training-blood__link-menu training-blood__link-menu--undecorate">
        <a
          href="<?php echo get_field('link_do_3_stopnia_szkolenia_krwi'); ?>"><?php echo get_field('tytul_3_stopnia_szkolenia_krwi'); ?></a>
      </li>
      <li class="training-blood__link-menu training-blood__link-menu--undecorate">
        <a
          href="<?php echo get_field('4_link_szkolenia_kropli_krwi'); ?>"><?php echo get_field('tytul_4_linku_szkolenia_krwi'); ?></a>
      </li>
    </ul>
  </nav>
</article>

<?php get_footer()?>