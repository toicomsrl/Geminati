<style>
    .messaggio-ok {
        color: #666666;
        font-size: 50px;
        font-size: 2em;
        margin: 0 0 10px 0;
        padding: 0px;
    }

    .contenitore-dettaglio {
        width: 90%;
        max-width: 1300px;
        margin: 100px auto 150px;
        text-align: center;
    }

    h2 {
        font-weight: normal;
        margin: 0px;
        padding: 0px;
    }

    .foto-ok {
        margin: 30px auto;
        max-width: 100%;
        display: block;
    }
</style>
<p class="nontivedo"></p>
<div class="contenitore-dettaglio">
    <p style="font-size:3em; color: #666666; font-weight:bold;">Messaggio Inviato!</p>
    <img src="<?= $URLASSOLUTO ?>img/contatti-ok.png" class="foto-ok">
    <p class="messaggio-ok"><b>Grazie per la tua richiesta.</b></p>
    <h2 style="color:#666666"><strong>A breve sarai ricontattato e capiremo insieme le tue esigenze.</strong></h2><br>

</div>

<script>
    setCookie('ilMioCookie', "chiuso", 1, '/');
</script>