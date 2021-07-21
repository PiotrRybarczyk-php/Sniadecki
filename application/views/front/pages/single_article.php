<div class="box_normal banner" style="background-position: center <?= $logo[7]->position . '%'; ?>;background-image:url(<?= base_url('uploads/') . $logo[7]->photo; ?>);">
    <div class="banner_content main_padding">
        <p class="banner_title"><?= $entry->title; ?></p>
    </div>
</div>
<div class="box_normal" style="height:102px;"></div>
<div class="box_normal main_padding">
    <div class=" grid-5 gtab-2">
        <div class="item_container size-2 sep_bot-xl">
            <div class="box_flex flex_center">
                <div class="product_picture picture_bor_b" style="background-image:url(<?= base_url('uploads/') . $entry->photo; ?>);"></div>
            </div>
            <div class="box_flex flex_center">
                <div class="product_picture picture_bor_b" style="background-image:url(<?= base_url('uploads/') . $entry->photo2; ?>);"></div>
            </div>
        </div>
        <div class="item_container size-3 tab_size-2 product_padding_2 sep_bot-xl">
            <div class="box_flex sep_bot-l">
                <p class="product_header"><?= $entry->title; ?></p>
            </div>
            <div class="box_normal text_base simple_text sep_bot-m">
                <?= $entry->description; ?>
            </div>
            <div class="box_flex flex_center sep_top-s">
                <a class="blank" href="javascript:history.back()"><button class="btn_JS" style="min-width:290px;">Wróć</button></a>
            </div>
        </div>
    </div>
</div>