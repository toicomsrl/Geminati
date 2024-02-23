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


    <?php if ($modulo != "contatti-ok" && $modulo != "contatti-ko") { ?>
        <div class="contenitore footer-row-2">
            <div class="box-img">
                <div class="box-terzo box-img__text">
                    <p class="titolo-sezione">Contattaci</p>
                    <form id="contatti" accept-charset="utf-8" method="post" action="<?= $URLASSOLUTO ?>mail/sendContatti.php" id="formContatti">
                        <input type="text" placeholder="Azienda" name="Azienda" value="" class="inputText_contatti inputText_contatti-bg-dark" required="required">
                        <input type="text" required="required" placeholder="Comune" name="Comune" value="" class="inputText_contatti inputText_contatti-bg-dark">
                        <input type="email" required="required" placeholder="Email" name="Email" value="" class="inputText_contatti inputText_contatti-bg-dark">
                        <textarea type="text" required="required" placeholder="La tua richiesta" name="Messaggio" value="" class="inputText_contatti inputText_contatti-bg-dark"></textarea>
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

                        <button class="g-recaptcha invia-form" data-sitekey="<?= $recaptchaKey ?>" data-callback="onSubmitFormContatti" data-action="submit">invia</button>
                    </form>
                    <p>
                        Tel. +39 030 9959721<br>
                        Email: info@geminati.it<br>
                    </p>
                </div>
                <div class="box-dueterzi box-img__img img-contatti">
                </div>
                <div class="pulizia"></div>
            </div>
        </div>
    <?php } ?>

    <div class="footer-row-3">
        <p>Geminati Pierino s.r.l - Via Artigianale, 3 - 25020 Cigole (Brescia) - T +39 0309959721 - P.iva 03506840986 - <a href="https://www.iubenda.com/privacy-policy/17757045" class="iubenda-white no-brand iubenda-noiframe iubenda-embed iubenda-noiframe " title="Privacy Policy ">Privacy Policy</a>
            <script type="text/javascript">
                (function(w, d) {
                    var loader = function() {
                        var s = d.createElement("script"),
                            tag = d.getElementsByTagName("script")[0];
                        s.src = "https://cdn.iubenda.com/iubenda.js";
                        tag.parentNode.insertBefore(s, tag);
                    };
                    if (w.addEventListener) {
                        w.addEventListener("load", loader, false);
                    } else if (w.attachEvent) {
                        w.attachEvent("onload", loader);
                    } else {
                        w.onload = loader;
                    }
                })(window, document);
            </script>
            <a href="https://www.iubenda.com/privacy-policy/17757045/cookie-policy" class="iubenda-white no-brand iubenda-noiframe iubenda-embed iubenda-noiframe " title="Cookie Policy ">Cookie Policy</a>
            <script type="text/javascript">
                (function(w, d) {
                    var loader = function() {
                        var s = d.createElement("script"),
                            tag = d.getElementsByTagName("script")[0];
                        s.src = "https://cdn.iubenda.com/iubenda.js";
                        tag.parentNode.insertBefore(s, tag);
                    };
                    if (w.addEventListener) {
                        w.addEventListener("load", loader, false);
                    } else if (w.attachEvent) {
                        w.attachEvent("onload", loader);
                    } else {
                        w.onload = loader;
                    }
                })(window, document);
            </script>
        </p>
    </div>
</footer>