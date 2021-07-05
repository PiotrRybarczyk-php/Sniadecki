<style>
  body {
    color: <?= $settings->first_color; ?>;
  }

  .btn_JS {
    background-color: <?= $settings->second_color; ?>;
  }

  .btn_JS:hover {
    color: <?= $settings->second_color; ?>;
  }

  .scrolled-down {
    transform: translateY(-100%);
    transition: all 0.3s ease-in-out;
  }

  .scrolled-up {
    transform: translateY(0);
    transition: all 0.3s ease-in-out;
  }
</style>

<body>
  <script type="text/javascript">
    function changeLang(lang) {
      $.ajax({
        url: "<?php echo base_url(); ?>home/change/" + lang + "",
        success: function() {
          location.reload();
        }
      });
    }

    function test() {
      alert(window.screen.width);
    }
    document.addEventListener("DOMContentLoaded", function() {

      el_autohide = document.querySelector('.autohide');



      if (el_autohide) {
        var last_scroll_top = 0;
        window.addEventListener('scroll', function() {
          let scroll_top = window.scrollY;
          if (scroll_top < last_scroll_top) {
            el_autohide.classList.remove('scrolled-down');
            el_autohide.classList.add('scrolled-up');
          } else {
            if (window.screen.width <= 575) {
              el_autohide.classList.remove('scrolled-up');
              el_autohide.classList.add('scrolled-down');
            }
          }
          last_scroll_top = scroll_top;
        });
        // window.addEventListener
      }
      // if

    });
  </script>
  <?php
  ?>
  <header>
    <nav id="navbar" class="autohide main-header__navbar navbar navbar-expand-lg navbar-light flex-column mobile_border" id="navbar">
      <div class="row" style="width:100vw;min-height:150px;align-items:center;">
        <div class="col-lg-3"><a class="navbar-brand" href="<?= base_url(); ?>">
            <img class="nav_logo" src="<?= base_url('assets/front/img/logoJS.png'); ?>" alt="logo ad awards">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="col-lg-7">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <?php for ($key = 0; $key < 4; $key++) :  $current = $subpages[$key]->page; ?>
                <li class="main-header__nav-item nav-item page_list">
                  <a class=" <?= ($this->uri->segment(1) == $current ? 'nav-link selected' : 'nav-link'); ?>  py-2" href="<?= base_url(); ?><?= $subpages[$key]->page; ?>"><?= $subpages[$key]->title; ?></a>
                </li>
              <?php endfor; ?>
              <li class="main-header__nav-item nav-item mx-5" style="color:white"> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2" style="display:flex;justify-content:flex-end;">
          <a class="navbar-brand" style="margin-right:2rem;" href="<?= base_url(); ?>">
            <img class="nav_pic" src="<?= base_url('assets/front/img/gazele.png'); ?>" alt="gazele">
          </a>
        </div>
      </div>
    </nav>
    <?php if ($this->uri->segment(1) == '') : ?>

    <?php endif; ?>
  </header>
  <div class="mobile_nav_space"></div>
  <main>