<?php
$current="";
if(isset($_GET['lang']) && $_GET['lang']=='english')
{
    include ('en/detail-instruments.php');
}
elseif (isset($_GET['lang']) && $_GET['lang']=='chinese') 
{
    include ('zh/detail-instruments.php');
}
else {
include 'header.php';
?>

        <div class="visual visual-static" style="background-image: url('build/images/img21.jpg');">
            <div class="container">
                <div class="visual-header">
                    <h1>Nos instruments</h1>
                    <h2 class="small-h2">découvrez nos violons </h2>
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
                    <nav class="instrument-navigation">
                        <ul>
                            <li class="active"><a href="#" class="btn btn-green"><span>violons</span> <i class="icon-arrow_right"></i></a></li>
                            <li><a href="#" class="btn btn-green"><span>altos</span> <i class="icon-arrow_right"></i></a></li>
                            <li><a href="#" class="btn btn-green"><span>violoncelles</span> <i class="icon-arrow_right"></i></a></li>
                            <li><a href="#" class="btn btn-green"><span>contrebasses</span> <i class="icon-arrow_right"></i></a></li>
                            <li><a href="#" class="btn btn-green"><span>Baroque</span> <i class="icon-arrow_right"></i></a></li>
                        </ul>
                    </nav>
                    <section class="visual-brown previw-inside">
                        <div class="img-holder">
                            <div class="img-box" id="tab1">
                                <img src="build/images/img23.jpg" alt="image description" data-zoom-image="build/images/img23x2.jpg" />
                            </div>
                            <div class="img-box" id="tab2">
                                <img src="build/images/img23-2.jpg" alt="image description" data-zoom-image="build/images/img23-2x2.jpg" />
                            </div>
                            <div class="img-box" id="tab3">
                                <img src="build/images/img23-3.jpg" alt="image description" data-zoom-image="build/images/img23-3x2.jpg" />
                            </div>
                            <ul class="preview-list">
                                <li>
                                    <a data-tab="#tab1" class="active"><img src="build/images/preview1.jpg" alt="image description"></a>
                                </li>
                                <li>
                                    <a data-tab="#tab2" ><img src="build/images/preview2.jpg" alt="image description"></a>
                                </li>
                                <li>
                                    <a data-tab="#tab3"><img src="build/images/preview3.jpg" alt="image description"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="text-holder">
                            <h1>violon Victor de Moyer</h1>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.</p>
                            <a href="contacter-atelier-lutherie-toulouse.php" class="btn btn-green">Nous contacter<i class="icon-arrow_right"></i></a>
                            <a href="#" class="btn btn-bordered" onclick="history.back()">Retour</a>
                        </div>
                    </section>
                </div>
            </div>
        </main>

<?php
include 'footer.php';
}
?>