<section class="formfooter" id="contatti">
        <div class="cont-sm">
            <p class="par-footer">
               Compila il form o chiamaci allo
            </p>    
            <a href="tel:+390308610030" class="telform">030 8610030</a>
            <p class="par-footer">per qualsiasi informazione o per fissare un appuntamento</p>
            <form  action="<?=$URLASSOLUTO?>mail/sendContatti.php" method="post" accept-charset="utf-8">
                <input name="control" class="nontivedo" type="text">  
                <input class="inputText_contatti" name="Nome" placeholder="Nome e Cognome" type="text" required="required">
                <input class="inputText_contatti inputleft" name="Email" placeholder="Email" type="mail" required="required">
                <input class="inputText_contatti inputright" name="Telefono" placeholder="Telefono" type="tel">
            <div class="pulizia"></div>
            <textarea class="inputText_contatti2" name="Messaggio" required="required" placeholder="Dettagli richiesta"></textarea>
            <div class="pulizia"></div>
            <input id="Privacy" value="Accettata" name="Privacy" required="required"  type="checkbox">   
                <a href="https://www.iubenda.com/privacy-policy/17214703" class="privacyacc iubenda-nostyle no-brand iubenda-noiframe iubenda-embed iubenda-noiframe " title="Privacy Policy ">Accettazione Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
                
           
            <div class="inputright controlspam">
                Controllo Antispam  5 + 3 =  <input class="inputText_contatti antispam" name="risultato" required="required" type="number" min="8" max="8" maxlength="1" autocomplete="off">
            </div>
            <div class="pulizia"></div>
            <input class="invia-form" name="invia" value="INVIA RICHIESTA" type="submit">	
        </form> 
        </div>
</section>
