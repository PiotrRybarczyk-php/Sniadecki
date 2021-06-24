<?php $c = 3; ?>
<div id="jetcarousel" class="carousel slide" data-ride="carousel" style="height:930px;">
    <div class="carousel-inner">
        <?php for ($x = 0; $x < $c; $x++) : ?>
            <?php /*$c++;*/ ?>
            <div class="carousel-item <?php if ($x == 0) echo 'active' ?>">
                <div class="silder_img" style="background-image:url(<?= base_url('assets/front/img/smelters.webp'); ?>);">
                    <div class="forward_content box_normal inner_padding">
                        <div class="grid-5 gtab-2 gmob-1">
                            <div class="box_container size-2">
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
    <div class="section_text">poznaj nasze specjalistyczne produkty</div>
    <span class="section_line"></span>
</div>
<div class="box_center debug main_padding simple_text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra, mauris vitae lobortis aliquet,
    augue elit molestie dui, non laoreet elit justo vel augue. Nulla egestas finibus velit, sit amet sodales turpis. Mauris pretium nibh gravida sapien imperdiet, id tincidunt augue sollicitudin. Suspendisse potenti.
    In hac habitasse platea dictumst. Aliquam erat volutpat. Sed eleifend et massa sed iaculis. Ut non ante consectetur, hendrerit nibh vitae, porta leo. Donec volutpat lacus a urna euismod lacinia eu vitae nulla. Donec dapibus neque sit amet ex efficitur,
    at ultricies neque vestibulum. Phasellus sollicitudin urna id dui vestibulum tristique.<br>Nam vitae suscipit dui. Duis ullamcorper malesuada sapien sit amet faucibus.
    Quisque sagittis, sem quis iaculis malesuada, lacus quam aliquet nisl, sit amet cursus eros turpis at lacus. Etiam varius, mi non mattis consectetur, odio ex rutrum erat, eget pretium eros felis eu purus. Suspendisse id tempus sem, eget porttitor nibh. Sed dapibus nam.
</div>
<div class="box_center debug main_padding">
    <div class="grid-4 gtab-2 gmob-1">
        <div class="box_container debug">
            <div class="offer_box"><img class="offer_img" src="<?= base_url('assets/front/img/head1.png'); ?>"></div>
        </div>
        <div class="box_container debug">
            <div class="offer_box"><img class="offer_img" src="<?= base_url('assets/front/img/head2.png'); ?>"></div>
        </div>
        <div class="box_container debug">
            <div class="offer_box"><img class="offer_img" src="<?= base_url('assets/front/img/head3.png'); ?>"></div>
        </div>
        <div class="box_container debug">
            <div class="offer_box"><img class="offer_img" src="<?= base_url('assets/front/img/head4.png'); ?>"></div>
        </div>
    </div>
</div>