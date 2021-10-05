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
    <title>Worshop Dalle Carbonare | Violinmaker in Toulouse, new making of violins</title>
    <meta name="description"
        content="Workshop Dalle Cabonare, violinmaker in Toulouse. More than 20 years of experience for a unique and recognised knowledge in the maintaining and making of violins and bows" />
    <?php } if($url=="/atelier-dalle-carbonare-luthier-toulouse.php") { ?>
    <title>Our workshop in Toulouse : discover Pierre-Yves Dalle Carbonare </title>
    <meta name="description"
        content="Presentation of Pierre-Yves Dalle Carbonare and his violin maker workshop in Toulouse. Discover his biography, and a photo gallery of our Tolosan workshop." />
    <?php } if($categorie=="instrument" && $categorie_id==1) { ?>
    <title>Our Instruments : Discover our violin in Toulouse</title>
    <meta name="description"
        content="Discover the instruments offered by the workshop Dalle Carbonare in Toulouse. Presentation of our violins models available for sale or rental" />
    <?php } if($categorie=="instrument" && $categorie_id==2 ) { ?>
    <title>Our Instruments : Discover our violas in Toulouse</title>
    <meta name="description"
        content="Discover the instruments offered by the workshop Dalle Carbonare in Toulouse. Presentation of our violins models available for sale or rental" />
    <?php } if($categorie=="instrument" && $categorie_id==3 ) { ?>
    <title>Our Instruments : Discover our cellos in Toulouse</title>
    <meta name="description"
        content="Discover the instruments offered by the workshop Dalle Carbonare in Toulouse. Presentation of our cellos models available for sale or rental" />
    <?php } if($categorie=="instrument" && $categorie_id==4 ) { ?>
    <title>Our Instruments : Discover our Double bass in Toulouse</title>
    <meta name="description"
        content="Discover the instruments offered by the workshop Dalle Carbonare in Toulouse. Presentation of our Double bass models available for sale or rental" />
    <?php } if($categorie=="instrument" && $categorie_id==5 ) { ?>
    <title>Our Instruments : Discover our baroque instruments in Toulouse</title>
    <meta name="description"
        content="Discover the instruments offered by the workshop Dalle Carbonare in Toulouse. Presentation of our baroques instruments available for sale or rental" />

    <?php } if($categorie=="archet" && $categorie_id==6) { ?>
    <title>Our bows : discover our violin bows in Toulouse.</title>
    <meta name="description"
        content="Discover our bows for violin, available for sale or rental. We egally offer maintaining services for you violin bows" />
    <?php } if($categorie=="archet" && $categorie_id==7 ) { ?>
    <title>Our bows : discover our viola bows in Toulouse.</title>
    <meta name="description"
        content="Discover our bows for violas, available for sale or rental. We also offer maintaining services for you viola bows" />
    <?php } if($categorie=="archet" && $categorie_id==8 ) { ?>
    <title>Our bows : discover our cello bows in Toulouse.</title>
    <meta name="description"
        content="Discover our bows for cellos, available for sale or rental. We also offer maintaining services for you cello bows" />
    <?php } if($categorie=="archet" && $categorie_id==9 ) { ?>
    <title>Our bows : discover our double bass bows in Toulouse.</title>
    <meta name="description"
        content="Discover our bows for double bass, available for sale or rental. We also offer maintaining services for you cello bows" />
    <?php } if($categorie=="archet" && $categorie_id==10 ) { ?>
    <title>Our bows : discover our baroque bows in Toulouse.</title>
    <meta name="description"
        content="Discover our bows for baroque instruments, available for sale or rental. We also offer maintaining services for you cello bows" />

    <?php } if($categorie=="accessoire" && $categorie_id==11) { ?>
    <title>Discover our selection of accessories for violins in Toulouse. </title>
    <meta name="description"
        content="Our workshop also offers a selection of accessories for your violin in order to answer all request : maintaining, comfort, transportation, …" />
    <?php } if($categorie=="accessoire" && $categorie_id==12 ) { ?>
    <title>Discover our selection of accessories for violas in Toulouse. </title>
    <meta name="description"
        content="Our workshop also offers a selection of accessories for your viola in order to answer all request : maintaining, comfort, transportation, …" />
    <?php } if($categorie=="accessoire" && $categorie_id==13 ) { ?>
    <title>Discover our selection of accessories for cellos in Toulouse. </title>
    <meta name="description"
        content="Our workshop also offers a selection of accessories for your cello in order to answer all request : maintaining, comfort, transportation, …" />
    <?php } if($categorie=="accessoire" && $categorie_id==14 ) { ?>
    <title>Discover our selection of accessories for double bass in Toulouse. </title>
    <meta name="description"
        content="Our workshop also offers a selection of accessories for your double bass in order to answer all request : maintaining, comfort, transportation, …" />
    <?php } if($categorie=="accessoire" && $categorie_id==15 ) { ?>
    <title>Discover our selection of accessories for baroque instruments in Toulouse. </title>
    <meta name="description"
        content="Our workshop also offers a selection of accessories for your baroque instrument in order to answer all request : maintaining, comfort, transportation, …" />

    <?php } if($url=="/prestations-luthier-toulouse.php") { ?>
    <title>Our services : sale, rental, restoration, new making. </title>
    <meta name="description"
        content="The violins making services offered by the workshop Dalle Carbonare : sale, violin making, rental, expertise, restoration, new making" />
    <?php } if($url=="/focus.php") { ?>
    <title>Focus : frequently discover a specific activity or project. </title>
    <meta name="description"
        content="In this section, the workshop Dalle Carbonare presents his specific activities or a particular project around the new making and restoration of instruments." />
    <?php } if($url=="/contacter-atelier-lutherie-toulouse.php") { ?>
    <title>Contact the workshop Dalle Carbonare in Toulouse</title>
    <meta name="description" content="Contact our workshop located in the heart of Toulouse, to submit our questions or request to us. 
        Our team holds itself at your disposal for all inquiries. " />
    <?php } ?>


    <link rel="icon" href="build/images/favicon.ico" type="image/ico" sizes="16x16">
    <link rel="alternate" hreflang="en" href="<?php echo $url; ?>?lang=english" />
    <link rel="alternate" hreflang="zh-TW" href="<?php echo $url; ?>?lang=chinese" />
    <link rel="alternate" hreflang="fr" href="<?php echo $url; ?>" />
    <link media="all" rel="stylesheet" href="build/css/vendor.css">
    <link media="all" rel="stylesheet" href="build/css/style.css">
    <!--     // <script src="build/js/vendor.js"></script>
    // <script src="build/js/app.js"></script> -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-92998536-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-92998536-2');
    </script>
