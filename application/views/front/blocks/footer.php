</main>
<footer id="footer" class="main-footer pb-0" style="overflow:hidden;background-color: #2e3972;">
  <div class="item_container main_padding mb-5 mt-2"><img class="foot_logo" src="<?= base_url('assets/front/img/') . 'sniadecki_white.png'; ?>" alt="logo Sniadecki"></div>
  <div class="item_container main_padding">
    <div class="grid-12 small_padding gtab-4">
      <div class="grid-1 size-5 tab_size-2">
        <p class="text_footer" style="font-weight:700;">PPH im. Jędrzeja Śniadeckiego</p>
        <p class="text_footer" style="font-weight:700;">Sp. z o.o.</p>
        <p class="text_footer"><?= $contact->zip_code . ' ' . $contact->city; ?></p>
        <p class="text_footer"><?= $contact->address; ?></p>
        <p></p>
        <p class="text_footer">tel.: <a class="link" href="tel:<?= $contact->phone1; ?>"><?= $contact->phone1; ?></a> / <a class="link" href="tel:<?= $contact->phone2; ?>"><?= $contact->phone2; ?></a></p>
      </div>
      <div class="grid-1 size-4 tab_size-2">
        <p class="text_footer" style="font-weight:700;">Ważne Informacje</p>
        <p class="text_footer line_unset"><a class="link" href="">Polityka Prywatności RODO</a></p>
        <p class="text_footer line_unset"><a class="link" href="<?= base_url('kontakt'); ?>">Kontakt</a></p>
      </div>
      <div class="grid-1 size-2">
        <p class="text_footer line_unset"><a class="link" href="<?= base_url('oferta'); ?>">Oferta</a></p>
        <p class="text_footer line_unset"><a class="link" href="<?= base_url('katalog'); ?>">Katalog</a></p>
        <p class="text_footer line_unset"><a class="link" href="<?= base_url('poradnik'); ?>">Poradnik</a></p>
      </div>
      <div class="grid-1" style="max-height: 70px;width:145px;">
        <p class="text_footer" style="text-align:center">Nasze media:</p>
        <p style="text-align:center;font-size:40px;"><a class="link" href=""><i class="fab fa-facebook-square"></i></a></p>
      </div>
    </div>
  </div>
  <hr style="border-color:white;opacity:0.4;">
  <div class="item_container main_padding">
    <div class="grid-2">
      <div class="myrow">
        <p class="text_footer line_unset" style="word-break:normal;">Copyright by PPH im. Jędrzeja Śniadeckiego Sp. z o.o.</p>
      </div>
      <div class="myrow flex_right">
        <p class="text_footer line_unset" style="word-break:normal;">Created with love by <a class="link" href="https://agencjamedialna.pro/" style="font-weight:500;">Adawards</a></p>
      </div>
    </div>
  </div>
</footer>

<?php //$define_captcha = "6LcEAPUaAAAAALF4L9uVvZeF6MvOs8KKKv8uXgvU" 
?>

<script type="text/javascript" src="<?= assets(); ?>js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/popper.min.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= assets(); ?>dist/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/initializator.js"></script>
<script type="text/javascript" src="<?= assets(); ?>lib/AlloyFinger/alloy_finger.min.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/lc_lightbox.lite.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/lightbox.js"></script>
<script type="text/javascript" src="<?= assets(); ?>js/qanim.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=<?= $settings->captcha ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>
<script type="text/javascript">
  var lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazy"
    // ... more custom settings?
  });

  function hasWebP() {
    var rv = $.Deferred(),
      img = new Image();
    img.onload = function() {
      rv.resolve();
    };
    img.onerror = function() {
      rv.reject();
    };
    img.src = "http://www.gstatic.com/webp/gallery/1.webp";
    return rv.promise();
  }

  hasWebP().then(function() {
    nowebp = document.getElementsByClassName('no-webp');
    for (i = 0; i < nowebp.length; i++) {
      nowebp[i].style.display = "none";
    }
    console.log("Hooray!!  WebP is enabled.  Things will be wonderful now.");
  }, function() {

    webp = document.getElementsByClassName('webp');
    for (i = 0; i < webp.length; i++) {
      webp[i].style.display = "none";
    }
    nowebp = document.getElementsByClassName('no-webp');
    for (i = 0; i < nowebp.length; i++) {
      nowebp[i].style.display = "block";
    }
    console.log("Note: your browser does not support the new Google WebP format. Please remain where you are while our support team locates you to begin the reeducation process.");
  });
</script>

<script>
  grecaptcha.ready(function() {
    grecaptcha.execute('<?= $settings->captcha ?>', {
      action: 'homepage'
    }).then(function(token) {

    });
  });
</script>
<script>
  window.addEventListener("load", function() {
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "<?= $settings->second_color; ?>",
          "text": "#000"
        },
        "button": {
          "background": "#eee",
          "text": "#1C2331!important"
        }
      },
      "type": "opt-out",
      "content": {
        "message": "Nasza strona internetowa korzysta z plików cookie. Dzięki temu możemy zapewnić naszym użytkownikom satysfakcjonujące wrażenia z przeglądania naszej witryny i jej prawidłowe funkcjonowanie.",
        "dismiss": "Rozumiem",
        "deny": "",
        "allow": "Rozumiem",
        "link": "Czytaj więcej...",
        "href": "<?php echo base_url(); ?>uploads/<?= $settings->privace;  ?>"
      }
    })
  });

  function RODO() {
    var text = "<?= $settings->rodo; ?>"
    alert(text);
  }
</script>
<?php if ($this->uri->segment(1) == 'kontakt') : ?>

  <script type="text/javascript">
    $('#contact-form').submit(function(event) {
      event.preventDefault();
      var email = $('#email').val();

      grecaptcha.ready(function() {
        grecaptcha.execute('<?= $settings->captcha ?>', {
          action: 'mailer/send'
        }).then(function(token) {
          $('#contact-form').prepend('<input type="hidden" name="token" value="' + token + '">');
          $('#contact-form').unbind('submit').submit();
        });;
      });
    });
  </script>
<?php endif; ?>
</body>

</html>