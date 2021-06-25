<?php $c = 3; ?>
<div id="jetcarousel" class="carousel slide" data-ride="carousel" style="height:930px;">
    <div class="carousel-inner">
        <?php for ($x = 0; $x < $c; $x++) : ?>
            <?php /*$c++;*/ ?>
            <div class="carousel-item <?php if ($x == 0) echo 'active' ?>">
                <div class="silder_img" style="background-image:url(<?= base_url('assets/front/img/smelters.webp'); ?>);">
                    <div class="forward_content inner_padding">
                        <div class="grid-5 gtab-2 gmob-1">
                            <div class="item_container size-2">
                                <div class="myrow header_space">
                                    <h1 class="header_font">Producent</h1>
                                </div>
                                <div class="myrow header_space">
                                    <h3 class="subheader_font">Osłon Twarzy</h3>
                                </div>
                                <div class="myrow"><button class="btn_JS">Oferta</button></div>
                            </div>
                            <div class="myrow size-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
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
<div class="box_center qanim">
    <div class="base_text section_text">poznaj nasze specjalistyczne produkty</div>
    <span class="section_line"></span>
</div>
<div class="box_center debug_black main_padding text_base simple_text mb-5">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra, mauris vitae lobortis aliquet,
    augue elit molestie dui, non laoreet elit justo vel augue. Nulla egestas finibus velit, sit amet sodales turpis. Mauris pretium nibh gravida sapien imperdiet, id tincidunt augue sollicitudin. Suspendisse potenti.
    In hac habitasse platea dictumst. Aliquam erat volutpat. Sed eleifend et massa sed iaculis. Ut non ante consectetur, hendrerit nibh vitae, porta leo. Donec volutpat lacus a urna euismod lacinia eu vitae nulla. Donec dapibus neque sit amet ex efficitur,
    at ultricies neque vestibulum. Phasellus sollicitudin urna id dui vestibulum tristique.<br>Nam vitae suscipit dui. Duis ullamcorper malesuada sapien sit amet faucibus.
    Quisque sagittis, sem quis iaculis malesuada, lacus quam aliquet nisl, sit amet cursus eros turpis at lacus. Etiam varius, mi non mattis consectetur, odio ex rutrum erat, eget pretium eros felis eu purus. Suspendisse id tempus sem, eget porttitor nibh. Sed dapibus nam.
</div>
<div class="box_center main_padding mb-3">
    <div class="grid-4 gtab-2 gmob-1">
        <div class="item_container small_padding debug_red">
            <div class="offer_box debug_blue" style="background-image:url(<?= base_url('assets/front/img/head1.png'); ?>);">
                <div class="offer_block"></div>
            </div>
        </div>
        <div class="item_container small_padding debug_red">
            <div class="offer_box debug_blue" style="background-image:url(<?= base_url('assets/front/img/head2.png'); ?>);">
                <div class="offer_block"></div>
            </div>
        </div>
        <div class="item_container small_padding debug_red">
            <div class="offer_box debug_blue" style="background-image:url(<?= base_url('assets/front/img/head3.png'); ?>);">
                <div class="offer_block"></div>
            </div>
        </div>
        <div class="item_container small_padding debug_red">
            <div class="offer_box debug_blue" style="background-image:url(<?= base_url('assets/front/img/head4.png'); ?>);">
                <div class="offer_block"></div>
            </div>
        </div>
    </div>
</div>
<div class="myrow flex_center"><button class="btn_JS">Zobacz Całą Ofertę</button></div>
<div class="box_center qanim">
    <div class="base_text section_text">poznaj nas</div>
    <span class="section_line"></span>
</div>
<div class="item_container main_padding mb-5" style="color:black;">
    <h2 class="subtitle">PPH im. Jędrzeja Śniadeckiego Sp. z o.o.</h2>
