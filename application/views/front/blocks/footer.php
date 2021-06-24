<footer id="footer" class="main-footer mt-5 pt-0 pb-0" style="overflow:hidden;">
  <div class="container" style="max-width:100%;">

  </div>
</footer>

</main>
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
          "background": "<?= $settings->first_color ?>",
          "text": "#fff"
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