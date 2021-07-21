<?php $c = 0; ?>
<div class="box_normal banner" style="background-position: center <?= $logo[7]->position . '%'; ?>;background-image:url(<?= base_url('uploads/') . $logo[7]->photo; ?>);">
    <div class="banner_content main_padding">
        <p class="banner_title"><?= $logo[7]->title; ?></p>
    </div>
</div>
<div class="box_normal" style="height:102px;"></div>
<div class="box_flex flex_center">
    <div class="product_list grid-3 gmob-2">
        <?php foreach ($entry as $element) : ?>
            <?php $c++; ?>
            <?php if ($c % 2 != 0) {
                $class = 'picture_bor_b';
            } else {
                $class = 'picture_bor_y';
            } ?>
            <div class="box_flex flex_center sep_bot-xl mob_size-2">
                <div class="offer_picture <?= $class; ?>" style="background-image:url(<?= base_url('uploads/') . $element->photo; ?>);"></div>
            </div>
            <div class="item_container product_padding size-2 sep_bot-xl">
                <div class="box_flex sep_bot-l">
                    <p class="product_header"><?= $element->title; ?></p>
                </div>
                <div class="box_normal text_base simple_text sep_bot-m">
                    <?= textlim($element->description, 300); ?>
                </div>
                <div class="box_flex flex_left_mob">
                    <a class="blank" href="<?= base_url('wpis/') . $element->id . '/' . slug($element->title); ?>"><button class="btn_JS">Czytaj Więcej</button></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>