</div>
<div class="item_container main_padding">
    <div class="grid-5 gtab-1">
        <div class="item_container size-3 debug_black text_base simple_text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac volutpat ante. In et ipsum id ex aliquet consequat in at mauris. Nunc bibendum, ipsum quis convallis interdum, lorem lorem ultricies sapien, nec varius neque libero eget ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas lorem dolor, sagittis non lectus facilisis, porttitor accumsan magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec turpis eros, bibendum vel erat eget, elementum cursus lorem.</p>
            <p>Phasellus maximus diam ut mi vehicula egestas. Pellentesque eu sollicitudin libero. Nulla facilisi. Mauris at arcu mollis, pretium ipsum non, viverra velit. Vivamus sit amet purus varius, fringilla felis accumsan, mollis diam. Quisque lacinia lacus congue, porta nibh vitae, congue turpis. Sed varius mauris eget erat placerat finibus. In hac habitasse platea dictumst. Curabitur in ullamcorper quam. Nunc eget finibus tortor, id sodales libero. Suspendisse commodo tortor ante, ut luctus lorem iaculis nec.</p>
            <p>Pellentesque condimentum diam orci, at aliquet lorem tempus et. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed tempor scelerisque massa nec suscipit. Cras placerat in est et scelerisque. Aenean luctus enim ac lacinia dignissim. Nam gravida odio diam, et varius lorem bibendum id. Curabitur tortor eros, varius et ultrices non, gravida et est. Morbi cursus odio sit amet massa condimentum bibendum vestibulum.</p>
        </div>
        <div class="item_container_center size-2 debug_black"><img class="img_get_small" src="<?= base_url('assets/front/img/welder.png'); ?>"></div>
    </div>
    <div class="grid-5 gmob-3">
        <div class="item_container_align small_padding debug_black">
            <img class="img_get_tiny" src="<?= base_url('assets/front/img/logoJS.png'); ?>">
        </div>
        <div class="item_container_align small_padding debug_black">
            <img class="img_get_tiny" src="<?= base_url('assets/front/img/gazele.png'); ?>">
        </div>
        <div class="item_container_align small_padding debug_black">
            <img class="img_get_tiny" src="<?= base_url('assets/front/img/iso.png'); ?>">
        </div>
        <div class="item_container_align size-2 mob_size-3 small_padding debug_black">
            <button class="btn_JS">Kontakt</button>
        </div>
    </div>
</div>
<div class="box_center qanim mb-3">
    <div class="base_text section_text">komu pomagają nasze produkty</div>
    <span class="section_line"></span>
</div>
<div class="item_container main_padding">
    <div class="grid-4 gtab-2 gmob-1">
        <div class="item_container_center small_padding debug_black">
            <div class="item_product debug_green" style="background: url('<?= base_url('assets/front/img/welder.png'); ?>');">
                <div class="content_product" style="background-color:rgba(251, 233, 0,0.92);">
                    <div class="myrow flex_center label_product"><span class="circle" style="background-color: #2e3972;"><img class="icon_product" src="<?= base_url('assets/front/img/icon_1.svg'); ?>"></span></div>
                    <div class="title_product" style="color:#2e3972">
                        <p>PRZEMYSŁ</p>
                        <p>MECHANICZNY</p>
                    </div>
                    <div class="myrow text_base simple_text flex_center" style="color:#2e3972;text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor ipsum porttitor ante varius, molestie feugiat nisi convallis. Sed sem ex, imperdiet et est eget, maximus posuere metus. Suspendisse aliquet, justo id sollicitudin viverra, justo augue euismod ante, eu faucibus orci lacus a amet.</div>
                </div>
            </div>
        </div>
        <div class="item_container_center small_padding debug_black">
            <div class="item_product debug_green" style="background: url('<?= base_url('assets/front/img/welder.png'); ?>');">
                <div class="content_product" style="background-color:rgba(46, 57, 114,0.92);">
                    <div class="myrow flex_center label_product"><span class="circle" style="background-color: #fbe900;"><img class="icon_product" src="<?= base_url('assets/front/img/icon_2.svg'); ?>"></span></div>
                    <div class="title_product" style="color:#fbe900">
                        <p>PRZEMYSŁ</p>
                        <p>MECHANICZNY</p>
                    </div>
                    <div class="myrow text_base simple_text flex_center" style="color:#fbe900;text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor ipsum porttitor ante varius, molestie feugiat nisi convallis. Sed sem ex, imperdiet et est eget, maximus posuere metus. Suspendisse aliquet, justo id sollicitudin viverra, justo augue euismod ante, eu faucibus orci lacus a amet.</div>
                </div>
            </div>
        </div>
        <div class="item_container_center small_padding debug_black">
            <div class="item_product debug_green" style="background: url('<?= base_url('assets/front/img/welder.png'); ?>');">
                <div class="content_product" style="background-color:rgba(251, 233, 0,0.92);">
                    <div class="myrow flex_center label_product"><span class="circle" style="background-color: #2e3972;"><img class="icon_product" src="<?= base_url('assets/front/img/icon_3.svg'); ?>"></span></div>
                    <div class="title_product" style="color:#2e3972">
                        <p>PRZEMYSŁ</p>
                        <p>MECHANICZNY</p>
                    </div>
                    <div class="myrow text_base simple_text flex_center" style="color:#2e3972;text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor ipsum porttitor ante varius, molestie feugiat nisi convallis. Sed sem ex, imperdiet et est eget, maximus posuere metus. Suspendisse aliquet, justo id sollicitudin viverra, justo augue euismod ante, eu faucibus orci lacus a amet.</div>
                </div>
            </div>
        </div>
        <div class="item_container_center small_padding debug_black">
            <div class="item_product debug_green" style="background: url('<?= base_url('assets/front/img/welder.png'); ?>');">
                <div class="content_product" style="background-color:rgba(46, 57, 114,0.92);">
                    <div class="myrow flex_center label_product"><span class="circle" style="background-color: #fbe900;"><img class="icon_product" src="<?= base_url('assets/front/img/icon_4.svg'); ?>"></span></div>
                    <div class="title_product" style="color:#fbe900">
                        <p>PRZEMYSŁ</p>
                        <p>MECHANICZNY</p>
                    </div>
                    <div class="myrow text_base simple_text flex_center" style="color:#fbe900;text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor ipsum porttitor ante varius, molestie feugiat nisi convallis. Sed sem ex, imperdiet et est eget, maximus posuere metus. Suspendisse aliquet, justo id sollicitudin viverra, justo augue euismod ante, eu faucibus orci lacus a amet.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="myrow flex_center my-5"><button class="btn_JS">Zobacz Katalog</button></div>
