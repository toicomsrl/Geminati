<footer>

    <?php if ($modulo != "certificazioni") { ?>

        <div class="contenitore footer-row-1">
            <p class="titolo-sezione">Certificazioni e associazioni</p>
            <div class="row__certificazioni">
                <div class="box-img-certificazioni">
                    <img src="<?= $URLASSOLUTO; ?>img/En_plus_IT_344.png" alt="">
                </div>
                <div class="box-img-certificazioni">
                    <img src="<?= $URLASSOLUTO; ?>img/En_plus_IT_011.png" alt="">
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
        <div class="box-terzo">
            <p class="titolo-sezione">Contattaci</p>
            <p>
                Germinati Pierino s.r.l.<br>
                Via Artigianale, 3<br>
                25020 Cignole (BS)<br>
                Italia
            </p>
            <p>
                <strong>Tel</strong> +39 0309959721<br>
                <strong>Email</strong> info@germinati.it<br>
            </p>
            <p>
                P.iva 03506840986
            </p>
        </div>
        <div class="box-dueterzi">
            <p class="titolo-sezione">Scrivici</p>
            <form accept-charset="utf-8" method="post" action="<?= $URLASSOLUTO ?>/mail/sendContatti.php" id="formContatti">
                <input type="text" required="required" placeholder="Nome Cognome" name="Nome" value="" class="inputText_contatti">
                <input type="text" placeholder="Azienda" name="Azienda" value="" class="inputText_contatti">
                <input type="indirizzo" required="required" placeholder="Indirizzo" name="Indirizzo" value="" class="inputText_contatti">
                <input type="tel" placeholder="Telefono" name="Telefono" value="" class="inputText_contatti">
                <input type="email" required="required" placeholder="Email" name="Email" value="" class="inputText_contatti">
                <div class="pulizia"></div>
                <input type="submit" value="Invia Richiesta" name="invia" class="invia-form">
            </form>
        </div>
        <div class="pulizia"></div>
    </div>
</footer>