<?php $c = 0; ?>
<div id="jetcarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php foreach ($slider as $slide) : ?>
            <?php $c++; ?>
            <div class="carousel-item <?php if ($c == 1) echo 'active' ?>">
                <div class="silder_img" style="background-image:url(<?= images() . $slide->photo; ?>);">
                    <div class="forward_content inner_padding">
                        <div class="grid-5 gtab-2 gmob-1">
                            <div class="item_container size-2">
                                <div class="myrow header_space">
                                    <h1 class="header_font"><?= $slide->title; ?></h1>
                                </div>
                                <div class="myrow header_space">
                                    <h3 class="subheader_font"><?= $slide->subtitle; ?></h3>
                                </div>
                                <div class="myrow"><a class="blank" href="<?= base_url() . $slide->link; ?>"><button class="btn_JS"><?= $slide->button; ?></button></a></div>
                            </div>
                            <div class="myrow size-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="silder_gradient"></div>
    </div>
    <a class="carousel-control-prev" href="#jetcarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="width:80px;height:80px;"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#jetcarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true" style="width:80px;height:80px;"></span>
        <span class="sr-only">Next</span>
    </a>
    <div class="absolute_container">
        <ol class="carousel-indicators" style="align-items:center;">
            <li data-target="#jetcarousel" data-slide-to="0" class="active"></li>
            <?php for ($x = 0; $x < $c - 1; $x++) : ?>
                <li data-target="#jetcarousel" data-slide-to="<?= $x + 1; ?>"></li>
            <?php endfor; ?>
        </ol>
    </div>
</div>
<div class="box_center qa_fade">
    <div class="base_text section_text"><?= $info_3->title; ?></div>
    <span class="section_line"></span>
</div>
<div class="box_center main_padding text_base simple_text mb-5">
    <?= $info_3->description; ?>
</div>
<div class="box_center main_padding mb-3">
    <div class="grid-4 gtab-2 gmob-1">
        <div class="item_container small_padding mob_space">
            <div class="offer_box" style="background-image:url(<?= base_url('uploads/') . $products_page[0]->photo; ?>);">
                <a href="produkt/<?= $products_page[0]->product_id; ?>/<?= slug($products_page[0]->title); ?>" class="offer_block">
                    <p class="title_product_2"><?= $products_page[0]->title; ?></p>
                </a>
            </div>
        </div>
        <div class="item_container small_padding mob_space">
            <div class="offer_box" style="background-image:url(<?= base_url('uploads/') . $products_page[1]->photo; ?>);">
                <a href="produkt/<?= $products_page[1]->product_id; ?>/<?= slug($products_page[1]->title); ?>" class="offer_block">
                    <p class="title_product_2"><?= $products_page[1]->title; ?></p>
                </a>
            </div>
        </div>
        <div class="item_container small_padding mob_space">
            <div class="offer_box" style="background-image:url(<?= base_url('uploads/') . $products_page[2]->photo; ?>);">
                <a href="produkt/<?= $products_page[2]->product_id; ?>/<?= slug($products_page[2]->title); ?>" class="offer_block">
                    <p class="title_product_2"><?= $products_page[2]->title; ?></p>
                </a>
            </div>
        </div>
        <div class="item_container small_padding mob_space">
            <div class="offer_box" style="background-image:url(<?= base_url('uploads/') . $products_page[3]->photo; ?>);">
                <a href="produkt/<?= $products_page[3]->product_id; ?>/<?= slug($products_page[3]->title); ?>" class="offer_block">
                    <p class="title_product_2"><?= $products_page[3]->title; ?></p>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="myrow flex_center"><a class="blank" href="oferta"><button class="btn_JS"><?= $info_3->button; ?></button></a></div>
<div class="box_center qa_fade">
    <div class="base_text section_text"><?= $info_1->title; ?></div>
    <span class="section_line"></span>
</div>
<div class="item_container main_padding mb-5" style="color:black;">
    <h2 class="subtitle"><?= $info_1->subtitle; ?></h2>
</div>
<div class="item_container main_padding">
    <div class="grid-5 gtab-1">
        <div class="item_container size-3 mob_size-1 text_base simple_text">
            <?= textlim($info_1->description, 1506); ?>
        </div>
        <div class="item_container_center small_padding size-2 mob_size-1">
            <div class="info_picture" style="background-image:url(<?= base_url('uploads/') . $info_1->photo; ?>);">
                <div class="img_overlay"></div>
            </div>
        </div>
    </div>
    <div class="grid-5 gmob-3">
        <div class="item_container_align small_padding">
            <img class="img_get_tiny" src="<?= base_url('assets/front/img/logoJS.png'); ?>">
        </div>
        <div class="item_container_align small_padding">
            <img class="img_get_tiny" src="<?= base_url('assets/front/img/gazele.png'); ?>">
        </div>
        <div class="item_container_align small_padding">
            <img class="img_get_tiny" src="<?= base_url('assets/front/img/iso.png'); ?>">
        </div>
        <div class="item_container_align size-2 mob_size-3 small_padding">
            <a class="blank btn_margin" href="<?= base_url() . $info_1->link; ?>"><button class="btn_JS"><?= $info_1->button; ?></button></a>
        </div>
    </div>
</div>
<div class="box_center qa_fade mb-3">
    <div class="base_text section_text">komu pomagają nasze produkty</div>
    <span class="section_line"></span>
