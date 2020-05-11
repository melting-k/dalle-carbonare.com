<?php
if(isset($_GET['lang']) && $_GET['lang']=='english')
{
    include ('en/archets.php');
}
elseif (isset($_GET['lang']) && $_GET['lang']=='chinese') 
{
    include ('zh/archets.php');
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
                    <ul class="instrument-list">
                        <li class="instrument-box">
                            <div class="img-holder">
                                <img src="build/images/img24.jpg" alt="image deskription">
                            </div>
                            <div class="descr-holder">
                                <h4>Victor de Moyer</h4>
                                <p>Fait par Victor de Moyer à Gand ( Belgique ) en 1928.</p>
                            </div>
                            <div class="watch-holder">
                                <a href="#">
                                    <span class="add-info">En savoir plus</span>
                                    <span class="btn-watch"><i class='icon-search'></i></span>
                                </a>
                            </div>
                        </li>
                        <li class="instrument-box">
                            <div class="img-holder">
                                <img src="build/images/img25.jpg" alt="image deskription">
                            </div>
                            <div class="descr-holder">
                                <h4>Nicolas Vuillaume 1860</h4>
                                <p>Fait vers 1860 à Mirecourt</p>
                            </div>
                            <div class="watch-holder">
                                <a href="#">
                                    <span class="add-info">En savoir plus</span>
                                    <span class="btn-watch"><i class='icon-search'></i></span>
                                </a>
                            </div>
                        </li>
                        <li class="instrument-box">
                            <div class="img-holder">
                                <img src="build/images/img24.jpg" alt="image deskription">
                            </div>
                            <div class="descr-holder">
                                <h4>Victor de Moyer</h4>
                                <p>Fait par Victor de Moyer à Gand ( Belgique ) en 1928.</p>
                            </div>
                            <div class="watch-holder">
                                <a href="#">
                                    <span class="add-info">En savoir plus</span>
                                    <span class="btn-watch"><i class='icon-search'></i></span>
                                </a>
                            </div>
                        </li>
                        <li class="instrument-box">
                            <div class="img-holder">
                                <img src="build/images/img25.jpg" alt="image deskription">
                            </div>
                            <div class="descr-holder">
                                <h4>Nicolas Vuillaume 1860</h4>
                                <p>Fait vers 1860 à Mirecourt</p>
                            </div>
                            <div class="watch-holder">
                                <a href="#">
                                    <span class="add-info">En savoir plus</span>
                                    <span class="btn-watch"><i class='icon-search'></i></span>
                                </a>
                            </div>
                        </li>
                        <li class="instrument-box">
                            <div class="img-holder">
                                <img src="build/images/img24.jpg" alt="image deskription">
                            </div>
                            <div class="descr-holder">
                                <h4>Victor de Moyer</h4>
                                <p>Fait par Victor de Moyer à Gand ( Belgique ) en 1928.</p>
                            </div>
                            <div class="watch-holder">
                                <a href="#">
                                    <span class="add-info">En savoir plus</span>
                                    <span class="btn-watch"><i class='icon-search'></i></span>
                                </a>
                            </div>
                        </li>
                        <li class="instrument-box">
                            <div class="img-holder">
                                <img src="build/images/img25.jpg" alt="image deskription">
                            </div>
                            <div class="descr-holder">
                                <h4>Nicolas Vuillaume 1860</h4>
                                <p>Fait vers 1860 à Mirecourt</p>
                            </div>
                            <div class="watch-holder">
                                <a href="#">
                                    <span class="add-info">En savoir plus</span>
                                    <span class="btn-watch"><i class='icon-search'></i></span>
                                </a>
                            </div>
                        </li>
                        <li class="instrument-box">
                            <div class="img-holder">
                                <img src="build/images/img24.jpg" alt="image deskription">
                            </div>
                            <div class="descr-holder">
                                <h4>Victor de Moyer</h4>
                                <p>Fait par Victor de Moyer à Gand ( Belgique ) en 1928.</p>
                            </div>
                            <div class="watch-holder">
                                <a href="#">
                                    <span class="add-info">En savoir plus</span>
                                    <span class="btn-watch"><i class='icon-search'></i></span>
                                </a>
                            </div>
                        </li>
                        <li class="instrument-box">
                            <div class="img-holder">
                                <img src="build/images/img25.jpg" alt="image deskription">
                            </div>
                            <div class="descr-holder">
                                <h4>Nicolas Vuillaume 1860</h4>
                                <p>Fait vers 1860 à Mirecourt</p>
                            </div>
                            <div class="watch-holder">
                                <a href="#">
                                    <span class="add-info">En savoir plus</span>
                                    <span class="btn-watch"><i class='icon-search'></i></span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </main>

<?php
include 'footer.php';
}
?>