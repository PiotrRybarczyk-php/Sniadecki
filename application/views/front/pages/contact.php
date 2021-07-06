<?php
$state_info = array();
$state_info[0] = "";
$state_info[1] = "";
$state_info[2] = "";
$state_info[3] = "";
$state_info[4] = "";
$state_info[5] = "";
$state_info[6] = "";
$state_info[7] = "";
$state_info[8] = "";
$state_info[9] = "";
$state_info[10] = "";
$state_info[11] = "";
$state_info[12] = "";
$state_info[13] = "";
$state_info[14] = "";
$state_info[15] = "";
$content = '';
foreach ($contacts as $item) {
    for ($i = 0; $i < 16; $i++) {
        $comp = 'state-' . $i;
        if ($item->title == $comp) {
            $content = '<div class="contact_padding"><p class="card_name">' . $item->subtitle . '</p>' . $item->description . '</div>';
            $state_info[$i] = $state_info[$i] . $content;
        }
    }
}
?>
<script>
    var state_info = [];
    <?= "state_info[0] = '" . $state_info[0] . "';\n" ?>
    <?= "state_info[1] = '" . $state_info[1] . "';\n" ?>
    <?= "state_info[2] = '" . $state_info[2] . "';\n" ?>
    <?= "state_info[3] = '" . $state_info[3] . "';\n" ?>
    <?= "state_info[4] = '" . $state_info[4] . "';\n" ?>
    <?= "state_info[5] = '" . $state_info[5] . "';\n" ?>
    <?= "state_info[6] = '" . $state_info[6] . "';\n" ?>
    <?= "state_info[7] = '" . $state_info[7] . "';\n" ?>
    <?= "state_info[8] = '" . $state_info[8] . "';\n" ?>
    <?= "state_info[9] = '" . $state_info[9] . "';\n" ?>
    <?= "state_info[10] = '" . $state_info[10] . "';\n" ?>
    <?= "state_info[11] = '" . $state_info[11] . "';\n" ?>
    <?= "state_info[12] = '" . $state_info[12] . "';\n" ?>
    <?= "state_info[13] = '" . $state_info[13] . "';\n" ?>
    <?= "state_info[14] = '" . $state_info[14] . "';\n" ?>
    <?= "state_info[15] = '" . $state_info[15] . "';" ?>
</script>
<div class="box_normal banner" style="background-image:url(<?= base_url('assets/front/img/metal-banner.webp') ?>);">
    <div class="banner_content main_padding">
        <p class="banner_title">Kontakt</p>
    </div>
</div>
<?php if ($this->session->flashdata('success')) : ?>
    <div class="col-md-12 mb-5">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?= $this->session->flashdata('success') ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('error')) : ?>
    <div class="col-md-12 mb-5">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?= $this->session->flashdata('error') ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
<?php endif; ?>
<div class="box_center qa_fade">
    <div class="base_text section_text"><?= $subpages[3]->subtitle; ?></div>
    <span class="section_line"></span>
</div>
<div class="item_container main_padding">
    <div class="grid-2 gtab-1 ">
        <div class="item_container">
            <div class="small_padding tab_center">
                <img class="img_get_contact" src="<?= base_url('uploads/') . $subpages[3]->photo; ?>">
            </div>
        </div>
        <div class="item_container">
            <div class="textbox_contact"><?= textlim($subpages[3]->description, 1005); ?></div>
        </div>
    </div>
</div>
<div class="box_center qa_fade">
    <div class="base_text section_text">Formularz Kontaktowy</div>
    <span class="section_line"></span>
</div>
<div class="box_center main_padding">
    <div class="contact_form">
        <h2 class="contact_title">MAJĄ PAŃSTWO PYTANIA? ZAPRASZAMY DO KONTAKTU!</h2>
        <form action="<?= base_url(); ?>mailer/send" method="POST" id="contact-form">
            <div class="grid-2 gtab-1">
                <div class="item_container_center small_padding">
                    <div class="grid-1">
                        <input required type="subject" id="defaultContactFormSubject" class="contact_input" style="margin-bottom:40px;" placeholder="Napisz temat wiadomości" name="subject">
                        <input required type="text" id="defaultContactFormName" class="contact_input" style="margin-bottom:40px;" placeholder="Imię i nazwisko" name="name">
                        <input required type="text" id="defaultContactFormPhone" class="contact_input" style="margin-bottom:40px;" placeholder="Telefon Kontakotwy" name="phone">
                        <input required type="email" id="defaultContactFormEmail" class="contact_input" style="margin-bottom:40px;" placeholder="Adres E-mailowy" name="email">
                    </div>
                </div>
                <div class="item_container_center small_padding" style="align-items:flex-start;">
                    <textarea required class="contact_area" id="exampleFormControlTextarea2" rows="7" placeholder="Treść pytania..." name="message"></textarea>
                </div>
            </div>
            <div class="grid-1">
                <div class="item_container_center small_padding">
                    <p><?= $settings->rodo; ?></p>
                </div>
                <div class="item_container_center">
                    <input type="checkbox" class="form-check-input" name="rodo1" id="rodo1">
                    <label for="rodo1">
                    </label>
                </div>
                <div class="item_container_center small_padding">
                    <p><?= $settings->rodo_mail; ?></p>
                </div>
                <div class="item_container_center">
                    <input type="checkbox" class="form-check-input" name="rodo2" id="rodo2">
                    <label for="rodo2">
                    </label>
                </div>
                <div class="item_container_center small_padding">
                    <p><?= $settings->rodo_tel; ?></p>
                </div>
                <div class="item_container_center">
                    <input type="checkbox" class="form-check-input" name="rodo3" id="rodo3">
                    <label for="rodo3">
                    </label>
                </div>
                <div class="item_container_center py-3">
                    <button type="submit" class="btn_JS">Wyślij Wiadomość</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="box_center qa_fade" style="margin-bottom:80px;">
    <div class="base_text section_text">Znajdziesz nas Tutaj</div>
    <span class="section_line"></span>
