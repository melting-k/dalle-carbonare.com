        <footer id="footer">
            <div class="container">
                <nav class="footer-nav">
                    <a href="#" class="nav-opener"><span> </span></a>
                    <ul class="nav-drop">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="atelier-dalle-carbonare-luthier-toulouse.php">Atelier</a></li>
                        <li><a href="liste.php?categorie=instrument">Instruments</a></li>
                        <li><a href="liste.php?categorie=archet">Archets</a></li>
                        <li><a href="liste.php?categorie=accessoire">Accessoires</a></li>
                        <li><a href="prestations-luthier-toulouse.php">Prestations</a></li>
                        <li><a href="focus.php">Focus</a></li>
                        <li><a href="contacter-atelier-lutherie-toulouse.php">Contact</a></li>
                    </ul>
                    <a href="https://www.facebook.com/atelierdallecarbonare/" target="_blank" class="social">facebook</a>
                </nav>
                <ul class="lang-list">
                    <li <?php if($lang=="french"){echo "class='active'";}?>><a href="<?php echo $url;?>">fr</a></li>
                    <li <?php if($lang=="english"){echo "class='active'";}?>><a href="<?php echo $url;?>?lang=english">en</a></li>
                    <li <?php if($lang=="chinese"){echo "class='active'";}?>><a href="<?php echo $url;?>?lang=chinese">中文</a></li>
                </ul>
                <div class="footer-columns">
                    <div class="col">
                        <strong class="col-title">Atelier Dalle Carbonare</strong>
                        <ul class="contact-list">
                            <li> <a href="tel:+330561124646">Tél. +33 (0) 5 61 12 46 46</a></li>
                            <li> <a href="tel:+330561125368">Fax. +33 (0) 5 61 12 53 68</a></li>
                            <li> <a href="tel:+330616120192">Port. +33 (0) 6 16 12 01 92</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <div class="text-holder">
                            <p> Ouverture de l’Atelier :
                                <br> du Mardi au Vendredi de 14h00 à 18h30 et le samedi de 10h à 16h.
								<br/><br/>
								7 rue Clémence Isaure<br/>
								31000 Toulouse - France
							</p>
						</div>
                    </div>
                    <div class="col logo-col">
                        <a href="index.php"> <img src="build/images/logo-footer.png" alt="ATELIER Della Carbonare"></a>
                    </div>
                </div>
                <div class="copy">
                    <span class="text">Copyright 2016 - <a href="index.php">Luthier Dalle Carbonare</a> - <a href="liste.php?categorie=instrument">Violon - Contrebasse</a> - <a href="liste.php?categorie=archet">Archets</a> - <a href="liste.php?categorie=accessoire">Accessoires</a> - Altos - Violoncelles - <a href="prestations-luthier-toulouse.php#prestations4">Restauration</a> - <a href="prestations-luthier-toulouse.php#prestations2">Vente</a> - <a href="prestations-luthier-toulouse.php#prestations3">Location</a> in Toulouse</span>
                    <a class="copy-link" href="http://www.melting-k.fr/" target="_blank"><img src="build/images/logo-copy.png" alt="MK"></a>
                </div>
            </div>
        </footer>
    </div>
    <script src="build/js/vendor.js"></script>
    <script src="build/js/app.js"></script>
</body>

</html>