<div class="box_normal banner" style="background-position: center <?= $logo[3]->position . '%'; ?>;background-image:url(<?= base_url('uploads/') . $logo[3]->photo; ?>);">
    <div class="banner_content main_padding">
        <p class="banner_title"><?= $logo[3]->title; ?></p>
    </div>
</div>
<div class="box_center qa_fade">
    <div class="base_text section_text"><?= $subpages[2]->subtitle; ?></div>
    <span class="section_line"></span>
</div>
<div class="item_container main_padding mb-5">
    <div class="grid-5 gtab-1">
        <div class="item_container size-3 tab_size-1 text_base simple_text">
            <?= textlim($subpages[2]->description, 1504); ?>
        </div>
        <div class="item_container_center large_padding size-2 mob_size-1">
            <div class="item_container_picture">
                <img class="img_get_small" src="<?= base_url('uploads/') . $subpages[2]->photo; ?>">
                <div class="img_overlay"></div>
            </div>
        </div>
    </div>
    <div class="grid-5 gtab-1">
        <div class="item_container size-3 tab_size-1 text_base simple_text">
            <div class="item_container_center pt-2"><a class="blank" href="<?= base_url('certyfikaty_aktualne') ?>"><button class="btn_JS" style="width:337px;padding: 23px 25px 23px 25px;">Aktualne</button></a></div>
            <div class="item_container_center pt-2"><a class="blank" href="<?= base_url('certyfikaty_archiwalne') ?>"><button class="btn_JS" style="width:337px;padding: 23px 25px 23px 25px;">Archiwalne</button></a></div>
        </div>
        <div class="item_container size-2 tab_size-1">

        </div>
    </div>
</div>