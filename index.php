<?php


if(isset($_GET['lang']) && $_GET['lang']=='english')
{
    include ('en/index.php');
}
elseif (isset($_GET['lang']) && $_GET['lang']=='chinese') 
{
    include ('zh/index.php');
}
else {
include 'header.php';
?>

        <div class="visual " style="background-image: url('build/images/img1.jpg')">
            <div class="center-holder">
                <div class="container"> <img src="build/images/logo1.png" alt="ATELIER Dalle Carbonare"></div>
            </div>

<!--
            <div class="bloc-info">
                <img src="build/images/icone-infos.png" alt="Infos"/>
                <p>
                    L'atelier sera fermé <br/> du lundi 22 juillet 2019 <br/> au jeudi 22 août 2019.<br/> Bon été à tous !
                </p>
            </div>
-->

            <div class="visual-bottom">
                <div class="container">
                    <div class="header-holder">
                        <a href="#point1" class="scroll-btn"><i class="icon-arrow_down"></i></a>
                        <h1 class="small">depuis plus de 20 ans au service de votre passion</h1>
                    </div>
                </div>
            </div>
        </div>
        <main>
            <div class="content-holder" id="point1" style="background-image: url(build/images/img2.jpg);">
                <div class="container">
                    <section class="visual-large">
                        <div class="text-holder">
                            <h1>Tradition <br>&amp; savoir-faire</h1>
                            <p>Installé dans le cœur historique de Toulouse depuis plus de 20 ans, l’Atelier Dalle Carbonare met à votre disposition des produits et services de qualité au travers d’une équipe de luthiers passionnés et spécialisés qui sauront vous écouter, vous conseiller et prendre soin de vos instruments et archets.
                                <br> L’atelier vous propose un large choix d’instruments mais aussi un panel varié de prestations. </p>
                            <a href="#point2" class="btn btn-brown">En savoir plus <i class="icon-arrow_down"></i></a>
                        </div>
                        <div class="img-holder">
                            <div class="img-box" style="background-image:url('build/images/tradition-savoir-faire-luthier-toulouse.jpg')"></div>
                        </div>
                    </section>
                    <section class="visual-small" id="point2">
                        <div class="text-holder">
                            <h1>focus sur</h1>
                            <h2 class="small-h2 stroke">restauration d'une<br>tête de contrebasse</h2>
                        </div>
                        <div class="img-holder">
                            <div class="img-box" style="background-image:url('build/images/illustration-focus-sur.jpg')"></div>
                        </div>
                        <a href="focus.php" class="btn btn-green">En savoir plus <i class="icon-arrow_right"></i></a>
                    </section>
                    <section class="visual-light">
                        <div class="img-holder">
                            <div class="img-box" style="position:relative; background-image:url('build/images/actualites-luthier-toulouse.jpg')">
                                <a href="https://www.youtube.com/watch?v=tQ2JOxE2eRo&feature=youtu.be&fbclid=IwAR2LiILtvKP96HUhgoNSTad12k8Rf-7bgNsPiL1uCwHgV1nbC3GNN5mdwXI" target="_blank" style="display:block; position:absolute; top:0; right:0; bottom:0; left:0;"></a>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h1>actualités</h1>
                            <h2 class="small-h2">Reportage de France Télévision</h2>
                            <p>Découvrez le reportage de France 3, dans notre atelier, sur les chevalets du Gers qui font vibrer les violons du monde entier !
                                <br/><br/>
                                <a href="https://www.youtube.com/watch?v=tQ2JOxE2eRo&feature=youtu.be&fbclid=IwAR2LiILtvKP96HUhgoNSTad12k8Rf-7bgNsPiL1uCwHgV1nbC3GNN5mdwXI" target="_blank">VOIR LA VIDÉO</a>
                            </p>
                        </div>
                    </section>
                    <section class="thumb-holder">
                        <div class="heading-holder">
                            <h3>Découvrez notre atelier, nos instruments ainsi que nos prestations...</h3>
                            <h2 class="small-h2">ATELIER DALLE CARBONARE</h2>
                        </div>
                        <div class="thumb-wrapper">
                            <a href="atelier-dalle-carbonare-luthier-toulouse.php" class="thumb">
                                <div class="img-holder">
                                    <img src="build/images/decouvrir-atelier-lutherie-toulouse.jpg" alt="image description">
                                </div>
                                <div class="text-holder">
                                    <h4>NOTRE ATELIER</h4>
                                    <p>Toute une équipe passionnée à votre service pour régler, entretenir, restaurer vos instruments et entretenir vos archets.</p>
                                </div>
                            </a>
                            <a href="liste.php?categorie=instrument" class="thumb">
                                <div class="img-holder">
                                    <img src="build/images/nos-instruments-violons-violoncelles-altos-contrebasses.jpg" alt="image description">
                                </div>
                                <div class="text-holder">
                                    <h4>NOS INSTRUMENTS</h4>
                                    <p>A louer ou à vendre, un large choix de violons, altos, violoncelle ou contrebasses à découvrir.</p>
                                </div>
                            </a>
                            <a href="prestations-luthier-toulouse.php" class="thumb">
                                <div class="img-holder">
                                    <img src="build/images/prestations-luthier-toulouse.jpg" alt="image description">
                                </div>
                                <div class="text-holder">
                                    <h4>NOS PRESTATIONS</h4>
                                    <p>De la fabrication d’instruments neuf à l’expertise d’instruments anciens en passant par la location ou la vente d’accessoires l’atelier Dalle Carbonare est au service de la musique et des musiciens.</p>
                                </div>
                            </a>
                        </div>
                    </section>
                    <section class="separeted-block">
                        <div class="heading-holder">
                            <h1>bénéficier de notre expertise</h1>
                        </div>
                        <div class="text-holder">
                            <p>
                                L'atelier vous propose d'expertiser vos instruments et archets pour les faire assurer ou pour une évaluation pour une vente. N'hésitez pas à nous faire parvenir dans un premier temps des photos par mail avant de vous déplacer.
                            </p>
                            <a href="prestations-luthier-toulouse.php" class="btn btn-brown">En savoir plus <i class="icon-arrow_right"></i> </a>
                        </div>
                    </section>
                </div>
            </div>
        </main>

<?php
include 'footer.php';
}
?>