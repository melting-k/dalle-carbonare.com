<?
if(isset($_GET['lang']) && $_GET['lang']=='english')
{
    include ('en/detail.php');
}
elseif (isset($_GET['lang']) && $_GET['lang']=='chinese') 
{
    include ('zh/detail.php');
}
else {
session_start();
$page="front";
include("administration/panel/config.php");

$categorie_id			=		$_REQUEST['categorie_id'];
$categorie				=		$_REQUEST['categorie'];
$instrument_id			=		$_REQUEST['instrument_id'];

if($categorie_id=="")		{$categorie_id=1;}
if($categorie_id==1 || $categorie_id==6 || $categorie_id==11){$titre="Les Violons";$classe1="active";}
if($categorie_id==2 || $categorie_id==7 || $categorie_id==12){$titre="Les Altos";$classe2="active";}
if($categorie_id==3 || $categorie_id==8 || $categorie_id==13){$titre="Les Violoncelles";$classe3="active";}
if($categorie_id==4 || $categorie_id==9 || $categorie_id==14){$titre="Les Contrebasses";$classe4="active";}
if($categorie_id==5 || $categorie_id==10 || $categorie_id==15){$titre="Baroque";$classe5="active";}



if($categorie=="instrument"){$titre_general="Les instruments";$sous_titre_general="nos instruments";$var1=1;$var2=2;$var3=3;$var4=4;$var5=5;}
if($categorie=="archet"){$titre_general="Les archets";$sous_titre_general="nos archets";$var1=6;$var2=7;$var8=3;$var4=9;$var5=10;}
if($categorie=="accessoire"){$titre_general="Les accessoires";$sous_titre_general="nos accessoires";$var1=11;$var2=12;$var3=13;$var4=14;$var5=15;}


$myquery 		= "SELECT * from instrument where id=".$instrument_id;
$instrument 	= $db->get_row($myquery);
	
	// LISTER LE CONTENU DU DOSSIER VIGNETTE
	$dir = "upload_vignette/".$instrument->id."/thumbnail/";
	$lister_exec = lister($dir);
	$chemin_vignette="";
	$chemin_vignette="upload_vignette/nophoto.png";
	if (!empty($lister_exec))
	{
		foreach ($lister_exec as $key)
			{
				foreach ($key as $v2)
				{
				$chemin_vignette="upload_vignette/".$instrument->id."/thumbnail/".$v2;
				$chemin_vignette_zoom="upload_vignette/".$instrument->id."/".$v2;
				}
			}
	}
	// LISTER LE CONTENU DU DOSSIER	VIGNETTE
	
	// LISTER LE CONTENU DU DOSSIER PHOTOS
	$dir1 = "upload/".$instrument->id."/thumbnail/";
	$lister_exec = lister($dir1);
	$chemin_photo[]="";
	$chemin_photo_zoom[]="";
	
	$i=0;
	if (!empty($lister_exec))
	{
		foreach ($lister_exec as $key)
			{
				
				foreach ($key as $v2)
				{
				$i=$i+1;
				$chemin_photo[]="upload/".$instrument->id."/thumbnail/".$v2;
				$chemin_photo_zoom[]="upload/".$instrument->id."/".$v2;
				
				}
			}
	}
	// LISTER LE CONTENU DU DOSSIER	PHOTOS
include 'header.php';
?>

        <div class="visual visual-static" style="background-image: url('build/images/img21.jpg');">
            <div class="container">
                <div class="visual-header">
                     <h1><?echo $titre_general;?></h1>
                    <h2 class="small-h2">découvrez <?echo $sous_titre_general;?> </h2>
                </div>
            </div>
        </div>
        <main>
            <script>
            window.screen.orientation.addEventListener('change', function() {
                location.reload(true)
            });
            </script>
            <div class="content-holder" id="point1" style="background-image: url('build/images/img22.jpg');">
                <div class="container">
                    <?if ($categorie!="accessoire") {?>
					<nav class="instrument-navigation">
                        <ul>
                            <li class="<?echo $classe1;?>"><a href="liste.php?categorie=<?echo $categorie;?>&categorie_id=<?echo $var1;?>" class="btn btn-green"><span>violons</span> <i class="icon-arrow_right"></i></a></li>
                            <li class="<?echo $classe2;?>"><a href="liste.php?categorie=<?echo $categorie;?>&categorie_id=<?echo $var2;?>" class="btn btn-green"><span>altos</span> <i class="icon-arrow_right"></i></a></li>
                            <li class="<?echo $classe3;?>"><a href="liste.php?categorie=<?echo $categorie;?>&categorie_id=<?echo $var3;?>" class="btn btn-green"><span>violoncelles</span> <i class="icon-arrow_right"></i></a></li>
                            <li  class="<?echo $classe4;?>"><a href="liste.php?categorie=<?echo $categorie;?>&categorie_id=<?echo $var4;?>" class="btn btn-green"><span>contrebasses</span> <i class="icon-arrow_right"></i></a></li>
                            <li  class="<?echo $classe5;?>"><a href="liste.php?categorie=<?echo $categorie;?>&categorie_id=<?echo $var5;?>" class="btn btn-green"><span>Baroque</span> <i class="icon-arrow_right"></i></a></li>
                        </ul>
                    </nav>
					<?}?>
                    <section class="visual-brown previw-inside">
                        <div class="img-holder">
                            <div class="img-box" id="tab1">
                                <img src="<?echo $chemin_vignette_zoom?>" alt="image description" data-zoom-image="<?echo $chemin_vignette_zoom?>" />
                            </div>
                            <?php if(isset($chemin_photo_zoom['1'])) { ?>
                            <div class="img-box" id="tab2">
                                <img src="<?echo $chemin_photo_zoom['1'];?>" alt="image description" data-zoom-image="<?echo $chemin_photo_zoom['1'];?>" />
                            </div>
                            <?php } ?>
                            
                            <?php if(isset($chemin_photo_zoom['2'])) { ?>
                            <div class="img-box" id="tab3">
                                <img src="<?echo $chemin_photo_zoom['2'];?>" alt="image description" data-zoom-image="<?echo $chemin_photo_zoom['2'];?>" />
                            </div>
                            <?php } ?>
                            <ul class="preview-list">
                                <li>
                                    <a data-tab="#tab1" class="active"><img src="<?echo $chemin_vignette_zoom?>" alt="<?echo $chemin_vignette_zoom;?>"></a>
                                </li><li>
                                    <?php if(isset($chemin_photo_zoom['1'])) { ?>
                                    <a data-tab="#tab2" ><img src="<?echo $chemin_photo_zoom['1'];?>" alt="<?echo $chemin_photo_zoom['1'];?>"></a>
                                    <?php } ?>
                                </li><li>
                                    <?php if(isset($chemin_photo_zoom['2'])) { ?>
                                    <a data-tab="#tab3"><img src="<?echo $chemin_photo_zoom['2'];?>" alt="<?echo $chemin_photo_zoom['2'];?>"></a>
                                    <?php } ?>
                                </li>
                            </ul>
                        </div>
                        <div class="text-holder accessoires">
                            <h1><?echo $instrument->nom;?></h1>
                            <p><?echo $instrument->description;?></p>
                            <a href="contacter-atelier-lutherie-toulouse.php" class="btn btn-green">Nous contacter<i class="icon-arrow_right"></i></a>
                            <a href="#" class="btn btn-bordered" onclick="history.back()">Retour</a>
                        </div>
                    </section>
					<?
					/*
					echo "<pre>";
					print_r($chemin_photo);
					echo "</pre>";
					
							$compteur=0;
							foreach ($chemin_photo as $value)
							{
							$compteur=$compteur+1;
							if ($chemin_photo[$compteur])
							{
							?>
							<a href="#" data-image="<?echo $chemin_photo[$compteur]?>" data-zoom-image="<?echo $chemin_photo[$compteur]?>"> <img id="img_0<?echo $compteur;?>" src="<?echo $chemin_photo[$compteur]?>" /> </a> 
							<?}}*/
							?>
                </div>
            </div>
        </main>

<?php
include 'footer.php';
}
?>