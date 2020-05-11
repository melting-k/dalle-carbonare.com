        <footer id="footer">
            <div class="container">
                <nav class="footer-nav">
                    <a href="#" class="nav-opener"><span> </span></a>
                    <ul class="nav-drop">
                        <li><a href="index.php?lang=english">Home</a></li>
                        <li><a href="atelier-dalle-carbonare-luthier-toulouse.php?lang=english">Workshop</a></li>
                        <li><a href="liste.php?categorie=instrument&lang=english">Instruments</a></li>
                        <li><a href="liste.php?categorie=archet&lang=english">Bows</a></li>
                        <li><a href="liste.php?categorie=accessoire&lang=english">Accessories</a></li>
                        <li><a href="prestations-luthier-toulouse.php?lang=english">Services</a></li>
                        <li><a href="focus.php?lang=english">Focus</a></li>
                        <li><a href="contacter-atelier-lutherie-toulouse.php?lang=english">Contact</a></li>
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
                        <strong class="col-title">Dalle Carbonare's Workshop</strong>
                        <ul class="contact-list">
                            <li> <a href="tel:+330561124646">Tél. +33 (0) 5 61 12 46 46</a></li>
                            <li> <a href="tel:+330561125368">Fax. +33 (0) 5 61 12 53 68</a></li>
                            <li> <a href="tel:+330616120192">Port. +33 (0) 6 16 12 01 92</a></li>
                            <li> <a href="mailto:contact@violon-toulouse.com">contact@violon-toulouse.com</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <div class="text-holder">
                            <p> Opening time :
                                <br> From Tuesday to Friday from 2 pm to 6.30 pm and on Saturday from 10 am to 4 pm.
								<br/><br/>
								7 rue Clémence Isaure<br/>
								31000 Toulouse - France
							</p>
						</div>
                    </div>
                    <div class="col logo-col">
                        <a href="index.php?lang=english"> <img src="build/images/logo-footer.png" alt="ATELIER Della Carbonare"></a>
                    </div>
                </div>
                <div class="copy">
                    <span class="text">Copyright 2016 - <a href="index.php?lang=english">Luthier Dalle Carbonare</a> - <a href="liste.php?categorie=instrument&lang=english">Violin - Double bass</a> - <a href="liste.php?categorie=archet&lang=english">Bows</a> - <a href="liste.php?categorie=accessoire&lang=english">Accessories</a> - Violas - Cellos - <a href="prestations-luthier-toulouse.php?lang=english#prestations4">Restoration</a> - <a href="prestations-luthier-toulouse.php?lang=english#prestations2">Sale</a> - <a href="prestations-luthier-toulouse.php?lang=english#prestations3">Rent</a> in Toulouse</span>
                    <a class="copy-link" href="http://www.melting-k.fr/" target="_blank"><img src="build/images/logo-copy.png" alt="MK"></a>
                </div>
            </div>
        </footer>
    </div>
    <script src="build/js/vendor.js"></script>
    <script src="build/js/app.js"></script>
</body>

</html>