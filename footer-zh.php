        <footer id="footer">
            <div class="container">
                <nav class="footer-nav">
                    <a href="#" class="nav-opener"><span> </span></a>
                    <ul class="nav-drop">
                        <li><a href="index.php?lang=chinese">主页</a></li>
                        <li><a href="atelier-dalle-carbonare-luthier-toulouse.php?lang=chinese">工作室</a></li>
                        <li><a href="liste.php?categorie=instrument&lang=chinese">提琴 (FR)</a></li>
                        <li><a href="liste.php?categorie=archet&lang=chinese">琴弓 (FR)</a></li>
                        <li><a href="liste.php?categorie=accessoire&lang=chinese">配件 (FR)</a></li>
                        <li><a href="prestations-luthier-toulouse.php?lang=chinese">服務</a></li>
                        <li><a href="focus.php?lang=chinese">聚焦 (FR)</a></li>
                        <li><a href="contacter-atelier-lutherie-toulouse.php?lang=chinese">联系我们</a></li>
                    </ul>
                    <a href="https://www.facebook.com/atelierdallecarbonare/" target="_blank" class="social">脸书</a>
                </nav>
                <ul class="lang-list">
                    <li <?php if($lang=="french"){echo "class='active'";}?>><a href="<?php echo $url;?>">fr</a></li>
                    <li <?php if($lang=="english"){echo "class='active'";}?>><a href="<?php echo $url;?>?lang=english">en</a></li>
                    <li <?php if($lang=="chinese"){echo "class='active'";}?>><a href="<?php echo $url;?>?lang=chinese">中文</a></li>
                </ul>
                <div class="footer-columns">
                    <div class="col">
                        <strong class="col-title">Dalle Carbonare工作室</strong>
                        <ul class="contact-list">
                            <li> <a href="tel:+330561124646">电话 +33 (0) 5 61 12 46 46</a></li>
                            <li> <a href="tel:+330561125368">传真 +33 (0) 5 61 12 53 68</a></li>
                            <li> <a href="tel:+330616120192">手机 +33 (0) 6 16 12 01 92</a></li>
                            <li> 电子邮件 <a href="mailto:contact@violon-toulouse.com">contact@violon-toulouse.com</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <div class="text-holder">
                            <p> 营业时间：<br/>
                                周二到周五14 :00—18 :30<br/>
                                周六10 :00—16 :00，需提前预约
                                <br/><br/>
								地址：<br/>
								7 rue Clémence Isaure<br/>
								31000 Toulouse - France
							</p>
						</div>
                    </div>
                    <div class="col logo-col">
                        <a href="index.php?lang=chinese"> <img src="build/images/logo-footer.png" alt="ATELIER Della Carbonare"></a>
                    </div>
                </div>
                <div class="copy">
                    <span class="text">版权2016 - <a href="index.php?lang=chinese">制琴师 Dalle Carbonare</a> - <a href="liste.php?categorie=instrument&lang=chinese">小提琴 - 低音提琴 </a> - <a href="liste.php?categorie=archet&lang=chinese">琴弓</a> - <a href="liste.php?categorie=accessoire&lang=chinese">配件</a> - 中提琴 - 大提琴  - <a href="prestations-luthier-toulouse.php?lang=chinese#prestations4">修复</a> - <a href="prestations-luthier-toulouse.php?lang=chinese#prestations2">零售</a> - <a href="prestations-luthier-toulouse.php?lang=chinese#prestations3">租赁</a> Toulouse</span>
                    <a class="copy-link" href="http://www.melting-k.fr/" target="_blank"><img src="build/images/logo-copy.png" alt="MK"></a>
                </div>
            </div>
        </footer>
    </div>
    <script src="build/js/vendor.js"></script>
    <script src="build/js/app.js"></script>
</body>

</html>