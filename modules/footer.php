<footer>

    <?php if ($modulo != "certificazioni") { ?>

        <div class="contenitore footer-row-1">
            <p class="titolo-sezione">Certificazioni e associazioni</p>
            <div class="row__certificazioni">
                <div class="box-img-certificazioni">
                    <img src="<?= $URLASSOLUTO; ?>img/En_plus_IT_011.png" alt="">
                </div>
                <div class="box-img-certificazioni">
                    <img src="<?= $URLASSOLUTO; ?>img/En_plus_IT_344.png" alt="">
                </div>
                <div class="box-img-certificazioni">
                    <img src="<?= $URLASSOLUTO; ?>img/Aiel_2.png" alt="">
                </div>
                <div class="box-img-certificazioni">
                    <img src="<?= $URLASSOLUTO; ?>/img/Aiel.png" alt="">
                </div>
                <div class="box-img-certificazioni">
                    <img src="<?= $URLASSOLUTO; ?>/img/Enawa.png" alt="">
                </div>
            </div>
        </div>

    <?php } ?>



    <div class="contenitore footer-row-2">
        <div class="box-img">
            <div class="box-terzo box-img__text">
                <p class="titolo-sezione">Contattaci</p>
                <form id="contatti" accept-charset="utf-8" method="post" action="<?= $URLASSOLUTO ?>/mail/sendContatti.php" id="formContatti">
                    <input type="text" placeholder="Azienda" name="Azienda" value="" class="inputText_contatti inputText_contatti-bg-dark" required="required">
                    <input type="text" required="required" placeholder="Comune" name="Comune" value="" class="inputText_contatti inputText_contatti-bg-dark">
                    <input type="email" required="required" placeholder="Email" name="Email" value="" class="inputText_contatti inputText_contatti-bg-dark">
                    <!-- Honeypot -->
                    <div style="display:none;">
                        <input type="text" name="honeypot">
                    </div>
                    <!-- End honeypot -->
                    <div class="pulizia"></div>
                    <div class="inputText_contatti3">
                        <input type="checkbox" required="required" name="Privacy" value="Accettata" id="Privacy">
                        <a class="privacyacc" href="javascript:PopupCentrata()">Accettazione privacy</a>
                    </div>
                    <input type="submit" value="Invia Richiesta" name="invia" class="invia-form">
                </form>
                <p>
                    Tel. +39 0309959721<br>
                    Email: info@germinati.it<br>
                </p>
            </div>
            <div class="box-dueterzi box-img__img img-contatti">

            </div>
            <div class="pulizia"></div>
        </div>
    </div>
    <div class="footer-row-3">
        <p>Geminati Pierino s.r.l - Via Artigianale, 3 - 25020 Cigole (Brescia) - T +39 0309959721 - P.iva 03506840986 - credits - Cookie Privacy</p>
    </div>
</footer>