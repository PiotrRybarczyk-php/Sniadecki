<?php for ($i = 0; $i < 3; $i++) : ?>
  <div class="modal photo-picker-modal fade" id="modal_<?= $i + 1 ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title w-100 text-dark" id="myModalLabel_<?= $i + 1 ?>">Zdjęcie</h3>
          <div class="chosen-photos chosen-photos-<?= $i + 1 ?>"></div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <ul class="nav nav-tabs" id="myTab_<?= $i + 1 ?>" role="tablist">
            <li onclick="showSearch_<?= $i + 1 ?>()" class="nav-item nav-item-modal">
              <a class="nav-link active nav-link-modal" id="home-tab_<?= $i + 1 ?>" data-toggle="tab" href="#home_<?= $i + 1 ?>" role="tab" aria-controls="home" aria-selected="true">Dodaj nowe zdjęcie: </a>
            </li>
            <li onclick="showSearch_<?= $i + 1 ?>()" class="nav-item nav-item-modal">
              <a class="nav-link nav-link-modal" id="profile-tab_<?= $i + 1 ?>" data-toggle="tab" href="#profile_<?= $i + 1 ?>" role="tab" aria-controls="profile" aria-selected="false">Wybierz: </a>
            </li>
            <li id="li-search-<?= $i + 1 ?>" class="nav-item nav-item-modal d-none align-items-center mr-auto ml-sm-auto bd bd-b-0-force">
              <a class="px-3">
                <input type="text" class="form-control photo-picker-search" id="search_<?= $i + 1 ?>" placeholder="Szukaj...">
              </a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent_<?= $i + 1 ?>">
            <div class="tab-pane add-file-modal fade show active" id="home_<?= $i + 1 ?>" role="tabpanel" aria-labelledby="home-tab">
              <label class="custom-file m-3">
                <input type="file" id="photo_<?= $i + 1 ?>" onchange="photoListener(1)" class="custom-file-input" name="photo_<?= $i + 1 ?>">
                <span class="custom-file-control custom-file-control-inverse"></span>
              </label>
            </div>
            <div class="tab-pane fade bg-white" id="profile_<?= $i + 1 ?>" role="tabpanel" aria-labelledby="profile-tab">
              <div class="px-0 py-3 p-sm-4">
                <input type="hidden" name="server_photo_<?= $i + 1 ?>" id="server_photo_<?= $i + 1 ?>">
                <div class="row modal-picture<?= $i + 1 ?>">
                  <?php for ($j = 0; $j < count($api_gallery); $j++) : ?>
                    <div style="box-shadow: unset!important; background-color: unset!important;" class="col-lg-3 p-2 col-12 col-sm-6 m-0 mb-3 col-md-4 double-modal-picture picture photo-row-<?= ceil(($j + 1) / 12) ?>">
                      <div id="gallery_photo<?= $api_gallery[$j]['id'] ?>__<?= $i + 1  ?>" onclick="choicePhoto('<?= $api_gallery[$j]['photo'] ?>' , '<?= base_url()  ?>' , <?= $api_gallery[$j]['id'] ?>,<?= $i + 1 ?>); " style="background-image: url('<?= base_url() . 'uploads/' . $api_gallery[$j]['photo'] ?>')" class="gallery_photo p-1 img-fluid " alt="<?= $api_gallery[$j]['alt'] ?>" data-title="<?= $api_gallery[$j]['photo'] ?>" data-size="<?= $api_gallery[$j]['size'] ?>">

                        <div class="description">
                          <?= $api_gallery[$j]['photo'] ?>
                        </div>
                      </div>
                    </div>
                  <?php endfor; ?>
                  <div id="modal-pagination-<?= $i + 1 ?>" class="col-12 mt-4">
                    <nav aria-label="Page navigation example ">
                      <ul class="pagination modal-pagination pg-elegant justify-content-center mb-0">
                        <?php for ($j = 0; $j < count($api_gallery) / 12; $j++) : ?>
                          <li id="<?= $j + 1 ?>" onclick="paginate(<?= $j + 1 ?>);setActiveClass_<?= $i + 1 ?>(<?= $j + 1 ?>)" class="page-item <?php if ($j == 0) echo 'active' ?>"><a class="page-link"><?= $j + 1 ?></a></li>
                        <?php endfor; ?>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Zapisz zmiany</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function showSearch_<?= $i + 1 ?>() {

      if (!document.getElementById('profile-tab_<?= $i + 1 ?>').classList.contains('active')) {
        document.getElementById('li-search-<?= $i + 1 ?>').classList.remove('d-none');
        document.getElementById('li-search-<?= $i + 1 ?>').classList.add('d-flex');
      } else {
        document.getElementById('li-search-<?= $i + 1 ?>').classList.add('d-none');
        document.getElementById('li-search-<?= $i + 1 ?>').classList.remove('d-flex');
      }
    }

    function showPagination_<?= $i + 1 ?>(search) {
      if (search === '') {
        document.getElementById('modal-pagination-<?= $i + 1 ?>').classList.remove('d-none');
      } else {
        document.getElementById('modal-pagination-<?= $i + 1 ?>').classList.add('d-none');
      }
    }

    document.getElementById('search_<?= $i + 1 ?>').addEventListener('keyup', () => {
      let search = document.getElementById('search_<?= $i + 1 ?>').value;
      showPagination_<?= $i + 1 ?>(search);
      if (search === '') {
        paginate(1);
        setActiveClass_<?= $i + 1 ?>(1);
        return;
      }
      let pictures = document.querySelector('#modal_<?= $i + 1 ?>').getElementsByClassName('picture');
      for (let picture of pictures) {
        let src = picture.getElementsByClassName('gallery_photo')[0].getAttribute('data-bg').split('/');
        let name = src[src.length - 2] + src[src.length - 1];
        if (name.includes(search)) {
          picture.style.display = '';
        } else {
          picture.style.display = 'none';
        }
      }
    })

    function setActiveClass_<?= $i + 1 ?>(id) {
      let modalPagination = document.getElementsByClassName('modal-pagination')[<?= $i ?>];
      let pageItems = modalPagination.getElementsByTagName('li');
      for (let item of pageItems) {
        id = parseInt(id);
        if (item.classList.contains('active')) {
          item.classList.remove('active');
          pageItems[id - 1].classList.add("active");
        }
      }
    }
  </script>

<?php endfor; ?>

<script>
  function paginate(page) {

    let photos = document.getElementsByClassName('picture');
    for (photo of photos) {
      if (!photo.classList.contains('photo-row-' + page)) {

        photo.style.display = 'none';
      } else {
        photo.style.display = '';
      }
    }
  }

  paginate(1);
</script>