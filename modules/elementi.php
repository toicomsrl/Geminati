<article>
    <section class="contenitore">
        <div class="box-mezzo">01 mezzo</div>
        <div class="box-mezzo">02 mezzo</div>
        <div class="box-terzo">01 terzo</div>
        <div class="box-terzo">02 terzo</div>
        <div class="box-terzo">03 terzo</div>
        <div class="box-quarto">01 quarto</div>
        <div class="box-quarto">02 quarto</div>
        <div class="box-quarto">03 quarto</div>
        <div class="box-quarto">04 quarto</div>
        <div class="box-quinto">01 quinto</div>
        <div class="box-quinto">02 quinto</div>
        <div class="box-quinto">03 quinto</div>
        <div class="box-quinto">04 quinto</div>
        <div class="box-quinto">05 quinto</div>
        <div class="box-sesto">01 sesto</div>
        <div class="box-sesto">02 sesto</div>
        <div class="box-sesto">03 sesto</div>
        <div class="box-sesto">04 sesto</div>
        <div class="box-sesto">05 sesto</div>
        <div class="box-sesto">06 sesto</div>
        <div class="pulizia"></div>
        <h1>Titolo 1</h1>
        <h2>Titolo 2</h2>
        <h3>Titolo 3</h3>
        <h4>Titolo 4</h4>
        <h5>Titolo 5</h5>
        <h6>Titolo 6</h6>
        <p>Testo generico</p>
        
        <h4 class="sub-home">Dicono di Noi</h4>
        <section class="carusel">
            <div>                    
                <h5>&#9733; &#9733; &#9733; &#9733;</h5>                    
                <p>                       
                    Struttura pulita, ordinata ed essenziale, con un prezzo commisurato all'offerta ed uno staff cordiale. Se dovesse capitare ci tornerei.<br /><br /> 
                    <b>Fabio</b>                    
                </p>                
            </div>                  
            <div>                   
                <h5>&#9733; &#9733; &#9733; &#9733; &#9733;</h5>       
                <p>                       
                    La colazione, tipica nostra italiana, Cornetto e cappuccino, buona.Anche il resto dei servizi e Accomodation  regolari.<br /><br />   
                    <b>Filippo</b>                   
                </p>   
            </div>               
            <div>     
            <h5>&#9733; &#9733; &#9733; &#9733;</h5> 
                <p>               
                    Struttura moderna e ristruttura e personale giovane e gentile.<br /><br />    
                    <b>Valerio</b>     
                </p>             
            </div>                
            <div>             
                <h5>&#9733; &#9733; &#9733; &#9733; &#9733;</h5>
                <p>      
                    Camera super comfort e molto pulita oltre che di recente ristrutturazione, abbastanza buona la colazione al bar. Ampio parcheggio gratuito.Comodo accesso alle piste in 20minuti di auto e anche ai paeselli vicini per una cena locale!<br /><br />                        
                    <b>Giulia</b>                    
                </p>                
            </div>              
        </section>
        <section class="slider">
            <img src="https://www.toicom.it/img/progetti/tst/header-tst.jpg" width="100%">
            <img src="https://www.toicom.it/img/progetti/tst/header-tst.jpg" width="100%">
            <img src="https://www.toicom.it/img/progetti/tst/header-tst.jpg" width="100%">
        </section>
        <form id="formContatti" action="<?=$URLASSOLUTO?>mail/sendContatti.php" method="post" accept-charset="utf-8">
                <input name="control" class="nontivedo" type="text">  
                <input class="inputText_contatti" value="" name="Nome" placeholder="NOME" required="required" type="text">  
                <input class="inputText_contatti inputleft" value="" name="Email" placeholder="EMAIL" required="required" type="email">
                <input class="inputText_contatti inputright" value="" name="Telefono" placeholder="TELEFONO" required="required" type="text">
                <input class="inputText_contatti" value="" name="Progetto" placeholder="TIPO DI PROGETTO" required="required" type="text">
                <div class="pulizia"></div>
                <textarea class="inputText_contatti2" name="Messaggio" required="required" placeholder="MESSAGGIO"></textarea>
                <br>
                <input id="Privacy" value="Accettata" name="Privacy" required="required"  type="checkbox">                    
                 <a href="<?=$URLASSOLUTO?>privacy.htm" class="popform privacyacc">Accetazione Privacy Policy</a>
                <br>
                <input class="invia-form" name="invia" value="INVIA" type="submit">
				
        </form>
        <section class="gallery">        
            <a href="https://www.toicom.it/img/progetti/tst/header-tst.jpg" class="big">
                <img src="https://www.toicom.it/img/progetti/tst/header-tst.jpg" alt="Foto gallery" width="100%">
            </a>
            <div class="pulizia"></div>
        </section>
        
        
        <script>    
         
             const show = () => {
              const element = document.querySelector("#popup")
              element.style.visibility = "visible"
              element.style.opacity = "1"
              element.style.transform = "scale(1)"
              element.style.transition = "0.8s, opacity 0.8s"
            }

                     document.addEventListener("DOMContentLoaded", () => {
              document.addEventListener("mouseout", (event) => {
                if (!event.toElement && !event.relatedTarget && getCookie('ilMioCookie') != "chiuso") {
                  setTimeout(() => {
                    show()
                  }, 0)
                }
              })
            })      
    </script>
    
    <div class="popup" id="popup">
        <div class="con-pop">
            <a href="javascript:chiudipop()"><img src="<?=$URLASSOLUTO?>img/chiudi.png"></a>
            <div class="pulizia"></div>
            <form  action="<?=$URLASSOLUTO?>mail/sendPopup.php" method="post" accept-charset="utf-8" class="form-popup">
                <p class="txt-b-sm">Non hai trovato quello che cercavi?</p>
                <p class="txt-r-big"><span> Abbiamo a catalogo </span> <br> oltre 3000 articoli</p>
                <p class="txt-b-sm">Compila il form e troveremo quello che fa per te!</p>
                <input name="control" class="nontivedo" type="text">  
                <input class="inputText_contatti inputleft" name="Nome" placeholder="Nome" type="text" required="required">
                <input class="inputText_contatti inputright" name="Email" placeholder="Email" type="mail" required="required">
            <div class="pulizia"></div>
            <textarea class="inputText_contatti" name="Messaggio" required="required" placeholder="Cosa stai cercando?"></textarea>
            <div class="pulizia"></div>
            <input id="Privacy" value="Accettata" name="Privacy" required="required"  type="checkbox">                    
            <a href="<?=$URLASSOLUTO?>privacy.htm" class="popform privacyacc">Accetazione Privacy Policy</a>
            <br>
            <div class="pulizia"></div>
            <input class="invia-form" name="invia" value="INVIA RICHIESTA" type="submit">	
        </form> 
        </div>    
    </div>
    </section>
</article>