</div>
<div class="box_center qanim">
    <div class="base_text section_text">udostępniamy dokumentację</div>
    <span class="section_line"></span>
</div>
<div class="item_container main_padding" style="color:black;">
    <div class="grid-5 gmob-1">
        <div class="grid-1 size-3 small_padding debug_black">
            <div class="myrow text_base simple_text" style="max-width:905px;">Nasze produkty to wysokiej jakości certyfikowane zabezpieczenia gwarantujące wysokie bezpieczeństwo i higienę pracy. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum nisi at iaculis volutpat. Phasellus efficitur, libero nec imperdiet pretium, dui nulla vestibulum urna, eu feugiat neque sapien at justo. Vestibulum aliquam ac elit sed tincidunt. Fusce et mauris non nunc iaculis rhoncus. Nam sagittis ornare arcu. Quisque urna dolor, efficitur eget sapien at, blandit euismod nibh. Quisque dictum, lorem at sollicitudin congue, metus leo viverra diam, eu sollicitudin dui tellus eu erat. Morbi blandit tempus lobortis. Nulla pulvinar tempus eros sed eleifend. Nullam vel viverra neque, gravida posuere metus. Fusce pretium aliquet nunc, condimentum feugiat arcu. Fusce nibh magna, sodales vel pellentesque a, elementum sit amet erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur ut rutrum erat. Vestibulum sit amet erat ut at.</div>
            <div class="item_container_align"><button class="btn_JS">Certyfikaty</button></div>
        </div>
        <div class="item_container_center size-2 small_padding debug_black">
            <div style="position:relative;">
                <img class="img_get_medium" src="<?= base_url('assets/front/img/finger.png'); ?>">
                <div class="img_cover"></div>
            </div>
        </div>
    </div>
</div>
<div class="box_center qanim">
    <div class="base_text section_text">opinie klientów</div>
    <span class="section_line"></span>
