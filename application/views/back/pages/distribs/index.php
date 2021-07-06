    <!-- ########## START: MAIN PANEL ########## -->
    <?php
    $state_tab = array();
    $state_tab[0] = "DOLNOŚLĄSKIE";
    $state_tab[1] = "KUJAWSKO-POMORSKIE";
    $state_tab[2] = "LUBELSKIE";
    $state_tab[3] = "LUBUSKIE";
    $state_tab[4] = "ŁÓDZKIE";
    $state_tab[5] = "MAŁOPOLSKIE";
    $state_tab[6] = "MAZOWIECKIE";
    $state_tab[7] = "OPOLSKIE";
    $state_tab[8] = "PODKARPACKIE";
    $state_tab[9] = "PODLASKIE";
    $state_tab[10] = "POMORSKIE";
    $state_tab[11] = "ŚLĄSKIE";
    $state_tab[12] = "ŚWIĘTOKRZYSKIE";
    $state_tab[13] = "WARMIŃSKO-MAZURSKIE";
    $state_tab[14] = "WIELKOPOLSKIE";
    $state_tab[15] = "ZACHODNIOPOMORSKIE";
    ?>
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">Dystrybutorzy</h4>
        <p class="mg-b-0"><?php echo subtitle(); ?></p>
        <hr>
      </div><!-- d-flex -->
      <div class="br-pagebody mg-t-0 pd-x-30">
        <?php if (isset($_SESSION['flashdata'])) : ?>
          <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
        <?php endif; ?>
        <div class="table-wrapper">
          <table id="datatable1" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-5p align-top">L.p.</th>
                <th class="wd-45p align-top">Nazwa kontaktu</th>
                <th class="wd-45p align-top">Województwo</th>
                <th class="wd-50p text-right no-sort">
                  <a href="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/form/insert" class="btn btn-sm btn-info"><i class="fa fa-plus mg-r-10"></i> Dodaj</a>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 0;
              foreach ($rows as $value) : $i++; ?>
                <tr>
                  <td class="align-middle"><?php echo $i; ?>.</td>
                  <td class="align-middle"><?php echo $value->subtitle; ?></td>
                  <td class="align-middle"><?php echo $state_tab[substr($value->title, -1)]; ?></td>
                  <td class="text-right">
                    <a href="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/form/update/<?php echo $value->id; ?>" class="btn btn-sm btn-info"><i class="icon ion-compose mg-r-10"></i> Edytuj</a>
                    <!-- 
                      <a href="<?php echo base_url(); ?>panel/settings/delete/<?php echo $this->uri->segment(2); ?>/<?php echo $value->id; ?>" class="btn btn-sm btn-secondary" 
                      onclick="return confirm('Czy na pewno chcesz usunąć <?php echo $value->title; ?>? #<?php echo $value->id; ?>')" >
                        <i class="fa fa-close mg-r-10"></i> Usuń
                      </a> -->
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div><!-- table-wrapper -->