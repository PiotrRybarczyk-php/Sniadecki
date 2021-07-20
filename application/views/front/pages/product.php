<div class="box_normal banner" style="background-position: center <?= $logo[1]->position . '%'; ?>;background-image:url(<?= base_url('uploads/') . $logo[1]->photo; ?>);">
    <div class="banner_content main_padding">
        <p class="banner_title"><?= $product->title; ?></p>
    </div>
</div>
<div class="box_flex flex_center main_padding">
    <div class="nav_bar">
        <p><a class="nav_el" href="<?= base_url('oferta'); ?>">Oferta</a></p>
        <p>/<a class="nav_el" href="<?= base_url('kategoria/') . $cat->id . '/' . slug($cat->title); ?>"><?= $cat->title; ?></a></p>
        <p>/<a class="nav_el" href="<?= base_url('podkategoria/') . $subcat->id . '/' . slug($subcat->title); ?>"><?= $subcat->title; ?></a></p>
        <p>/<?= $product->title; ?></p>
    </div>
</div>
<div class="box_normal" style="height:102px;"></div>
<div class="box_normal main_padding">
    <div class=" grid-5 gtab-2">
        <div class="item_container size-2 sep_bot-xl">
            <div class="box_flex flex_center">
                <div class="product_picture picture_bor_b" style="background-image:url(<?= base_url('uploads/') . $product->photo; ?>);"></div>
            </div>
            <div class="box_flex flex_center sep_top-custom t-hide">
                <a class="blank" href="<?= base_url('kontakt'); ?>"><button class="btn_JS" style="min-width:290px;">Kontakt</button></a>
            </div>
            <div class="box_flex flex_center sep_top-s t-hide">
                <a class="blank" href="javascript:history.back()"><button class="btn_JS" style="min-width:290px;">Wróć</button></a>
            </div>
        </div>
        <div class="item_container size-3 tab_size-2 product_padding_2 sep_bot-xl">
            <div class="box_flex sep_bot-l">
                <p class="product_header"><?= $product->title; ?></p>
            </div>
            <div class="box_normal text_base simple_text sep_bot-m">
                <?= $product->description; ?>
            </div>
            <div class="box_flex flex_center sep_top-custom t-show">
                <a class="blank" href="<?= base_url('kontakt'); ?>"><button class="btn_JS" style="min-width:290px;">Kontakt</button></a>
            </div>
            <div class="box_flex flex_center sep_top-s t-show">
                <a class="blank" href="javascript:history.back()"><button class="btn_JS" style="min-width:290px;">Wróć</button></a>
            </div>
        </div>
    </div>
    <div class="grid-3 gtab-2 gmob-1">
        <?php foreach ($picture as $element) : ?>
            <div class="box_flex flex_center">
                <div data-toggle="modal" data-target="#exampleModal" class="product_picture_2 picture_bor_b" style="background-image:url(<?= base_url('uploads/') . $element->photo; ?>);"></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>