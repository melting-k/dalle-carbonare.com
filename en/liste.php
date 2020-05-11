<?
session_start();
$page="front";
include("administration/panel/config.php");

$categorie_id		=		$_REQUEST['categorie_id'];
$categorie			=		$_REQUEST['categorie'];


if($categorie==""){$categorie="instrument";}



if($categorie=="instrument"){$titre_general="Instruments";$sous_titre_general="our instruments";$var1=1;$var2=2;$var3=3;$var4=4;$var5=5;if($categorie_id==""){$categorie_id=1;}}
if($categorie=="archet"){$titre_general="Bows";$sous_titre_general="our bows";$var1=6;$var2=7;$var3=8;$var4=9;$var5=10;if($categorie_id==""){$categorie_id=6;}}
if($categorie=="accessoire"){$titre_general="Accessories";$sous_titre_general="our accessories";$var1=11;$var2=12;$var3=13;$var4=14;$var5=15;if($categorie_id==""){$categorie_id=11;}}


	if($categorie_id==1 || $categorie_id==6 || $categorie_id==11){$titre="Violins";$classe1="active";}
	if($categorie_id==2 || $categorie_id==7 || $categorie_id==12){$titre="Violas";$classe2="active";}
	if($categorie_id==3 || $categorie_id==8 || $categorie_id==13){$titre="Cellos";$classe3="active";}
	if($categorie_id==4 || $categorie_id==9 || $categorie_id==14){$titre="Double basses";$classe4="active";}
	if($categorie_id==5 || $categorie_id==10 || $categorie_id==15){$titre="Baroque";$classe5="active";}

$myquery = "SELECT * from instrument where 1 AND STATUT=1 AND categorie_id = ".$categorie_id." order by nom";
$instruments = $db->get_results($myquery);

include 'header-en.php';
//echo $myquery;
?>

        <div class="visual visual-static" style="background-image: url('build/images/img21.jpg');">
            <div class="container">
                <div class="visual-header">
                    <h1><?echo $titre_general;?></h1>
                    <h2 class="small-h2">discover <?echo $sous_titre_general;?> </h2>
                </div>
            </div>
        </div>
        <main>
            <div class="content-holder" id="point1" style="background-image: url('build/images/img22.jpg');">
                <div class="container">
                    <nav class="instrument-navigation">
                        <ul>
                            <li class="<?echo $classe1;?>"><a href="liste.php?categorie=<?echo $categorie;?>&categorie_id=<?echo $var1;?>&lang=english" class="btn btn-green"><span>violin</span> <i class="icon-arrow_right"></i></a></li>
                            <li class="<?echo $classe2;?>"><a href="liste.php?categorie=<?echo $categorie;?>&categorie_id=<?echo $var2;?>&lang=english" class="btn btn-green"><span>violas</span> <i class="icon-arrow_right"></i></a></li>
                            <li class="<?echo $classe3;?>"><a href="liste.php?categorie=<?echo $categorie;?>&categorie_id=<?echo $var3;?>&lang=english" class="btn btn-green"><span>cellos</span> <i class="icon-arrow_right"></i></a></li>
                            <li  class="<?echo $classe4;?>"><a href="liste.php?categorie=<?echo $categorie;?>&categorie_id=<?echo $var4;?>&lang=english" class="btn btn-green"><span>double bass</span> <i class="icon-arrow_right"></i></a></li>
                            <li  class="<?echo $classe5;?>"><a href="liste.php?categorie=<?echo $categorie;?>&categorie_id=<?echo $var5;?>&lang=english" class="btn btn-green"><span>baroque</span> <i class="icon-arrow_right"></i></a></li>
                        </ul>
                    </nav>
                    <ul class="instrument-list">
                        <?
						include('imgClass.php');
						if (!empty($instruments))
						{
						foreach ( $instruments as $instrument )
						{
						// LISTER LE CONTENU DU DOSSIER
						$dir = "upload_vignette/".$instrument->id."/";
						$lister_exec = lister($dir);
						$chemin_photo="";
						$chemin_photo="upload_vignette/nophoto.png";
						if (!empty($lister_exec))
						{
							foreach ($lister_exec as $key)
								{
									foreach ($key as $v2)
									{
									//mignature
									$rep="upload_vignette/".$instrument->id."/thumbnail/";
									if (!is_dir($rep)) {mkdir($rep,0755);}
									
									Img::creerMin($dir.$v2,$rep.$v2,$v2,380,570);
				
									$chemin_photo=$rep.$v2;
									}
								}
						}
						// LISTER LE CONTENU DU DOSSIER		
						?>
						<li class="instrument-box">
                            <div class="img-holder">
                                <img  src="<?echo $chemin_photo;?>" alt="image deskription">
                            </div>
                            <div class="descr-holder">
                                <h4><?echo $instrument->nom;?></h4>
                                <p><?echo $instrument->description_courte;?>.</p>
                            </div>
                            <div class="watch-holder">
                                <a href="detail.php?categorie=<?echo $categorie;?>&categorie_id=<?echo $instrument->categorie_id;?>&instrument_id=<?echo $instrument->id;?>&lang=english" >
                                    <span class="add-info">Read more</span>
                                    <span class="btn-watch"><i class='icon-search'></i></span>
                                </a>
                            </div>
                        </li>
                        <?}}?>
                        
                    </ul>
                </div>
            </div>
        </main>

<?php
include 'footer-en.php';
?>
