<?php
include 'header-en.php';
?>

        <div class="visual visual-static" style="background-image: url('build/images/img_c_21.jpg');">
            <div class="container">
                <div class="visual-header">
                    <h1>Contact us</h1>
                    <h2 class="small-h2">DALLE CARBONARE WORKSHOP</h2>
                </div>
            </div>
        </div>
        <main>
            <div class="content-holder" id="point1" style="background-image: url(build/images/img2.jpg);">
                <div class="container">
                    <section class="contact-block">
                        <div class="text-holder">
                            <h1>Contact <br/>our workshop</h1>
                            <p>
								For any complementary request, information, or quotation, you may contact the workshop Dalle Carbonare by phone or by email using the contact form below.<br/>
                                Opening hours from Tuesday to Friday from 2.00pm to 6.30pm and by appointment Saturdays from 10.00am to 4.00pm.<br/>
                                Languages spoken at the workshop : French, English, German, Spanish.
							</p>
                            <a href="#formulare" class="btn scroll-btn btn-bordered btn-bordered-cream">Contact form <i class="icon-arrow_down"></i></a>
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
                                <label>Contact</label>
                                <label class="small">form</label>
                            </div>
                            <div class="contact-body-form">
								 <?php
								if (isset($_GET['message']) && $_GET['message']=="sent")
									{
								?>
									<p style="text-align:center; width:100%;">
										Thank you for your message.
										<br/><br/>
										We will respond you as quickly as possible.
									</p>
								<?php
									}
									else
									{
								?>
                                <div class="contact-left-side">
                                    <div class="form-row">
                                        <input type="text" name="Nom" placeholder="Name, Last name :">
                                    </div>
                                    <div class="form-row">
                                        <input type="text" name="Telephone" placeholder="Phone :"/>
                                    </div>
                                    <div class="form-row">
                                        <input type="text" name="Email" placeholder="Mail :"/>
                                    </div>
                                    <div class="form-row">
                                        <input type="text" name="Adresse" placeholder="Address :">
										<input type="text" name="host" id="host" value="OK" style="display:none;" tabindex="45"/>
                                    </div>
                                    <div class="form-row select-style">
                                        <label class="select-arrow" for="select">
                                            <i class="icon-arrow_down"></i>
                                        </label>
                                        <div class="formulare-select">
                                            <select name="Instrument" id="select">
                                                <option value="Non spécifié">Instrument</option>
                                                <option value="Violon">Violin</option>
                                                <option value="Violoncelle">Cello</option>
                                                <option value="Alto">Viola</option>
                                                <option value="Contrebasse">Double bass</option>
												<option value="Baroque">Baroque</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="font12">
                                        <label for="pj" id="bt-upload-photo">Attach a photo to make an appraisal of your instrument</label>
                                        <input type="file" name="pj" id="pj" style="display:none;"/>
                                        Supported formats: .jpg / .png
                                    </div>
                                </div>
                                <div class="contact-right-side">
                                    <div class="form-row select-style">
                                        <label class="select-arrow" for="select">
                                            <i class="icon-arrow_down"></i>
                                        </label>
                                        <div class="formulare-select">
                                            <select name="Demande" id="select2">
                                                <option value="Non spécifié">Request</option>
                                                <option value="Achat">Buy</option>
                                                <option value="Location">Rent</option>
                                                <option value="Entretien">Settings</option>
                                                <option value="Restauration">Restoration</option>
												<option value="Autre">Other (specify in message)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row message-row">
                                        <textarea rows="6" cols="40" name="Message" placeholder="Message"></textarea>
                                        <a href="#" onclick="$(this).closest('form').submit()" class="btn btn-green">
											Send <i class="icon-arrow_right"></i>
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
include 'footer-en.php';
?>