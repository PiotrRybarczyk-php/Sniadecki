<?php
$c = 0;
if ($type == 'current') {
    $banner = $logo[5]->photo;
    $banner_title = $logo[5]->title;
    $banner_position = $logo[5]->position;
    $page_title = $subpages[5]->subtitle;
    $page_photo = $subpages[5]->photo;
    $page_desc = $subpages[5]->description;
} else {
    $banner = $logo[6]->photo;
    $banner_title = $logo[6]->title;
    $banner_position = $logo[6]->position;
    $page_title = $subpages[6]->subtitle;
    $page_photo = $subpages[6]->photo;
    $page_desc = $subpages[6]->description;
}
?>
<div class="box_normal banner" style="background-position: center <?= $banner_position . '%'; ?>;background-image:url(<?= base_url('uploads/') . $banner; ?>);">
    <div class="banner_content main_padding">
        <p class="banner_title"><?= $banner_title; ?></p>
    </div>
</div>
<div class="box_center qa_fade">
    <div class="base_text section_text"><?= $page_title; ?></div>
    <span class="section_line"></span>
</div>
<div class="item_container main_padding mb-5">
    <div class="grid-5 gtab-1">
        <div class="item_container size-3 tab_size-1 text_base simple_text">
            <?= textlim($page_desc, 1504); ?>
        </div>
        <div class="item_container_center large_padding size-2 mob_size-1">
            <div class="item_container_picture">
                <img class="img_get_small" src="<?= base_url('uploads/') . $page_photo; ?>">
            </div>
        </div>
    </div>
</div>
<div class="box_center cert_padding">
    <div class="grid-1">
        <?php foreach ($certificate as $item) : ?>
            <?php if ($item->kind == $type) : ?>
                <a href="<?= base_url('uploads/') . $item->file_path . $item->name; ?>" download class="cert_element" id="<?= 'cert-' . $c; ?>" onclick="toggle_cert(<?= $c; ?>)">
                    <div class="cert_label"><?= $item->title ?></div>
                    <div class="cert_btn"><i class="download_text">Pobierz</i><i class="download" style="background-image:url(<?= base_url('assets/front/img/download.svg'); ?>)"></i></div>
                </a>
                <?php $c++; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
<script>
    function toggle_cert(id) {
        //gets all documents data
        var reset_label = document.querySelectorAll('.cert_label');
        var reset_btn = document.querySelectorAll('.cert_btn');
        var element_id = 'cert-' + id;
        var index = 0;
        //resets style of unselected labels
        for (; index < reset_label.length; index++) {
            reset_label[index].style.backgroundColor = "#fbe900";
            reset_label[index].style.color = "#19296f";
            reset_btn[index].style.color = "white";
        }
        //gets and styles clicked label
        var element = document.getElementById(element_id);
        var child = element.children;
        child[0].style.backgroundColor = "#19296f";
        child[0].style.color = "white";
        child[1].style.color = "#fbe900";
    }
</script>