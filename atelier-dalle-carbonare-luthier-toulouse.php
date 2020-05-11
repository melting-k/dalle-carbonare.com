<?php
if(isset($_GET['lang']) && $_GET['lang']=='english')
{
    include ('en/atelier-dalle-carbonare-luthier-toulouse.php');
}
elseif (isset($_GET['lang']) && $_GET['lang']=='chinese') 
{
    include ('zh/atelier-dalle-carbonare-luthier-toulouse.php');
}
else {
include 'header.php';
?>

        <div class="visual visual-static" style="background-image: url('build/images/img19.jpg');">
            <div class="container">
                <div class="visual-header">
                    <h1>L’atelier</h1>
                    <h2 class="small-h2">dalle carbonare</h2>
                </div>
            </div>
        </div>
        <main>
            <div class="content-holder" id="point1" style="background-image: url('build/images/img13.jpg');">
                <div class="container">
                    <section class="visual-large">
                        <div class="text-holder">
                            <h1>NOTRE ATELIER À TOULOUSE</h1>
                            <p>
                                J’ai ouvert mon atelier dans le vieux Toulouse en 1996 après avoir été formé chez Micheal Baumbartner et Jean Jacques Fasnacht en Suisse. Au fil des années l’atelier s’agrandit et aujourd’hui compte 3 luthiers formés dans différentes écoles de lutherie internationales (Québèc, Crémone et Newark) pour servir les musiciens professionnels ou amateurs.
                            </p>
                            <a href="#accelerateurs" class="btn btn-brown">En savoir plus <i class="icon-arrow_down"></i></a>
                        </div>
                        <div class="img-holder">
                            <div class="img-box" style="background-image:url('build/images/presentation-atelier-dalle-carbonare.jpg')"></div>
                        </div>
                    </section>
                    <div class="default-carousel">
                        <div class="owl-carousel">
                            <div class="slide">
                                <div class="img-holder">
                                    <img src="build/images/slide1.jpg" alt="image description">
                                </div>
                                <a class="slide-heading">
                                    <h6>Légende de la photographie</h6>
                                </a>
                            </div>
                            <div class="slide">
                                <div class="img-holder">
                                    <img src="build/images/slide1.jpg" alt="image description">
                                </div>
                                <a class="slide-heading">
                                    <h6>Légende de la photographie</h6>
                                </a>
                            </div>
                            <div class="slide">
                                <div class="img-holder">
                                    <img src="build/images/slide1.jpg" alt="image description">
                                </div>
                                <a class="slide-heading">
                                    <h6>Légende de la photographie</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <section class="thumb-holder" id="accelerateurs">
                        <div class="heading-holder no-line">
                            <h3>Découvrez nos prestations...</h3>
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
                </div>
            </div>
        </main>
<?php
include 'footer.php';
}
?>