</div>
<div class="item_container main_padding">
    <div class="grid-4 gtab-2 gmob-1">
        <div class="item_container_center small_padding debug_black">
            <div class="item_opinion debug_green" style="background: url('<?= base_url('assets/front/img/welder.png'); ?>');">
                <div class="content_opinion" style="background-color:rgba(46, 57, 114,0.92);">
                    <div class="myrow flex_center label_opinion" style="padding-top:3vw;"><img class="icon_opinion" src="<?= base_url('assets/front/img/thumb_y.svg'); ?>"></div>
                    <div class="myrow text_base tiny_text flex_center" style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tellus ut neque egestas auctor sit amet non urna. Vivamus tempor imperdiet massa a dapibus. Donec ut elementum velit. Mauris et tincidunt magna. Suspendisse tincidunt augue sit amet augue pellentesque efficitur. Proin vel vestibulum sem, sed maximus justo. Aenean elit neque, vestibulum quis metus in, dapibus ultricies tellus. Proin a libero augue. Proin sed diam suscipit, lacinia mi id, tincidunt nulla. Praesent volutpat.</div>
                    <div class="myrow flex_right label_opinion text_base pr-4">Lore Ipsum Info</div>
                </div>
            </div>
        </div>
        <div class="item_container_center small_padding debug_black">
            <div class="item_opinion debug_green" style="background: url('<?= base_url('assets/front/img/welder.png'); ?>');">
                <div class="content_opinion" style="background-color:rgba(251, 233, 0,0.92);">
                    <div class="myrow flex_center label_opinion" style="padding-top:3vw;"><img class="icon_opinion" src="<?= base_url('assets/front/img/thumb_b.svg'); ?>"></div>
                    <div class="myrow text_base tiny_text flex_center" style="color:black;text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tellus ut neque egestas auctor sit amet non urna. Vivamus tempor imperdiet massa a dapibus. Donec ut elementum velit. Mauris et tincidunt magna. Suspendisse tincidunt augue sit amet augue pellentesque efficitur. Proin vel vestibulum sem, sed maximus justo. Aenean elit neque, vestibulum quis metus in, dapibus ultricies tellus. Proin a libero augue. Proin sed diam suscipit, lacinia mi id, tincidunt nulla. Praesent volutpat.</div>
                    <div class="myrow flex_right label_opinion text_base pr-4" style="color:black;">Lore Ipsum Info</div>
                </div>
            </div>
        </div>
        <div class="item_container_center small_padding debug_black">
            <div class="item_opinion debug_green" style="background: url('<?= base_url('assets/front/img/welder.png'); ?>');">
                <div class="content_opinion" style="background-color:rgba(46, 57, 114,0.92);">
                    <div class="myrow flex_center label_opinion" style="padding-top:3vw;"><img class="icon_opinion" src="<?= base_url('assets/front/img/thumb_y.svg'); ?>"></div>
                    <div class="myrow text_base tiny_text flex_center" style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tellus ut neque egestas auctor sit amet non urna. Vivamus tempor imperdiet massa a dapibus. Donec ut elementum velit. Mauris et tincidunt magna. Suspendisse tincidunt augue sit amet augue pellentesque efficitur. Proin vel vestibulum sem, sed maximus justo. Aenean elit neque, vestibulum quis metus in, dapibus ultricies tellus. Proin a libero augue. Proin sed diam suscipit, lacinia mi id, tincidunt nulla. Praesent volutpat.</div>
                    <div class="myrow flex_right label_opinion text_base pr-4">Lore Ipsum Info</div>
                </div>
            </div>
        </div>
        <div class="item_container_center small_padding debug_black">
            <div class="item_opinion debug_green" style="background: url('<?= base_url('assets/front/img/welder.png'); ?>');">
                <div class="content_opinion" style="background-color:rgba(251, 233, 0,0.92);">
                    <div class="myrow flex_center label_opinion" style="padding-top:3vw;"><img class="icon_opinion" src="<?= base_url('assets/front/img/thumb_b.svg'); ?>"></div>
                    <div class="myrow text_base tiny_text flex_center" style="color:black;text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tellus ut neque egestas auctor sit amet non urna. Vivamus tempor imperdiet massa a dapibus. Donec ut elementum velit. Mauris et tincidunt magna. Suspendisse tincidunt augue sit amet augue pellentesque efficitur. Proin vel vestibulum sem, sed maximus justo. Aenean elit neque, vestibulum quis metus in, dapibus ultricies tellus. Proin a libero augue. Proin sed diam suscipit, lacinia mi id, tincidunt nulla. Praesent volutpat.</div>
                    <div class="myrow flex_right label_opinion text_base pr-4" style="color:black;">Lore Ipsum Info</div>
                </div>
            </div>
        </div>
    </div>
</div>-->