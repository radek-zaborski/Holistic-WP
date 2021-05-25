<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Mikroskopowe Badanie Żywej Kropli Krwi</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css">

  <?php wp_head(); ?>
</head>

<body>
  <div class="main-container ">
    <header class="header">
      <div class="header__container-logo ">

        <div class="header__first-image">
          <img class="header__first-pictrue" src="<?php echo get_field('lewe_logo_header', 'option'); ?>" alt="logo" />
        </div>

        <div class="header__second-image">
          <img class="header__second-pictrue" src="<?php echo get_field('prawe_logo_header', 'option'); ?>"
            alt="logo" />
        </div>

      </div>
      <div class="header__container-menu">

        <nav class="header__menu">
          <ul class="header__container-link header__container-link--undecorate">

            <li class="header__link-menu header__link-menu--undecorate">
              <a href="<?php echo get_field('link_do_o_nas','option'); ?>">
                <?php echo get_field('tytul_o_nas','option'); ?>
              </a>
            </li>

            <li class="header__link-menu header__link-menu--undecorate">
              <a href="<?php echo get_field('link_do_szkolenia_kropli_krwi','option'); ?>">
                <?php echo get_field('tytul_szkolenia_kropli_krwi','option'); ?>
              </a>
            </li>
            <li class="header__link-menu header__link-menu--undecorate">
              <a href="<?php echo get_field('link_do_szkolenia_naturoterapia','option'); ?>">
                <?php echo get_field('tytul_szkolenia_naturoterapia','option'); ?>
              </a>
            </li>
            <li class="header__link-menu header__link-menu--undecorate">
              <a href="<?php echo get_field('link_do_naturoterapie','option'); ?>">
                <?php echo get_field('tytul_naturoterapie','option'); ?>
              </a>
            </li>
            <li class="header__link-menu header__link-menu--undecorate">
              <a href="<?php echo get_field('link_do_nsp','option'); ?>">
                <?php echo get_field('tytul_nsp','option'); ?>
              </a>
            </li>
            <li class="header__link-menu header__link-menu--undecorate">
              <a href="<?php echo get_field('link_do_badania','option'); ?>">
                <?php echo get_field('tytul_badania','option'); ?>
              </a>
            </li>
            <li class="header__link-menu header__link-menu--undecorate">
              <a href="<?php echo get_field('link_do_youtube','option'); ?>">
                <?php echo get_field('tytul_youtube','option'); ?>
              </a>
            </li>
            <li class="header__link-menu header__link-menu--undecorate">
              <a href="<?php echo get_field('link_do_kontakt','option'); ?>">
                <?php echo get_field('tytul_kontakt','option'); ?>
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <h1 class="header__title header__title--red">
        <?php echo get_field('tytul_firmy_w_naglowku','option'); ?>
      </h1>
      <h2 class="header__contact"><?php echo get_field('kontakt_w_naglowku', 'option'); ?></h2>

    </header>