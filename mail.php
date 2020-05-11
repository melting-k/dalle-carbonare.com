<?php
	if(isset($_POST['host']) && $_POST['host']=='OK')
    {
		$date=date('d-m-Y-g-i-s');
        if(isset($_FILES['pj']['name']) && $_FILES['pj']['name']!=NULL)
		{	
			$imgName = $_FILES['pj']['name'];
			$tmpName = $_FILES['pj']['tmp_name'];
			$ext = strtolower (substr($imgName,-3)); // on enregistre l'extension de l'image en minuscule
			$ext_allow = array("jpg", "png"); // on définie un tableau contenant les extensions autorisées
            
			if (in_array($ext, $ext_allow)) 
			{
				$nom_image = "photo-".$date.".".$ext;
				$nom_final = "upload-mail/".$nom_image; //enregistrement du chemin de l'image
				move_uploaded_file($tmpName, $nom_final); //on enregistre l'image à l'emplacement voulu				
			}
			else
			{
				echo "Le format d'image choisi n'est pas valide";
			}
		}
        if(isset($_FILES['pj2']['name']) && $_FILES['pj2']['name']!=NULL)
		{	
			$imgName2 = $_FILES['pj2']['name'];
			$tmpName2 = $_FILES['pj2']['tmp_name'];
			$ext2 = strtolower (substr($imgName2,-3)); // on enregistre l'extension de l'image en minuscule
			$ext_allow2 = array("jpg", "png"); // on définie un tableau contenant les extensions autorisées
            
			if (in_array($ext2, $ext_allow2)) 
			{
				$nom_image2 = "photo2-".$date.".".$ext2;
				$nom_final2 = "upload-mail/".$nom_image2; //enregistrement du chemin de l'image
				move_uploaded_file($tmpName2, $nom_final2); //on enregistre l'image à l'emplacement voulu				
			}
			else
			{
				echo "Le format d'image choisi n'est pas valide";
			}
		}
        if(isset($_FILES['pj3']['name']) && $_FILES['pj3']['name']!=NULL)
		{	
			$imgName3 = $_FILES['pj3']['name'];
			$tmpName3 = $_FILES['pj3']['tmp_name'];
			$ext3 = strtolower (substr($imgName3,-3)); // on enregistre l'extension de l'image en minuscule
			$ext_allow3 = array("jpg", "png"); // on définie un tableau contenant les extensions autorisées
            
			if (in_array($ext3, $ext_allow3)) 
			{
				$nom_image3 = "photo3-".$date.".".$ext3;
				$nom_final3 = "upload-mail/".$nom_image3; //enregistrement du chemin de l'image
				move_uploaded_file($tmpName3, $nom_final3); //on enregistre l'image à l'emplacement voulu				
			}
			else
			{
				echo "Le format d'image choisi n'est pas valide";
			}
		}
        
        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // Filtrage du serveur
		{
			$passage_ligne = "\r\n";
		}
		else
		{
			$passage_ligne = "\n";
		}
        
        $page = $_POST['page'];
        
        // CONTENU DU MAIL
        
        /*$mail = 'atelierdallecarbonare@gmail.com';*/	// Déclaration du mail du destinataire
        $mail = 'atelierdallecarbonare@gmail.com';
        
		$message_txt = "Vous avez reçu un message envoyé depuis votre site internet. Vous trouverez ci-dessous les coordonnées laissées par votre client.".$passage_ligne.$passage_ligne."Attention : pour répondre à celui-ci, utilisez les coordonnées qu'il ou elle vous a transmises, n'utilisez pas la fonction ' répondre ' de votre logiciel de messagerie.";
        while (list($key, $val) = each($_POST)) {
			if ($key=='host' || $key=='page' || $key=='pj')
			{
		
			}
			else
			{
				$message_txt .="$key : $val\n";
				$message_txt = stripslashes($message_txt);
			}
		}
		$sujet = "NOUVEAU MESSAGE [DALLE-CARBONARE.COM]";

		// PIECE JOINTE
				
		$fichier   = fopen($nom_final, "r");   //on ouvre le fichier en lecture seule.		
		$attachement = fread($fichier, filesize($nom_final)); //on lit l'ensemble du fichier avec la fonction fread.		
		$attachement = chunk_split(base64_encode($attachement)); // on encode le fichier OKLM
		fclose($fichier); //on ferme le fichier. IZI
        
        $fichier2   = fopen($nom_final2, "r");   //on ouvre le fichier en lecture seule.		
		$attachement2 = fread($fichier2, filesize($nom_final2)); //on lit l'ensemble du fichier avec la fonction fread.		
		$attachement2 = chunk_split(base64_encode($attachement2)); // on encode le fichier OKLM
		fclose($fichier2); //on ferme le fichier. IZI
        
        $fichier3   = fopen($nom_final3, "r");   //on ouvre le fichier en lecture seule.		
		$attachement3 = fread($fichier3, filesize($nom_final3)); //on lit l'ensemble du fichier avec la fonction fread.		
		$attachement3 = chunk_split(base64_encode($attachement3)); // on encode le fichier OKLM
		fclose($fichier3); //on ferme le fichier. IZI
        
		// CRÉATION DE LA BOUNDARY
		$boundary = "-----=".md5(rand());
		$boundary_alt = "-----=".md5(rand());


		// HEADER 

		$header = "From: Atelier Dalle Carbonare <contact@dalle-carbonare.com>".$passage_ligne;
		$header .= "Reply-to: Atelier Dalle Carbonare <contact@dalle-carbonare.com>".$passage_ligne;
		$header .= "MIME-Version: 1.0".$passage_ligne;
		$header .= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

		// MAIL
		// =====On ouvre la boundary pour le corps du mail
		$message = $passage_ligne."--".$boundary.$passage_ligne;
		$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;		
		$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
		//=====Ajout du message au format texte.
		$message.= "Content-Type: text/plain; charset=\"UTF-8\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_txt.$passage_ligne;
		//==========
		 
		//=====On ferme la boundary alternative.
		$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
        
        //=====On ouvre une boundary principale pour la partie PJ
		$message.= $passage_ligne."--".$boundary.$passage_ligne;
        
        // PJ JPG
		$message.= "Content-Type: image/jpeg; name=\"$nom_image\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: base64".$passage_ligne;
		$message.= "Content-Disposition: attachment; filename=\"$nom_image\"".$passage_ligne;
		$message.= $passage_ligne.$attachement.$passage_ligne.$passage_ligne;
        
		 
        
        if(isset($_FILES['pj2']['name']) && $_FILES['pj2']['name']!=NULL)
		{
            // PJ N°2
            //=====On ouvre une boundary principale pour la partie PJ 2
            $message.= $passage_ligne."--".$boundary.$passage_ligne;

            // PJ JPG
            $message.= "Content-Type: image/jpeg; name=\"$nom_image2\"".$passage_ligne;
            $message.= "Content-Transfer-Encoding: base64".$passage_ligne;
            $message.= "Content-Disposition: attachment; filename=\"$nom_image2\"".$passage_ligne;
            $message.= $passage_ligne.$attachement2.$passage_ligne.$passage_ligne;

            
        }
        if(isset($_FILES['pj3']['name']) && $_FILES['pj3']['name']!=NULL)
		{
            // PJ N°3
            //=====On ouvre une boundary principale pour la partie PJ 3
            $message.= $passage_ligne."--".$boundary.$passage_ligne;

            // PJ JPG
            $message.= "Content-Type: image/jpeg; name=\"$nom_image3\"".$passage_ligne;
            $message.= "Content-Transfer-Encoding: base64".$passage_ligne;
            $message.= "Content-Disposition: attachment; filename=\"$nom_image3\"".$passage_ligne;
            $message.= $passage_ligne.$attachement3.$passage_ligne.$passage_ligne;
        }
        
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne; 
		// ENVOI MOFUCKA !
		mail($mail,$sujet,$message,$header);
		Header("Location: contacter-atelier-lutherie-toulouse.php?message=sent#formulare");
	}
	else
	{
		Header("Location: contacter-atelier-lutherie-toulouse.php#formulare");
	}
?>
