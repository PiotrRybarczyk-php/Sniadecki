<div class="box_normal banner" style="background-position: center <?= $logo[1]->position . '%'; ?>;background-image:url(<?= base_url('uploads/') . $logo[1]->photo; ?>);">
    <div class="banner_content main_padding">
        <p class="banner_title"><?= $cat->title; ?></p>
    </div>
</div>
<div class="box_flex flex_center main_padding">
    <div class="nav_bar">
        <p><a class="nav_el" href="<?= base_url('oferta'); ?>">Oferta</a></p>
        <p>/<?= $cat->title; ?></p>
    </div>
</div>
<div class="box_normal" style="height:102px;"></div>
<div class="grid-3 gtab-2 gmob-1">
    <?php foreach ($subcat as $element) : ?>
        <div class="box_flex flex_center small_padding sep_bot-xl">
            <a href="<?= base_url(); ?>podkategoria/<?= $element->id; ?>/<?= slug($element->title); ?>" class="offer_picture" style="background-image:url(<?= base_url('uploads/') . $element->photo; ?>);">
                <div class="offer_overlay"><?= $element->title; ?></div>
            </a>
        </div>
    <?php endforeach; ?>
</div>