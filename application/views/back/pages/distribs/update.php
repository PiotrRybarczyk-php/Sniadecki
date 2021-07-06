    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="pd-30">
            <h4 class="tx-gray-800 mg-b-5"><?php echo ucfirst(str_replace('_', ' ', $this->uri->segment(2))); ?> #<?php echo $value->id; ?></h4>
            <p class="mg-b-0"><?php echo subtitle(); ?></p>
            <hr>
        </div><!-- d-flex -->

        <div class="br-pagebody mg-t-0 pd-x-30">
            <?php if (isset($_SESSION['flashdata'])) : ?>
                <div id="alert-box"><?php echo $_SESSION['flashdata']; ?></div>
            <?php endif; ?>
            <?php
            $state_table = array();
            for ($i = 0; $i < 16; $i++) {
                $instance = 'state-' . $i;
                if ($value->title == $instance) {
                    $state_table[$i] = 'selected="selected"';
                } else {
                    $state_table[$i] = '';
                }
            }
            ?>
            <form class="form-layout form-layout-2" action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4) . '/' . $this->uri->segment(2) . '/' . $value->id; ?>" method="post" enctype="multipart/form-data">

                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="row">
                            <!-- set -->
                            <div class="col-md-12 pr-0">
                                <div class="form-group">
                                    <label class="form-control-label">Wybierz Województwo: <span class="tx-danger">*</span></label>
                                    <select class="form-control" name="title" id="title">
                                        <option value="state-0" <?= $state_table[0]; ?>>DOLNOŚLĄSKIE</option>
                                        <option value="state-1" <?= $state_table[1]; ?>>KUJAWSKO-POMORSKIE</option>
                                        <option value="state-2" <?= $state_table[2]; ?>>LUBELSKIE</option>
                                        <option value="state-3" <?= $state_table[3]; ?>>LUBUSKIE</option>
                                        <option value="state-4" <?= $state_table[4]; ?>>ŁÓDZKIE</option>
                                        <option value="state-5" <?= $state_table[5]; ?>>MAŁOPOLSKIE</option>
                                        <option value="state-6" <?= $state_table[6]; ?>>MAZOWIECKIE</option>
                                        <option value="state-7" <?= $state_table[7]; ?>>OPOLSKIE</option>
                                        <option value="state-8" <?= $state_table[8]; ?>>PODKARPACKIE</option>
                                        <option value="state-9" <?= $state_table[9]; ?>>PODLASKIE</option>
                                        <option value="state-10" <?= $state_table[10]; ?>>POMORSKIE</option>
                                        <option value="state-11" <?= $state_table[11]; ?>>ŚLĄSKIE</option>
                                        <option value="state-12" <?= $state_table[12]; ?>>ŚWIĘTOKRZYSKIE</option>
                                        <option value="state-13" <?= $state_table[13]; ?>>WARMIŃSKO-MAZURSKIE</option>
                                        <option value="state-14" <?= $state_table[14]; ?>>WIELKOPOLSKIE</option>
                                        <option value="state-15" <?= $state_table[15]; ?>>ZACHODNIOPOMORSKIE</option>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-12 pr-0">
                                <div class="form-group">
                                    <label class="form-control-label">Nazwa Kontaktu: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="subtitle" value="<?= $value->subtitle; ?>" required>
                                </div>
                            </div><!-- col-4 -->
                        </div> <!-- set -->
                        <div class="row">
                            <!-- set -->
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-0-force bd-b-0-force">
                                    <label class="form-control-label">Treść Kontaktu:</label>
                                    <textarea class="summernote" name="description"><?php echo $value->description;  ?></textarea>
                                </div>
                            </div>
                            <!-- col-4 -->
                        </div> <!-- set -->
                        <div class="row">
                            <div class="col-md-12 pr-0">
                                <div class="form-layout-footer bd pd-20">
                                    <button class="btn btn-info" type="submit">Zapisz</button>
                                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Anuluj</button>
                                </div><!-- form-group -->
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
                <?php $this->load->view('back/forms/double_modal'); ?>

            </form><!-- form-layout -->