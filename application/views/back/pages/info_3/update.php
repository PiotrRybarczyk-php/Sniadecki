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

            <form class="form-layout form-layout-2" action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4) . '/' . 'info' . '/' . $value->id; ?>" method="post" enctype="multipart/form-data">

                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="row">
                            <!-- set -->
                            <div class="col-md-12 pr-0">
                                <div class="form-group">
                                    <label class="form-control-label">Tytuł: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="title" value="<?php echo $value->title; ?>" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label">Link: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="link" value="<?php echo $value->link; ?>" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label">Przycisk: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="button" value="<?php echo $value->button; ?>" required>
                                </div>
                            </div><!-- col-4 -->
                        </div> <!-- set -->
                        <div class="row">
                            <!-- set -->
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-0-force bd-b-0-force">
                                    <label class="form-control-label">Opis działu:</label>
                                    <textarea class="summernote" name="description"><?php echo $value->description; ?></textarea>
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