</div>
<div class="box_normal main_padding">
    <div class="grid-3 gtab-2" style="align-items:center;">
        <div class="item_container small_padding tab_size-2">
            <p class="contact_info" style="font-weight:600;"><?= $contact->company; ?></p>
            <p class="contact_info"><?= $contact->zip_code . ' ' . $contact->city . ', ' . $contact->address; ?></p>
            <br>
            <p class="contact_info">Kontakt:</p>
            <br>
            <p class="contact_info" style="font-weight:600;">Magdalena Weznerowicz</p>
            <p class="contact_info">tel. <?= $contact->phone1 ?></p>
            <p class="contact_info"><?= $contact->email1 ?></p>
            <br>
            <p class="contact_info" style="font-weight:600;">Ariel Agaciński</p>
            <p class="contact_info">tel. <?= $contact->phone2 ?></p>
            <p class="contact_info"><?= $contact->email2 ?></p>
            <br>
            <p class="contact_info" style="font-weight:600;">Dział Handlowy</p>
            <p class="contact_info">tel. 56 6644075, 56 6644069</p>
            <p class="contact_info">Fax/tel. 56 6644077</p>
            <p class="contact_info">e-mail: biuro@sniadecki.torun.pl</p>
            <p class="contact_info">www.sniadecki.torun.pl</p>


        </div>
        <div class="item_container_align size-2" style="height:545px;">
            <span class="contact_square_1" style="z-index:1;"></span>
            <span class="contact_square_2" style="z-index:2;"></span>
            <div class="contact_map" style="z-index:3;">
                <iframe src="<?= $contact->map ?>" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div class="box_center qa_fade">
    <div class="base_text section_text">Dystrybutorzy</div>
    <span class="section_line"></span>
</div>
<div class="box_normal main_padding">
    <div class="grid-5 gtab-2 gmob-1">
        <div class="grid-1 size-2 mob_size-1">
            <div class="contact_state" id="state-0" onclick="toogle_info(0)">
                <div class="state_label">DOLNOŚLĄSKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="contact_state" id="state-1" onclick="toogle_info(1)">
                <div class="state_label">KUJAWSKO - POMORSKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="contact_state" id="state-2" onclick="toogle_info(2)">
                <div class="state_label">LUBELSKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="contact_state" id="state-3" onclick="toogle_info(3)">
                <div class="state_label">LUBUSKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="contact_state" id="state-4" onclick="toogle_info(4)">
                <div class="state_label">ŁÓDZKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="contact_state" id="state-5" onclick="toogle_info(5)">
                <div class="state_label">MAŁOPOLSKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="contact_state" id="state-6" onclick="toogle_info(6)">
                <div class="state_label">MAZOWIECKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="contact_state" id="state-7" onclick="toogle_info(7)">
                <div class="state_label">OPOLSKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="contact_state" id="state-8" onclick="toogle_info(8)">
                <div class="state_label">PODKARPACKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="contact_state" id="state-9" onclick="toogle_info(9)">
                <div class="state_label">PODLASKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="contact_state" id="state-10" onclick="toogle_info(10)">
                <div class="state_label">POMORSKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="contact_state" id="state-11" onclick="toogle_info(11)">
                <div class="state_label">ŚLĄSKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="contact_state" id="state-12" onclick="toogle_info(12)">
                <div class="state_label">ŚWIĘTOKRZYSKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="contact_state" id="state-13" onclick="toogle_info(13)">
                <div class="state_label">WARMIŃSKO - MAZURSKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="contact_state" id="state-14" onclick="toogle_info(14)">
                <div class="state_label">WIELKOPOLSKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
            <div class="contact_state" id="state-15" onclick="toogle_info(15)">
                <div class="state_label">ZACHODNIOPOMORSKIE</div>
                <div class="state_btn"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>
        <div class="grid-2 size-3 gmob-1 tab_size-2 mob_size-1" style="height:fit-content;transition:0.3s;" id="info-element">
        </div>
    </div>
</div>
<script>
    function toogle_info(state_id) {
        //gets all documents data
        var block = document.getElementById('info-element');
        var reset_label = document.querySelectorAll('.state_label');
        var reset_btn = document.querySelectorAll('.state_btn');
        var element_id = 'state-' + state_id;
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
        //fill block with content
        if (window.innerWidth <= 1024) {
            location.href = "#";
            location.href = "#info-element";
        }
        block.style.opacity = "0.0";
        setTimeout(function() {
            block.innerHTML = state_info[state_id];
            block.style.opacity = "1.0";
        }, 300);
    }
</script>