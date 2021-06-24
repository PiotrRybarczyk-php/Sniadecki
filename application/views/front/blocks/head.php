<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>

    <?php if ($this->uri->segment(1) == '') {
      echo $settings->meta_title . ' - Strona główna';
    } else if ($this->uri->segment(1) == 'oferta-szczegoly') {
      echo $settings->meta_title . ' - ' . $single->title;
    } else if ($this->uri->segment(1) == 'wpis') {
      echo $settings->meta_title . ' - ' . $single->title;
    } else {
      echo $settings->meta_title . ' - ' . $current_page->title;
    } ?>
  </title>
  <meta name="description" content="<?= $settings->description ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" async>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:100,200,300,400,400i,500,700" async>
  <link href="<?= assets() ?>css/bootstrap.min.css" rel="stylesheet" async>
  <link href="<?= assets() ?>css/mdb.min.css" rel="stylesheet" async>
  <link href="<?= assets() ?>css/style.css" rel="stylesheet" async>
  <!-- 
  <link href="<?= assets() ?>css/blocks/header-style.css" rel="stylesheet">
  <link href="<?= assets() ?>css/blocks/about-style.css" rel="stylesheet">
  <link href="<?= assets() ?>css/blocks/offer-style.css" rel="stylesheet">
  <link href="<?= assets() ?>css/blocks/contact-style.css" rel="stylesheet">
  <link href="<?= assets() ?>css/blocks/footer-style.css" rel="stylesheet">
  <link href="<?= assets() ?>css/blocks/gallery-style.css" rel="stylesheet"> -->
  <link href="<?= assets() ?>css/lightbox.css" rel="stylesheet" async>
  <!-- 
  <link rel="stylesheet" href="<?= assets() ?>dist/assets/owl.carousel.min.css" async>
  <link rel="stylesheet" href="<?= assets() ?>dist/assets/owl.theme.default.min.css" async> -->

  <script src="https://www.google.com/recaptcha/api.js" async></script>
  <link rel="stylesheet" href="<?= assets() ?>css/lc_lightbox.css" async />
  <link rel="stylesheet" href="<?= assets() ?>skins/minimal.css" async />

  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
  <style type="text/css">
    .no-webp {
      display: none;
    }
  </style>
</head>