<?php
include 'header-zh.php';
?>

        <div class="visual visual-static" style="background-image: url('build/images/img_c_21.jpg');">
            <div class="container">
                <div class="visual-header">
                    <h1>联系我们</h1>
                    <h2 class="small-h2">DALLE CARBONARE 工作室</h2>
                </div>
            </div>
        </div>
        <main>
            <div class="content-holder" id="point1" style="background-image: url(build/images/img2.jpg);">
                <div class="container">
                    <section class="contact-block">
                        <div class="text-holder">
                            <h1>联系我们的工作室</h1>
                            <p>
								如需获取更多信息或询价，您可以通过电话或电子邮件与我们的工作室取得联系，或者可以填写下面的表格。<br/>
                                我们的营业时间是：周二到周五14 :00—18 :30， 周六10:00—16:00<br/>
							</p>
                            <a href="#formulare" class="btn scroll-btn btn-bordered btn-bordered-cream">表格 <i class="icon-arrow_down"></i></a>
                        </div>
                        <div class="contact-info">
                            <span>制琴师 Dalle Carbonare</span>
                            <ul>
                                <li> <a href="tel:+330561124646">电话 +33 (0) 5 61 12 46 46</a></li>
                                <li> <a href="tel:+330561125368">传真 +33 (0) 5 61 12 53 68</a></li>
                                <li> <a href="tel:+330616120192">手机 +33 (0) 6 16 12 01 92</a></li>
                                <!-- <li> 电子邮件 <a href="mailto:&#099;&#111;&#110;&#116;&#097;&#099;&#116;&#064;&#118;&#105;&#111;&#108;&#111;&#110;&#045;&#116;&#111;&#117;&#108;&#111;&#117;&#115;&#101;&#046;&#099;&#111;&#109;">&#099;&#111;&#110;&#116;&#097;&#099;&#116;&#064;&#118;&#105;&#111;&#108;&#111;&#110;&#045;&#116;&#111;&#117;&#108;&#111;&#117;&#115;&#101;&#046;&#099;&#111;&#109;</a>
                                </li> -->
                            </ul>
                            <p>地址 7 rue Clémence Isaure
                                <br>3100 Toulouse - France
                            </p>
                        </div>
                    </section>
                    <section id="formulare" class="contact-form">
                        <form action="mail.php" method="post" enctype="multipart/form-data">
                            <div class="contact-head-form">
                                <label>联系人表格</label>
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
                                        <input type="text" name="Nom" placeholder="姓，名 :">
                                    </div>
                                    <div class="form-row">
                                        <input type="text" name="Telephone" placeholder="电话 :"/>
                                    </div>
                                    <div class="form-row">
                                        <input type="text" name="Email" placeholder="电子邮件 :"/>
                                    </div>
                                    <div class="form-row">
                                        <input type="text" name="Adresse" placeholder="地址 :">
										<input type="text" name="host" id="host" value="OK" style="display:none;" tabindex="45"/>
                                    </div>
                                    <div class="form-row select-style">
                                        <label class="select-arrow" for="select">
                                            <i class="icon-arrow_down"></i>
                                        </label>
                                        <div class="formulare-select">
                                            <select name="Instrument" id="select">
                                                <option value="Non spécifié">提琴种类</option>
                                                <option value="Violon">小提琴</option>
                                                <option value="Violoncelle">大提琴</option>
                                                <option value="Alto">中提琴</option>
                                                <option value="Contrebasse">低音提琴</option>
												<option value="Baroque">巴洛克提琴</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="font12">
                                        <label for="pj" id="bt-upload-photo">附加照片以對儀器進行評估</label>
                                        <input type="file" name="pj" id="pj" style="display:none;"/>
                                        支持格式：JPG / PNG
                                    </div>
                                </div>
                                <div class="contact-right-side">
                                    <div class="form-row select-style">
                                        <label class="select-arrow" for="select">
                                            <i class="icon-arrow_down"></i>
                                        </label>
                                        <div class="formulare-select">
                                            <select name="Demande" id="select2">
                                                <option value="Non spécifié">需求</option>
                                                <option value="Achat">购买</option>
                                                <option value="Location">租赁</option>
                                                <option value="Entretien">保养</option>
                                                <option value="Restauration">修复</option>
												<option value="Autre">其他（请注明）</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row message-row">
                                        <textarea rows="6" cols="40" name="Message" placeholder="信息"></textarea>
                                        <a href="#" onclick="$(this).closest('form').submit()" class="btn btn-green">
											发送 <i class="icon-arrow_right"></i>
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
include 'footer-zh.php';
?>