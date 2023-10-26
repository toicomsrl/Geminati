<?php
error_reporting(E_ERROR);

if(strstr($_SERVER["HTTP_REFERER"], "geminati.it") && $_POST !=""){
	
	
	// Richiamo variabili
	$Controllo = $_POST['control'];
	$Nome = $_POST['Nome'];
    $Azienda = $_POST['Azienda'];
	$Email = $_POST['Email'];
    $Telefono = $_POST['Telefono'];
	$Messaggio = $_POST['Messaggio'];
	$Provenienza = $_SERVER["HTTP_REFERER"];
    $Risultato = $_POST['risultato'];
    
	$oggetto = "GEMINATI - Richiesta dal WEB";	
	
    

	if (($Email == "") || ($Nome == "") || ($Messaggio == "") || ($Controllo != "") || ($Risultato != "6")) {
		header("location: ../contatti-ko.html#ko") or Die;
	} else 
		
        
        
    
		// Creazione mail 
		
		$contenuto_file_log = "Email del ".date("j-m-Y h.i", time()).".\n";
		$contenuto_file_log .= "------------------------------------------------\n\n";
		$contenuto_file_log .= "Oggetto: " .$oggetto."\n\n";
        $contenuto_file_log .= "Nome: ".$Nome."\n\n";
		$contenuto_file_log .= "Email: ".$Email."\n";
        $contenuto_file_log .= "Telefono: ".$Telefono."\n\n";
		$contenuto_file_log .= "Pagina di provenienza: ".$Provenienza."\n\n";
		$contenuto_file_log .= "------------------------------------------------\n\n";
		$contenuto_file_log .= "Dettagli richiesta:\n".$Messaggio;



		// Intestazioni per il cliente
		$intestazioni  = "MIME-Version: 1.0\r\n";
		$intestazioni .= "Content-type: text/plain; charset=UTF-8\r\n";
		$intestazioni .= "From: ".$Email."\r\n";
		
        $invia = mail('info@geminati.it', $oggetto, $contenuto_file_log, $intestazioni);
		$invia = mail('cservice@toicom.it', $oggetto, $contenuto_file_log, $intestazioni);
    


		if($invia == true) {

	        $emailfrom = "info@geminati.it";
			$intestazioni2  = "MIME-Version: 1.0\r\n";
			$intestazioni2 .= "Content-type: text/plain; charset=UTF-8\r\n";
			$intestazioni2 .= "From: ".$emailfrom."\r\n";


			$oggetto2 = "Richiesta informazioni | geminati.it";
			$body = "Gentile ".$Nome;
			$body .= "\n\ngrazie per la tua richiesta.";
			$body .= "\nA breve sarai ricontattato e capiremo insieme le tue esigenze.";
			
			$body .= "\n______________________________________________\n\n";
			$body .= "Brescia Porte\nVia Zanardelli 187 – 25060, Marcheno (BS) \nTel: 030 8610030\n\n";
			$body .= "https://www.bresciaporte.com/ - info@bresciaporte.com";
			$invia2 = mail($Email,$oggetto2,$body,$intestazioni2);

			//Spam
			$rilevaspam = strpos($Messaggio, 'http');
			if ($rilevaspam === false) {
    				$spam = 0;
			} else {
    				$spam=1;    
			}                        


                        // Invio info a software statistiche
                        $useragent = $_SERVER['HTTP_USER_AGENT'];
                        $mobile = 0;
                        if( isset( $_SERVER['HTTP_USER_AGENT'] ) ) {
                            if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
                                $mobile = 1;
                            }
                        }
                        
                        $dominio = $_SERVER["HTTP_REFERER"];
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, "http://dev.toicom.it/index.php/contatti/?dominio=".$dominio."&api-key=hsyE45sgy12AQiasmHSU7ajik89WJ9&spam=" . $spam . "&mobile=" . $mobile);
                        curl_setopt($ch, CURLOPT_HEADER, 0);
                        curl_exec($ch);
                        curl_close($ch);


			echo header("location: ../contatti-ok.html");
		} else { 
			echo header("location: ../contatti-ko.html");
		}
		
	}

?>
