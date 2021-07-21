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

            <form class="form-layout form-layout-2" action="<?php echo base_url(); ?>panel/<?php echo $this->uri->segment(2); ?>/action/<?php echo $this->uri->segment(4) . '/' . $this->uri->segment(2) . '/' . $value->id; ?>" method="post" enctype="multipart/form-data">

                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12 pr-0">
                                <div class="form-group">
                                    <input id='title' class="form-control" value="<?= $product[$value->product_id - 1]->title; ?>" name="title" type="hidden">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-12 pr-0">
                                <div class="form-group bd-t-0-force">
                                    <label for="product" class="form-control-label">Wybierz Produkt: <span class="tx-danger">*</span></label>
                                    <select onchange="update_title()" class="form-control" id="product" name="product_id">
                                        <?php foreach ($product as $element) : ?>
                                            <option <?php if ($value->product_id == $element->id) echo 'selected'; ?> value="<?= $element->id; ?>"><?= $element->title; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div><!-- col-4 -->
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
            </form><!-- form-layout -->
            <script>
                function update_title() {
                    var src = document.getElementById('product');
                    var dest = document.getElementById('title');
                    var value = src.options[src.selectedIndex].innerHTML;
                    dest.value = value;
                }
            </script>