</head>


<body>
    <div id="wrapper">
        <header id="header">
            <div class="container">
                <a href="index.php?lang=english" class="logo hidden-lg">
                    <img src="build/images/logo-luthier-dalle-carbonare-toulouse.png" alt="ATELIER Dalle Carbonare">
                </a>
                <a href="#" class="nav-opener"><span>MENU</span></a>
                <nav class="nav-drop">
                    <div class="nav-left">
                        <ul class='link-list'>
                            <li <?if($url=="/index.php" ) {echo "class='active'" ;}?>><a
                                    href="index.php?lang=english">Home</a></li>
                            <li <?if($url=="/atelier-dalle-carbonare-luthier-toulouse.php" ) {echo "class='active'" ;}?>
                                ><a href="atelier-dalle-carbonare-luthier-toulouse.php?lang=english">Workshop</a></li>
                            <li <?if($categorie=="instrument" ) {echo "class='active'" ;}?>><a
                                    href="liste.php?categorie=instrument&lang=english">Instruments</a></li>
                            <li <?if($categorie=="archet" ) {echo "class='active'" ;}?>><a
                                    href="liste.php?categorie=archet&lang=english">Bows</a></li>
                        </ul>
                    </div>
                    <div class="logo-holder">
                        <a href="index.php?lang=english" class="logo">
                            <img src="build/images/logo-luthier-dalle-carbonare-toulouse.png"
                                alt="ATELIER Dalle Carbonare">
                        </a>
                    </div>
                    <div class="nav-right">
                        <ul class="lang-list">
                            <li <?php if($lang=="french"){echo "class='active'";}?>><a href="<?php echo $url;?>">fr</a>
                            </li>
                            <li <?php if($lang=="english"){echo "class='active'";}?>><a
                                    href="<?php echo $url;?>?lang=english">en</a></li>
                            <li <?php if($lang=="chinese"){echo "class='active'";}?>><a
                                    href="<?php echo $url;?>?lang=chinese">中文</a></li>
                        </ul>
                        <ul class='link-list'>
                            <li <?if($categorie=="accessoire" ) {echo "class='active'" ;}?>><a
                                    href="liste.php?categorie=accessoire&lang=english">Accessories</a></li>
                            <li class="<?if($url=="/prestations-luthier-toulouse.php") {echo "active " ;}?>drop-down">
                                <a href="prestations-luthier-toulouse.php?lang=english"
                                    class="subnav-drop-opener">Services <i class="icon-arrow_down"></i> </a>
                                <ul class="drop-down-content">
                                    <li><a
                                            href="prestations-luthier-toulouse.php?lang=english#prestations1">Expertise</a>
                                    </li>
                                    <li><a href="prestations-luthier-toulouse.php?lang=english#prestations2">Sale</a>
                                    </li>
                                    <li><a href="prestations-luthier-toulouse.php?lang=english#prestations3">Rent</a>
                                    </li>
                                    <li><a
                                            href="prestations-luthier-toulouse.php?lang=english#prestations4">Restoration</a>
                                    </li>
                                    <li><a href="prestations-luthier-toulouse.php?lang=english#prestations5">Making</a>
                                    </li>
                                    <li><a href="prestations-luthier-toulouse.php?lang=english#prestations6">Deposit
                                            Sale</a></li>
                                    <li><a
                                            href="prestations-luthier-toulouse.php?lang=english#prestations7">Adjustements</a>
                                    </li>
                                </ul>
                            </li>
                            <li <?if($url=="/focus.php" ) {echo "class='active'" ;}?>><a
                                    href="focus.php?lang=english">Focus</a></li>
                            <li <?if($url=="/contacter-atelier-lutherie-toulouse.php" ) {echo "class='active'" ;}?>><a
                                    href="contacter-atelier-lutherie-toulouse.php?lang=english">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>