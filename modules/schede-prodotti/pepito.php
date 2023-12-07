<p class="nontivedo"></p>
<section class="first-section">
    <div class="contenitore">
        <div class="box-terzo box-img-prodotto">
            <img src="<?= $URLASSOLUTO ?>img/PEPITO_HD.jpg" alt="">
        </div>
        <div class="box-dueterzi box-desc-prodotto">
            <h1 class="text-black">Pepito</h1>
            <p>Pellet di legno vergine, ricavato da conifera e latifoglia privi di corteccia.<br>Prodotto naturale di alta qualità.<br>PEPITO è certificato in classe A1 (la qualità più elevata), soddisfa ampiamente la norma 17225‐2 secondo lo standard europeo En Plus, il massimo della certificazione in termini di qualità e controllo continuo sul prodotto.</p>
            <img src="<?= $URLASSOLUTO ?>img/logo-en-plus.png" alt="">
            <p class="prodotto-proprieta"><span class="prodotto-nome-proprieta">Materia prima di origine</span><span class="prodotto-valore-proprieta">Misto Confifera e Latifoglia</span></p>
            <p class="prodotto-proprieta"><span class="prodotto-nome-proprieta">Classe diametrica</span><span class="prodotto-valore-proprieta">6.0mm</span></p>
            <p class="prodotto-proprieta"><span class="prodotto-nome-proprieta">Contenuto idrico</span><span class="prodotto-valore-proprieta">7,0 %tq</span></p>
            <p class="prodotto-proprieta"><span class="prodotto-nome-proprieta">Contenuto ceneri</span><span class="prodotto-valore-proprieta">0,47 %secco</span></p>
            <p class="prodotto-proprieta"><span class="prodotto-nome-proprieta">Durabilità meccanica</span><span class="prodotto-valore-proprieta">98,8 %tq</span></p>
            <p class="prodotto-proprieta"><span class="prodotto-nome-proprieta">Contenuti in fini</span><span class="prodotto-valore-proprieta">0,2 %tq</span></p>
            <p class="prodotto-proprieta"><span class="prodotto-nome-proprieta">Potere calorifico inferiore</span><span class="prodotto-valore-proprieta">Mj/kg 17,50 - Kwh/kg 4,86</span></p>
            <p class="prodotto-proprieta"><span class="prodotto-nome-proprieta">Massa volumica sterica</span><span class="prodotto-valore-proprieta">690 kg/m&sup3;</span></p>
            <div class="prodotto-download">
                <a href="<?= $URLASSOLUTO ?>doc/scheda-tecnica-pepito.pdf" class="btn-white btn-doc">Scarica scheda prodotto</a>
                <a href="#contatti" class="btn-white btn-phone">Richiedi informazioni</a>
            </div>
        </div>
        <div class="pulizia"></div>
    </div>
</section>
<section class="sect-prodotti">
    <div class="contenitore">
        <p class="titolo-sezione">Produzione pellet</p>
        <p>Vedi tutta la nostra produzione e accedi alla scheda<br> prodotto per le caratteristiche tecniche</p>

        <div class="mini-card-container-prodotti">
            <a href="<?= $URLASSOLUTO ?>schede-prodotti/firex.html">
                <div class="mini-card">
                    <div class="mini-card-img">
                        <img src="<?= $URLASSOLUTO ?>img/firex.jpg" alt="Firex">
                    </div>
                    <div class="mini-card-text">
                        <p class="mini-card-title">
                            FIREX
                        </p>
                        <p class="mini-card-desc">
                            Conifera e latifoglia,<br>Classe A1
                        </p>
                    </div>
                </div>
            </a>
            <a href="<?= $URLASSOLUTO ?>schede-prodotti/holzpellet.html">
                <div class="mini-card">
                    <div class="mini-card-img">
                        <img src="<?= $URLASSOLUTO ?>img/Holzpellet.jpg" alt="Holzpellet">
                    </div>
                    <div class="mini-card-text">
                        <p class="mini-card-title">
                            HOLZPELLET
                        </p>
                        <p class="mini-card-desc">
                            Conifera e latifoglia,<br>Classe A1
                        </p>
                    </div>
                </div>
            </a>
            <a href="<?= $URLASSOLUTO ?>schede-prodotti/europellet.html">
                <div class="mini-card">
                    <div class="mini-card-img">
                        <img src="<?= $URLASSOLUTO ?>img/Europellet.jpg" alt="Europellet">
                    </div>
                    <div class="mini-card-text">
                        <p class="mini-card-title">
                            EUROPELLET
                        </p>
                        <p class="mini-card-desc">
                            Conifera e latifoglia,<br>Classe A1
                        </p>
                    </div>
                </div>
            </a>
            <a href="<?= $URLASSOLUTO ?>schede-prodotti/pellet-sfuso.html">
                <div class="mini-card">
                    <div class="mini-card-img">
                        <img src="<?= $URLASSOLUTO ?>img/pellet-sfuso.jpg" alt="Pellet sfuso">
                    </div>
                    <div class="mini-card-text">
                        <p class="mini-card-title">
                            PELLET SFUSO
                        </p>
                        <p class="mini-card-desc">
                            Conifera e latifoglia,<br>Classe A1
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<?php include_once("modules/blocchi/produzione-lettiere-cippato.php") ?>
<?php include_once("modules/blocchi/certificazione-enplus.php") ?>