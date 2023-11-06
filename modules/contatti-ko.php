<style>
    .messaggio-ok {
        color: red;
        font-size: 50px;
        font-size: 2em;
    }

    .contenitore-dettaglio {
        width: 90%;
        max-width: 1300px;
        margin: 100px auto;
        text-align: center;
    }

    h2 {
        font-weight: normal;
    }
</style>
<p class="nontivedo"></p>
<div class="contenitore-dettaglio">
    <b class="messaggio-ok" style="color:#c00a05;">ERRORE DI INVIO!</b><br><br>
    <h2 style="color:#666666;"><strong>Qualcosa è andato storto.</strong><br>Ti invitiamo a riprovare o a contattarci telefonicamente <br> Grazie!</h2>
    <hr / style="margin: 50px auto; max-width:50%;">
    <a class="messaggio-ok" href="<?= $URLASSOLUTO ?>#contatti" style="color:#c00a05">CLICCA QUI E TORNA AL FORM CONTATTI</a><br><br> OPPURE CHIAMA ALLO <a href="tel:+390309959721" class="telform">030 0309959721</a>
</div>