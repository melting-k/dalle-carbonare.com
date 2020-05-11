<?php
if(isset($_GET['lang']) && $_GET['lang']=='english')
{
    include ('en/focus.php');
}
elseif (isset($_GET['lang']) && $_GET['lang']=='chinese') 
{
    include ('zh/focus.php');
}
else {
include 'header.php';
?>

        <div class="visual visual-static" style="background-image: url('build/images/img15.jpg');">
            <div class="container">
                <div class="visual-header">
                    <h1>Focus sur</h1>
                    <h2 class="small-h2">atelier dalle carbonare</h2>
                </div>
            </div>
        </div>
        <main>
            <div class="content-holder" id="point1" style="background-image: url('build/images/img13.jpg');">
                <div class="container">
                    <section class="visual-white btn-abs">
                        <div class="text-holder">
                            <h2 class="small-h2">focus sur</h2>
                            <h1>restauration d'une tête de contrebasse</h1>
                            <p>
                                Nous avons pris en charge la restauration d'une tête de contrebasse cassée, afin de la remettre à neuf. Nous avons donc commencé par recoller la tête, puis nous avons procédé à un ajustage à la craie. Nous avons ensuite effectué le collage de la joue, puis nous avons verni le tout. Cliquez sur le bouton ci-contre pour découvrir les différentes étapes de cette restauration.
                            </p>
                            <a href="build/images/focus-contrebasse/1-tete-cassee.jpg" title="Tête cassée" class="btn btn-green zoombox zgallery1">Galerie photo <i class="icon-arrow_right"></i></a>
                            <a href="build/images/focus-contrebasse/2-recollage-tete.jpg" title="Recollage de la tête" class="zoombox zgallery1"></a>
                            <a href="build/images/focus-contrebasse/3-ajustage-craie.jpg" title="Ajustage à la craie" class="zoombox zgallery1"></a>
                            <a href="build/images/focus-contrebasse/4-collage-joue.jpg" title="Collage de la joue" class="zoombox zgallery1"></a>
                            <a href="build/images/focus-contrebasse/5-avant-vernissage.jpg" title="Avant vernissage" class="zoombox zgallery1"></a>
                            <a href="build/images/focus-contrebasse/6-apres-vernissage.jpg" title="Après vernissage" class="zoombox zgallery1"></a>
                            <a href="build/images/focus-contrebasse/7-resultat.jpg" title="Résultat final" class="zoombox zgallery1"></a>
                        </div>
                        <div class="img-holder">
                            <div class="img-box" style="background-image:url('build/images/focus-sur-restauration.jpg')"></div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
        <!-- LIGHTBOX -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="build/js/zoombox/zoombox.js"></script>
		<link href="build/js/zoombox/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript">
			jQuery(function($){
				$('a.zoombox').zoombox();
			});
        </script>
<?php
include 'footer.php';
}
?>