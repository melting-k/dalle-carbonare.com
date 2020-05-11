<?php
    $url = $_SERVER['PHP_SELF'];
    if (isset($_GET['lang']))
    {
        $lang=$_GET['lang'];
    }
    else
    {
        $lang='french';
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php if($url=="/index.php") { ?>
		<title>Atelier Dalle Carbonare | Luthier à Toulouse, fabrication de violons</title>
		<meta name="description" content="Atelier Dalle Carbonare, luthier à Toulouse. Plus de 20 ans d'expérience pour un savoir-faire unique et reconnu dans l'entretien et la fabrication de violons et d'archets"/>
	<?php } if($url=="/atelier-dalle-carbonare-luthier-toulouse.php") { ?>
		<title>Notre atelier à Toulouse : découvrir Pierre-Yves Dalle Carbonare</title>
		<meta name="description" content="Présentation de Pierre-Yves Dalle Carbonare et de son atelier de lutherie à Toulouse. Découvrez sa formation, et une galerie de photos de notre atelier toulousain"/>
	<?php } if($categorie=="instrument" && $categorie_id==1) { ?>
		<title>Nos instruments : découvrez nos violons à Toulouse</title>
		<meta name="description" content="Découvrez les instruments proposés par l'atelier Dalle Carbonare, à Toulouse. Présentation de nos modèles de violons disponibles en achat ou location"/>
	<?php } if($categorie=="instrument" && $categorie_id==2 ) { ?>
		<title>Nos instruments : découvrez nos altos à Toulouse</title>
		<meta name="description" content="Découvrez les instruments proposés par l'atelier Dalle Carbonare, à Toulouse. Présentation de nos modèles d'altos disponibles en achat ou location"/>
	<?php } if($categorie=="instrument" && $categorie_id==3 ) { ?>
		<title>Nos instruments : découvrez nos violoncelles à Toulouse</title>
		<meta name="description" content="Découvrez les instruments proposés par l'atelier Dalle Carbonare, à Toulouse. Présentation de nos modèles de violoncelles disponibles en achat ou location"/>
	<?php } if($categorie=="instrument" && $categorie_id==4 ) { ?>
		<title>Nos instruments : découvrez nos contrebasses à Toulouse</title>
		<meta name="description" content="Découvrez les instruments proposés par l'atelier Dalle Carbonare, à Toulouse. Présentation de nos modèles de contrebasses disponibles en achat ou location"/>
	<?php } if($categorie=="instrument" && $categorie_id==5 ) { ?>
		<title>Nos instruments : découvrez nos instruments baroques à Toulouse</title>
		<meta name="description" content="Découvrez les instruments proposés par l'atelier Dalle Carbonare, à Toulouse. Présentation de nos modèles d'instruments baroques disponibles en achat ou location"/>
	
	<?php } if($categorie=="archet" && $categorie_id==6) { ?>
		<title>Nos archets : découvrez nos archets de violons à Toulouse</title>
		<meta name="description" content="Découvrez nos archets pour violons, disponibles à la vente ou en location. Nous vous proposons également des prestations d'entretien de vos archets de violons"/>
	<?php } if($categorie=="archet" && $categorie_id==7 ) { ?>
		<title>Nos archets : découvrez nos archets d'altos à Toulouse</title>
		<meta name="description" content="Découvrez nos archets pour altos, disponibles à la vente ou en location. Nous vous proposons également des prestations d'entretien pour vos archets d'altos"/>
	<?php } if($categorie=="archet" && $categorie_id==8 ) { ?>
		<title>Nos archets : découvrez nos archets de violoncelles à Toulouse</title>
		<meta name="description" content="Découvrez nos archets pour violoncelles, disponibles à la vente ou en location. Nous vous proposons également des prestations d'entretien pour vos archets de violoncelles"/>
	<?php } if($categorie=="archet" && $categorie_id==9 ) { ?>
		<title>Nos archets : découvrez nos archets de contrebasses à Toulouse</title>
		<meta name="description" content="Découvrez nos archets pour contrebasses, disponibles à la vente ou en location. Nous vous proposons également des prestations d'entretien pour vos archets de contrebasses"/>
	<?php } if($categorie=="archet" && $categorie_id==10 ) { ?>
		<title>Nos archets : découvrez nos archets d'instruments baroques à Toulouse</title>
		<meta name="description" content="Découvrez nos archets pour instruments baroques, à la vente ou en location. Nous vous proposons également des prestations d'entretien pour vos archets d'instruments baroques"/>
	
	<?php } if($categorie=="accessoire" && $categorie_id==11) { ?>
		<title>Découvrez notre sélection d'accessoires pour violons à Toulouse</title>
		<meta name="description" content="Notre atelier vous propose également une sélection d'accessoires pour votre violon afin de répondre à toutes les demandes : entretien, confort, transport ..."/>
	<?php } if($categorie=="accessoire" && $categorie_id==12 ) { ?>
		<title>Découvrez notre sélection d'accessoires pour altos à Toulouse</title>
		<meta name="description" content="Notre atelier vous propose également une sélection d'accessoires pour altos, afin de répondre à toutes les demandes : entretien, confort, transport ..."/>
	<?php } if($categorie=="accessoire" && $categorie_id==13 ) { ?>
		<title>Découvrez notre sélection d'accessoires pour violoncelles à Toulouse</title>
		<meta name="description" content="Notre atelier vous propose également une sélection d'accessoires pour votre violoncelle afin de répondre à toutes les demandes : entretien, confort, transport ..."/>
	<?php } if($categorie=="accessoire" && $categorie_id==14 ) { ?>
		<title>Découvrez notre sélection d'accessoires pour contrebasses à Toulouse</title>
		<meta name="description" content="Notre atelier vous propose également une sélection d'accessoires pour votre contrebasse afin de répondre à toutes les demandes : entretien, confort, transport ..."/>
	<?php } if($categorie=="accessoire" && $categorie_id==15 ) { ?>
		<title>Découvrez notre sélection d'accessoires pour instruments baroques à Toulouse</title>
		<meta name="description" content="Notre atelier vous propose également une sélection d'accessoires pour votre instrument baroque afin de répondre à toutes les demandes : entretien, confort, transport ..."/>
	
	<?php } if($url=="/prestations-luthier-toulouse.php") { ?>
		<title>Nos prestations : vente, location, restauration, fabrication d'instrument </title>
		<meta name="description" content="Les prestations de lutherie proposées par l'atelier Dalle Carbonare : vente, location, expertise, restauration, fabrication d'instruments de musique"/>
	<?php } if($url=="/focus.php") { ?>
		<title>Focus : découvrez régulièrement une activité ou un projet spécifique</title>
		<meta name="description" content="Dans cette rubrique, l'atelier Dalle Carbonare vous présente des activités spécifiques ou un projet particulier autour de la fabrication & restauration d'instruments"/>
	<?php } if($url=="/contacter-atelier-lutherie-toulouse.php") { ?>
		<title>Contacter L'atelier de lutherie Dalle Carbonare, à Toulouse</title>
		<meta name="description" content="Contacter notre atelier, situé au coeur de Toulouse, pour nous soumettre vos questions ou demandes. Notre équipe se tient à votre disposition pour y répondre !"/>
	<?php } ?>
	
	
    <link rel="icon" href="build/images/favicon.ico" type="image/ico" sizes="16x16">
    <link rel="alternate" hreflang="en" href="<?php echo $url; ?>?lang=english" />
    <link rel="alternate" hreflang="zh-TW" href="<?php echo $url; ?>?lang=chinese" />
    <link rel="alternate" hreflang="fr" href="<?php echo $url; ?>" />
    <link media="all" rel="stylesheet" href="build/css/vendor.css">
    <link media="all" rel="stylesheet" href="build/css/style.css">
<!--     // <script src="build/js/vendor.js"></script>
    // <script src="build/js/app.js"></script> -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-92998536-2', 'auto');
      ga('send', 'pageview');

    </script>
</head>


<body>
    <div id="wrapper">
        <header id="header">
            <div class="container">
                <a href="index.php" class="logo hidden-lg">
                    <img src="build/images/logo-luthier-dalle-carbonare-toulouse.png" alt="ATELIER Dalle Carbonare">
                </a>
                <a href="#" class="nav-opener"><span>MENU</span></a>
                <nav class="nav-drop">
                    <div class="nav-left">
                        <ul class='link-list'>
                            <li <?if($url=="/index.php") {echo "class='active'";}?>><a href="index.php">Accueil</a></li>
                            <li <?if($url=="/atelier-dalle-carbonare-luthier-toulouse.php") {echo "class='active'";}?>><a href="atelier-dalle-carbonare-luthier-toulouse.php">Atelier</a></li>
                            <li <?if($categorie=="instrument") {echo "class='active'";}?>><a href="liste.php?categorie=instrument">Instruments</a></li>
                            <li <?if($categorie=="archet") {echo "class='active'";}?>><a href="liste.php?categorie=archet">Archets</a></li>
                        </ul>
                    </div>
                    <div class="logo-holder">
                        <a href="index.php" class="logo">
                            <img src="build/images/logo-luthier-dalle-carbonare-toulouse.png" alt="ATELIER Dalle Carbonare">
                        </a>
                    </div>
                    <div class="nav-right">
                        <ul class="lang-list">
                            <li <?php if($lang=="french"){echo "class='active'";}?>><a href="<?php echo $url;?>">fr</a></li>
                            <li <?php if($lang=="english"){echo "class='active'";}?>><a href="<?php echo $url;?>?lang=english">en</a></li>
                            <li <?php if($lang=="chinese"){echo "class='active'";}?>><a href="<?php echo $url;?>?lang=chinese">中文</a></li>
                        </ul>
                        <ul class='link-list'>
                            <li <?if($categorie=="accessoire") {echo "class='active'";}?>><a href="liste.php?categorie=accessoire">Accessoires</a></li>
                            <li class="<?if($url=="/prestations-luthier-toulouse.php") {echo "active ";}?>drop-down">
                                <a href="prestations-luthier-toulouse.php" class="subnav-drop-opener">Prestations <i class="icon-arrow_down"></i> </a>
                                <ul class="drop-down-content">
                                    <li><a href="prestations-luthier-toulouse.php#prestations1">Expertise</a></li>
                                    <li><a href="prestations-luthier-toulouse.php#prestations2">Vente</a></li>
                                    <li><a href="prestations-luthier-toulouse.php#prestations3">Location</a></li>
                                    <li><a href="prestations-luthier-toulouse.php#prestations4">Restauration</a></li>
                                    <li><a href="prestations-luthier-toulouse.php#prestations5">Fabrication</a></li>
                                    <li><a href="prestations-luthier-toulouse.php#prestations6">Dépôt-Vente</a></li>
                                    <li><a href="prestations-luthier-toulouse.php#prestations7">Réglages</a></li>
                                </ul>
                            </li>
                            <li <?if($url=="/focus.php") {echo "class='active'";}?>><a href="focus.php">Focus</a></li>
                            <li <?if($url=="/contacter-atelier-lutherie-toulouse.php") {echo "class='active'";}?>><a href="contacter-atelier-lutherie-toulouse.php">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>