<?php
if(isset($_GET['lang']) && $_GET['lang']=='english')
{
    include ('en/contacter-atelier-lutherie-toulouse.php');
}
elseif (isset($_GET['lang']) && $_GET['lang']=='chinese') 
{
    include ('zh/contacter-atelier-lutherie-toulouse.php');
}
else {
include 'header.php';
?>

        <div class="visual visual-static" style="background-image: url('build/images/img_c_21.jpg');">
            <div class="container">
                <div class="visual-header">
                    <h1>Nous contacter</h1>
                    <h2 class="small-h2">ATELIER DALLE CARBONARE</h2>
                </div>
            </div>
        </div>
        <main>
            <div class="content-holder" id="point1" style="background-image: url(build/images/img2.jpg);">
                <div class="container">
                    <section class="contact-block">
                        <div class="text-holder">
                            <h1>Contacter <br>notre atelier</h1>
                            <p>
								Pour toute demande de renseignements complémentaires ou de devis, vous pouvez contacter L’Atelier Dalle Carbonare par téléphone et mail ou en remplissant le formulaire de contact ci-dessous.<br/>
								Ouverture de L’Atelier du Mardi au Vendredi de 14h à 18h30 et le samedi de 10h à 16h.
							</p>
                            <a href="#formulare" class="btn scroll-btn btn-bordered btn-bordered-cream">Formulaire <i class="icon-arrow_down"></i></a>
                        </div>
                        <div class="contact-info">
                            <span>Luthier Dalle Carbonare</span>
                            <ul>
                                <li> <a href="tel:+330561124646">+33 (0) 5 61 12 46 46</a></li>
                                <li> <a href="tel:+330561125368">+33 (0) 5 61 12 53 68</a></li>
                                <li> <a href="tel:+330616120192">+33 (0) 6 16 12 01 92</a></li>
                                <li> <a href="mailto:&#099;&#111;&#110;&#116;&#097;&#099;&#116;&#064;&#118;&#105;&#111;&#108;&#111;&#110;&#045;&#116;&#111;&#117;&#108;&#111;&#117;&#115;&#101;&#046;&#099;&#111;&#109;">&#099;&#111;&#110;&#116;&#097;&#099;&#116;&#064;&#118;&#105;&#111;&#108;&#111;&#110;&#045;&#116;&#111;&#117;&#108;&#111;&#117;&#115;&#101;&#046;&#099;&#111;&#109;</a>
                                </li>
                            </ul>
                            <p>7 rue Clémence Isaure
                                <br>3100 Toulouse - France
                            </p>
                        </div>
                    </section>
                    <section id="formulare" class="contact-form">
                        <form action="mail.php" method="post" enctype="multipart/form-data">
                            <div class="contact-head-form">
                                <label>formulaire</label>
                                <label class="small">de contact</label>
                            </div>
                            <div class="contact-body-form">
								 <?php
								if (isset($_GET['message']) && $_GET['message']=="sent")
									{
								?>
									<p style="text-align:center; width:100%;">
										Merci pour votre message, celui-ci vient de nous être transmis.
										<br/><br/>
										Nous allons en prendre connaissance et nous vous apporterons une réponse rapidement.
									</p>
								<?php
									}
									else
									{
								?>
                                <div class="contact-left-side">
                                    <div class="form-row">
                                        <input type="text" name="Nom" placeholder="Nom, Prénom :">
                                    </div>
                                    <div class="form-row">
                                        <input type="text" name="Telephone" placeholder="Téléphone :"/>
                                    </div>
                                    <div class="form-row">
                                        <input type="text" name="Email" placeholder="Mail :"/>
                                    </div>
                                    <div class="form-row">
                                        <input type="text" name="Adresse" placeholder="Adresse :">
										<input type="text" name="host" id="host" value="OK" style="display:none;" tabindex="45"/>
                                    </div>
                                    <div class="form-row select-style">
                                        <label class="select-arrow" for="select">
                                            <i class="icon-arrow_down"></i>
                                        </label>
                                        <div class="formulare-select">
                                            <select name="Instrument" id="select">
                                                <option value="Non spécifié">Instrument</option>
                                                <option value="Violon">Violon</option>
                                                <option value="Violoncelle">Violoncelle</option>
                                                <option value="Alto">Alto</option>
                                                <option value="Contrebasse">Contrebasse</option>
												<option value="Baroque">Baroque</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="font12">
                                        Joindre des photos pour faire expertiser votre instrument :<br/>
                                        <label for="pj" class="bt-upload-photo">PHOTO 1</label>
                                        <input type="file" name="pj" id="pj" style="display:none;"/>
                                        <label for="pj2" class="bt-upload-photo">PHOTO 2</label>
                                        <input type="file" name="pj2" id="pj2" style="display:none;"/>
                                        <label for="pj3" class="bt-upload-photo">PHOTO 3</label>
                                        <input type="file" name="pj3" id="pj3" style="display:none;"/>
                                        Formats pris en charge : .jpg / .png
                                    </div>
                                </div>
                                <div class="contact-right-side">
                                    <div class="form-row select-style">
                                        <label class="select-arrow" for="select">
                                            <i class="icon-arrow_down"></i>
                                        </label>
                                        <div class="formulare-select">
                                            <select name="Demande" id="select2">
                                                <option value="Non spécifié">Demande</option>
                                                <option value="Achat">Achat</option>
                                                <option value="Location">Location</option>
                                                <option value="Entretien">Entretien</option>
                                                <option value="Restauration">Restauration</option>
												<option value="Autre">Autre (précisez dans votre message)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row message-row">
                                        <textarea rows="6" cols="40" name="Message" placeholder="Message"></textarea>
                                        <a href="#" onclick="$(this).closest('form').submit()" class="btn btn-green">
											Envoyer <i class="icon-arrow_right"></i>
										</a>
                                    </div>
                                </div>
								<?php
									}
								?>
                            </div>
							
                        </form>
                    </section>
                </div>
            </div>
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38871.330019340385!2d1.4345052191550207!3d43.603857900235106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebb62e733fb27%3A0x56cec6e5597d60b2!2s7+Rue+Cl%C3%A9mence+Isaure%2C+31000+Toulouse!5e0!3m2!1sfr!2sfr!4v1530516374242"frameborder="0" style="border:0; display:block; width:100%;" id="map_canvas" allowfullscreen></iframe>
            </div>
        </main>
        
<?php
include 'footer.php';
}
?>