</div>
<div class="item_container main_padding">
    <div class="grid-4 gtab-2 gmob-1">
        <?php $it = 0;
        foreach ($products_info as $item) : ?>
            <?php $it++; ?>
            <?php if ($it % 2 != 0) : ?>
                <div class="item_container_center small_padding">
                    <div class="item_product" style="background: url('<?= base_url('uploads/') . $item->photo2; ?>');">
                        <div class="content_product" style="background-color:rgba(251, 233, 0,0.92);">
                            <div class="myrow flex_center label_product qa_fade-left"><span class="circle" style="background-color: #2e3972;"><img class="icon_product" src="<?= base_url('uploads/') . $item->photo; ?>"></span></div>
                            <div class="title_product" style="color:#2e3972">
                                <p class="line_product"><?= $item->title; ?></p>
                            </div>
                            <div class="myrow text_base simple_text flex_center" style="color:#2e3972;text-align:center;"><?= textlim($item->description, 300); ?></div>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="item_container_center small_padding ">
                    <div class="item_product " style="background: url('<?= base_url('uploads/') . $item->photo2; ?>');">
                        <div class="content_product" style="background-color:rgba(46, 57, 114,0.92);">
                            <div class="myrow flex_center label_product qa_fade-right"><span class="circle" style="background-color: #fbe900;"><img class="icon_product" src="<?= base_url('uploads/') . $item->photo; ?>"></span></div>
                            <div class="title_product" style="color:#fbe900">
                                <p class="line_product"><?= $item->title; ?></p>
                            </div>
                            <div class="myrow text_base simple_text flex_center" style="color:#fbe900;text-align:center;"><?= textlim($item->description, 300); ?></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="myrow flex_center my-5"><a class="blank" href="#"><button class="btn_JS">Zobacz Katalog</button></a></div>
</div>
<div class="box_center qa_fade">
    <div class="base_text section_text"><?= $info_2->title; ?></div>
    <span class="section_line"></span>
</div>
<div class="item_container main_padding" style="color:black;">
    <div class="grid-5 gtab-1 section_margin">
        <div class="grid-1 size-3 tab_size-1 small_padding ">
            <div class="myrow text_base simple_text" style="max-width:905px;"><?= textlim($info_2->description, 1006); ?></div>
            <div class="item_container_align"><a class="blank" href="<?= base_url() . $info_2->link; ?>"><button class="btn_JS"><?= $info_2->button; ?></button></a></div>
        </div>
        <div class="item_container_center size-2 tab_size-1 small_padding ">
            <div style="position:relative;">
                <img class="img_get_medium" src="<?= base_url('uploads/') . $info_2->photo; ?>">
                <div class="img_cover"></div>
            </div>
        </div>
    </div>
</div>
<div class="box_center qa_fade">
    <div class="base_text section_text">opinie klientów</div>
    <span class="section_line"></span>
</div>
<div class="item_container main_padding">
    <div class="grid-4 gtab-2 gmob-1">
        <?php $it = 0;
        foreach ($opinions as $item) : ?>
            <?php $it++; ?>
            <?php if ($it % 2 != 0) : ?>
                <div class="item_container_center small_padding mob_space qa_fade-up">
                    <div class="item_opinion " style="background: url('<?= base_url('uploads/') . $item->photo; ?>');">
                        <div class="content_opinion" style="background-color:rgba(46, 57, 114,0.92);">
                            <div class="myrow flex_center label_opinion" style="padding-top:3vw;"><img class="icon_opinion" src="<?= base_url('assets/front/img/thumb_y.svg'); ?>"></div>
                            <div class="myrow text_base tiny_text flex_center" style="text-align:center;"><?= textlim($item->description, 500); ?></div>
                            <div class="myrow flex_right label_opinion text_base pr-4"><?= $item->title; ?></div>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="item_container_center small_padding mob_space qa_fade-down">
                    <div class="item_opinion" style="background: url('<?= base_url('uploads/') . $item->photo; ?>');">
                        <div class="content_opinion" style="background-color:rgba(251, 233, 0,0.92);">
                            <div class="myrow flex_center label_opinion" style="padding-top:3vw;"><img class="icon_opinion" src="<?= base_url('assets/front/img/thumb_b.svg'); ?>"></div>
                            <div class="myrow text_base tiny_text flex_center" style="color:black;text-align:center;"><?= textlim($item->description, 500); ?></div>
                            <div class="myrow flex_right label_opinion text_base pr-4" style="color:black;"><?= $item->title; ?></div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
<div class="box_center qa_fade">
    <div class="base_text section_text"><?= $info_4->title; ?></div>
    <span class="section_line"></span>
</div>
<div class="box_center  main_padding text_base simple_text mb-5">
    <?= textlim($info_4->description, 1006); ?>
</div>
<div class="item_container main_padding">
    <div class="grid-2 gtab-1 ">
        <div class="item_container_center flex_right_mob">
            <div style="position:relative;">
                <img class="img_get_medium" src="<?= base_url('uploads/') . $info_4->photo; ?>">
                <div class="img_overlay"></div>
            </div>
        </div>
        <div class="item_container_align large_padding ">
            <div class="grid-1">
                <div class="textbox_small">
                    <?= textlim($info_4->description_2, 500); ?>
                </div>
                <div class="item_container_align mob_force_center"><a class="blank" href="<?= base_url() . $info_4->link; ?>"><button class="btn_JS"><?= $info_4->button; ?></button></a></div>
            </div>
        </div>
    </div>
</div>