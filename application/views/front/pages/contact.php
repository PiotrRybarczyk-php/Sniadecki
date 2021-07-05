<div class="box_normal banner" style="background-image:url(<?= base_url('assets/front/img/metal-banner.webp') ?>);">
    <div class="banner_content main_padding">
        <p class="banner_title">Kontakt</p>
    </div>
</div>
<div class="box_center qa_fade">
    <div class="base_text section_text"><?= $subpages[3]->subtitle; ?></div>
    <span class="section_line"></span>
</div>
<div class="item_container main_padding">
    <div class="grid-2 gtab-1 ">
        <div class="item_container">
            <div style="position:relative;">
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
                    <button type="button" class="btn_JS">Wyślij Wiadomość</button>
                </div>
            </div>
        </form>
    </div>
</div>