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
		<title>Dalle Carbonare 工作室|图卢兹制琴师，专业订制提琴</title>
		<meta name="description" content="Dalle Carbonare 工作室，来自图卢兹的制琴师，在提琴及琴弓的制作及保养方面拥有超过20年的专业经验。"/>
	<?php } if($url=="/atelier-dalle-carbonare-luthier-toulouse.php") { ?>
		<title>位于图卢兹的工作室：认识 Pierre-Yves Dalle Carbonare</title>
		<meta name="description" content="介绍 Pierre-Yves Dalle Carbonare 和他在图卢兹的制琴工作室，了解他的职业经历，查看图卢兹工作室实景照片。"/>
	<?php } if($categorie=="instrument" && $categorie_id==1) { ?>
		<title>我们的提琴：图卢兹工作室的小提琴</title>
		<meta name="description" content="位于图卢兹的 Dalle Carbonare 制琴工作室为您提供各式提琴，有多种款式的小提琴可供购买或租赁。"/>
	<?php } if($categorie=="instrument" && $categorie_id==2 ) { ?>
		<title>我们的提琴：图卢兹工作室的中提琴</title>
		<meta name="description" content="位于图卢兹的 Dalle Carbonare 制琴工作室为您提供各式提琴，有多种款式的中提琴可供购买或租赁。"/>
	<?php } if($categorie=="instrument" && $categorie_id==3 ) { ?>
		<title>我们的提琴：图卢兹工作室的大提琴</title>
		<meta name="description" content="位于图卢兹的 Dalle Carbonare 制琴工作室为您提供各式提琴，有多种款式的大提琴可供购买或租赁。"/>
	<?php } if($categorie=="instrument" && $categorie_id==4 ) { ?>
		<title>我们的提琴：图卢兹工作室的低音提琴</title>
		<meta name="description" content="位于图卢兹的 Dalle Carbonare 制琴工作室为您提供各式提琴，有多种款式的低音提琴可供购买或租赁。"/>
	<?php } if($categorie=="instrument" && $categorie_id==5 ) { ?>
		<title>我们的提琴：图卢兹工作室的巴洛克提琴</title>
		<meta name="description" content="位于图卢兹的 Dalle Carbonare 制琴工作室为您提供各式提琴，有多种款式的巴洛克提琴可供购买或租赁。"/>
	
	<?php } if($categorie=="archet" && $categorie_id==6) { ?>
		<title>我们的琴弓：图卢兹工作室的小提琴琴弓</title>
		<meta name="description" content="工作室有各式小提琴琴弓可供购买或租赁，并为您的琴弓提供保养服务。"/>
	<?php } if($categorie=="archet" && $categorie_id==7 ) { ?>
		<title>我们的琴弓：图卢兹工作室的中提琴琴弓</title>
		<meta name="description" content="工作室有各式中提琴琴弓可供购买或租赁，并为您的琴弓提供保养服务。"/>
	<?php } if($categorie=="archet" && $categorie_id==8 ) { ?>
		<title>我们的琴弓：图卢兹工作室的大提琴琴弓</title>
		<meta name="description" content="工作室有各式大提琴琴弓可供购买或租赁，并为您的琴弓提供保养服务。"/>
	<?php } if($categorie=="archet" && $categorie_id==9 ) { ?>
		<title>我们的琴弓：图卢兹工作室的低音提琴琴弓</title>
		<meta name="description" content="工作室有各式低音提琴琴弓可供购买或租赁，并为您的琴弓提供保养服务。"/>
	<?php } if($categorie=="archet" && $categorie_id==10 ) { ?>
		<title>我们的琴弓：图卢兹工作室的巴洛克提琴琴弓</title>
		<meta name="description" content="工作室有各式巴洛克提琴琴弓可供购买或租赁，并为您的琴弓提供保养服务。"/>
	
	<?php } if($categorie=="accessoire" && $categorie_id==11) { ?>
		<title>图卢兹工作室的小提琴系列配件</title>
		<meta name="description" content="在我们的工作室，您还可以购买到小提琴在日常保养、提高舒适度及携带运输等方面所需要的各种配件。"/>
	<?php } if($categorie=="accessoire" && $categorie_id==12 ) { ?>
		<title>图卢兹工作室的中提琴系列配件</title>
		<meta name="description" content="在我们的工作室，您还可以购买到中提琴在日常保养、提高舒适度及携带运输等方面所需要的各种配件。"/>
	<?php } if($categorie=="accessoire" && $categorie_id==13 ) { ?>
		<title>图卢兹工作室的大提琴系列配件</title>
		<meta name="description" content="在我们的工作室，您还可以购买到大提琴在日常保养、提高舒适度及携带运输等方面所需要的各种配件。"/>
	<?php } if($categorie=="accessoire" && $categorie_id==14 ) { ?>
		<title>图卢兹工作室的低音提琴系列配件</title>
		<meta name="description" content="在我们的工作室，您还可以购买到低音提琴在日常保养、提高舒适度及携带运输等方面所需要的各种配件。"/>
	<?php } if($categorie=="accessoire" && $categorie_id==15 ) { ?>
		<title>图卢兹工作室的巴洛克提琴系列配件</title>
		<meta name="description" content="在我们的工作室，您还可以购买到巴洛克提琴在日常保养、提高舒适度及携带运输等方面所需要的各种配件。"/>
	
	<?php } if($url=="/prestations-luthier-toulouse.php") { ?>
		<title>服务范围：提琴的销售、租赁、修复及制作</title>
		<meta name="description" content="Dalle Carbonare 提琴工作室提供的服务包括：各类提琴的销售、租赁、鉴定、修复及制作。"/>
	<?php } if($url=="/focus.php") { ?>
		<title>聚焦：发现活动或特别策划</title>
		<meta name="description" content="在这里，Dalle Carbonare 工作室将及时为您介绍与提琴制作及修复相关的活动，或特别项目策划。"/>
	<?php } if($url=="/contacter-atelier-lutherie-toulouse.php") { ?>
		<title>联系图卢兹 Dalle Carbonare 提琴工作室</title>
		<meta name="description" content="如有问题或建议，请您到我们位于图卢兹市中心的工作室，或与我们联系。我们的团队将竭诚为您服务！"/>
	<?php } ?>
	
	
    <link rel="icon" href="build/images/favicon.ico" type="image/ico" sizes="16x16">
    <link rel="alternate" hreflang="en" href="<?php echo $url; ?>?lang=english" />
    <link rel="alternate" hreflang="zh-TW" href="<?php echo $url; ?>?lang=chinese" />
    <link rel="alternate" hreflang="fr" href="<?php echo $url; ?>" />
    <link media="all" rel="stylesheet" href="build/css/vendor.css">
    <link media="all" rel="stylesheet" href="build/css/style.css">
    <link media="all" rel="stylesheet" href="build/css/style-zh.css">
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
                <a href="index.php?lang=chinese" class="logo hidden-lg">
                    <img src="build/images/logo-luthier-dalle-carbonare-toulouse.png" alt="ATELIER Dalle Carbonare">
                </a>
                <a href="#" class="nav-opener"><span>菜单</span></a>
                <nav class="nav-drop">
                    <div class="nav-left">
                        <ul class='link-list'>
                            <li <?if($url=="/index.php") {echo "class='active'";}?>><a href="index.php?lang=chinese">主页</a></li>
                            <li <?if($url=="/atelier-dalle-carbonare-luthier-toulouse.php") {echo "class='active'";}?>><a href="atelier-dalle-carbonare-luthier-toulouse.php?lang=chinese">工作室</a></li>
                            <li <?if($categorie=="instrument") {echo "class='active'";}?>><a href="liste.php?categorie=instrument&lang=chinese">提琴 (FR)</a></li>
                            <li <?if($categorie=="archet") {echo "class='active'";}?>><a href="liste.php?categorie=archet&lang=chinese">琴弓 (FR)</a></li>
                        </ul>
                    </div>
                    <div class="logo-holder">
                        <a href="index.php?lang=chinese" class="logo">
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
                            <li <?if($categorie=="accessoire") {echo "class='active'";}?>><a href="liste.php?categorie=accessoire&lang=chinese">配件 (FR)</a></li>
                            <li class="<?if($url=="/prestations-luthier-toulouse.php") {echo "active ";}?>drop-down">
                                <a href="prestations-luthier-toulouse.php?lang=chinese" class="subnav-drop-opener">服務 <i class="icon-arrow_down"></i> </a>
                                <ul class="drop-down-content">
                                    <li><a href="prestations-luthier-toulouse.php?lang=chinese#prestations1">鉴定</a></li>
                                    <li><a href="prestations-luthier-toulouse.php?lang=chinese#prestations2">零售</a></li>
                                    <li><a href="prestations-luthier-toulouse.php?lang=chinese#prestations3">租赁</a></li>
                                    <li><a href="prestations-luthier-toulouse.php?lang=chinese#prestations4">修复</a></li>
                                    <li><a href="prestations-luthier-toulouse.php?lang=chinese#prestations5">制作</a></li>
                                    <li><a href="prestations-luthier-toulouse.php?lang=chinese#prestations6">寄卖及</a></li>
                                    <li><a href="prestations-luthier-toulouse.php?lang=chinese#prestations7">调试</a></li>
                                </ul>
                            </li>
                            <li <?if($url=="/focus.php") {echo "class='active'";}?>><a href="focus.php?lang=chinese">聚焦 (FR)</a></li>
                            <li <?if($url=="/contacter-atelier-lutherie-toulouse.php") {echo "class='active'";}?>><a href="contacter-atelier-lutherie-toulouse.php?lang=chinese">联系我们</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>