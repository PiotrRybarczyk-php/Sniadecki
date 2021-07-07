<div class="box_normal banner" style="background-position: center <?= $logo[2]->position . '%'; ?>;background-image:url(<?= base_url('uploads/') . $logo[2]->photo; ?>);">
    <div class="banner_content main_padding">
        <p class="banner_title"><?= $logo[2]->title; ?></p>
    </div>
</div>
<div class="box_center qa_fade">
    <div class="base_text section_text"><?= $subpages[1]->subtitle; ?></div>
    <span class="section_line"></span>
</div>
<div class="item_container main_padding mb-5">
    <div class="grid-5 gtab-1">
        <div class="item_container size-3 mob_size-1 text_base simple_text">
            <?= textlim($subpages[1]->description, 1504); ?>
        </div>
        <div class="item_container large_padding size-2 mob_size-1">
            <img class="img_get_small" src="<?= base_url('uploads/') . $subpages[1]->photo; ?>">
            <div class="pt-2"><a class="blank" href="<?= base_url('uploads/2021-07-07/test.pdf') ?>"><button class="btn_JS">Pobierz Katalog</button></a></div>
        </div>
    </div>
</div>