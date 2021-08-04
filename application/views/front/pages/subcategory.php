<?php $c = 0; ?>
<div class="box_normal banner" style="background-position: center <?= $logo[1]->position . '%'; ?>;background-image:url(<?= base_url('uploads/') . $logo[1]->photo; ?>);">
    <div class="banner_content main_padding">
        <p class="banner_title"><?= $subcat->title; ?></p>
    </div>
</div>
<div class="box_flex flex_center main_padding">
    <div class="nav_bar">
        <p><a class="nav_el" href="<?= base_url('oferta'); ?>">Oferta</a></p>
        <p>/<a class="nav_el" href="<?= base_url('kategoria/') . $cat->id . '/' . slug($cat->title); ?>"><?= $cat->title; ?></a></p>
        <p>/<?= $subcat->title; ?></p>
    </div>
</div>
<div class="box_normal" style="height:102px;"></div>
<div class="box_flex flex_center">
    <div class="product_list grid-3 gmob-2">
        <?php foreach ($product as $element) : ?>
            <?php $c++; ?>
            <?php if ($c % 2 != 0) {
                $class = 'picture_bor_b';
            } else {
                $class = 'picture_bor_y';
            } ?>
            <div class="box_flex flex_center sep_bot-xl mob_size-2">
                <a href="<?= base_url('produkt/') . $element->id . '/' . slug($element->title); ?>" class="offer_picture <?= $class; ?>" style="background-image:url(<?= base_url('uploads/') . $element->photo; ?>);"></a>
            </div>
            <div class="item_container product_padding size-2 sep_bot-xl">
                <div class="box_flex sep_bot-l">
                    <p class="product_header"><?= $element->title; ?></p>
                </div>
                <div class="box_normal text_base simple_text sep_bot-m">
                    <?= textlim($element->description, 300); ?>
                </div>
                <div class="box_flex flex_left_mob">
                    <a class="blank" href="<?= base_url('produkt/') . $element->id . '/' . slug($element->title); ?>"><button class="btn_JS">Więcej Informacji</button></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>