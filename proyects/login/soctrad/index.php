
<!DOCTYPE html>
<html>
<head>

	<title>DAKt</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="apple-touch-icon" href="wifi.png">
	<script type="text/javascript" src="js.js"></script>
	<meta charset="utf-8" >


	
</head>
<body >
	<div  class="loading" id="lo">
		<img class="loading_img" src="vOxo92o.gif">
	</div>

	<div class="_back" >


		<!-- <video autoplay="" loop=""  muted=""><source src="back.mp4" type="video/mp4"></video> -->

			<nav class="nav">

				<p class="title">ONakingmind</p>
				<div class="Date">
					<p style="color:darkcyan;font-family:Minecraft;">
						<?php
						echo '<p>Pedido procesado a las ';
						echo date('H:i, jS F');
						echo '</p>';
						?>
						<!-- <script type="text/javascript"> 
							var d = new Date();
							document.write('Fecha:  '+d.getDate(),  '  Semana:  '+d.getDay(),  '  Mes:  '+d.getMonth(),   '  Año:   '+d.getFullYear(),  
								'  Hora:  '+d.getHours(), '  Minutos:  '+d.getMinutes(),' Segundos:   '+d.getSeconds() );
							</script> -->
						</p>
					</div>

				</nav>
				
				<section >
					<div class="section_1">
						<div class="table">
							<ul class="chat">
								<p >Добро пожаловать в инструменты, необходимые для получения анонимной информации от разных пользователей, не злоупотребляйте с первого раза;)</p>
								<!-- <p >01101100 01100001 00100000 01100101 01100100 01110101 01100011 01100001 01100011 01101001 01101111 01101110 00100000 01100101 01110011 00100000 01100101 01101100 00100000 01100011 01100001 01101101 01101001 01101110 01101111 00100000 01100001 00100000 01101100 01100001 00100000 01110000 01100001 01111010</p> -->
								<button id="cal" onclick="operacion()">Calculator Alert</button>

								
							</ul>
						</div>

						<!-- div con boton -->
					<!-- 	<div class="ident">
							<div class="ident_div1"><img src="wifi.png"> </div>
							<div class="ident_div2"><button onclick="overflow()">Fake IDE</button></div>

						</div> -->

					</div>
					<!-- section root overflow -->



					<!-- section overflo -->
					<div class="back" id="t" >
						<section class="overflow" > 

							<nav>FAKE ID</nav>
							<div class="overflow_div1">
								<div  id="div_img1"></div>
								<ul class="ul_overflow" >
									<li>
										<?php

										$nombres = array("Pepe", "Carlos", "Jesús", "Lola", "Rosa", "Maria" ,"Aaliyah","Abbey","Abbie","Abigail","Ada","Adalyn",
											"Adelaide","Adele","Adeline","Adrianna","Agatha","Agnes","Aisha","Alease",
											"Alene","Alesha","Alex","Alexandra","Alexia","Alice","Aline","Alisha","Alison","Amanda","Amber","Amy","Andi","Angelina",
											"Angie","Anna","Annabelle","Anne","April","Arlene","Ashley","Audrey","Barbra","Beatrice","Bernadette","Bertha","Beth",
											"Betty","Beverly","Blanche","Brenda","Bridget","Britney","Brooklynn","Candice","Carlie","Caroline","Casey","Catherine",
											"Chantal","Charlotte","Chelsea","Cher","Chloe","Christal","Aaron ","Abel ","Abraham ","Ace  ","Adam  ","Alan  ","Albert"
											,"Alexander ","Alfred ","Allen ","Alton ","Ambrose ","Anderson ","Andrew ","Andy ","Angus ","Anthony "); 

										$apellidos1 = array("Martin", "Lopez", "Salas", "Mateo", "Abas", "De Diego","Abrahams ","Abramson ","Adamson ","Ainsworth ","Albertson","Aniston","Battle","Beckett","Beckham","Black","Bramson","Brown","Bullock","Burrell","Bush","Clinton","Cocks","Cook","Cox","Cranston","Derricks","Disney");

										$apellidos2 = array("Quesada", "Alcala", "Marín", "Suarez", "Cobos","Rios","Kendall","Lennon","Mathews","Mayer","Michaelson","Miller","Morrison","O’Sullivan","Pemberton","Perry","Sheeran","Simpson","Smith","Stone","Taylor","Walsh","Washington","Williams","Willis","Wilson");

										$randn = array_rand($nombres);
										$radn2 = array_rand($apellidos1);
										$rand3 = array_rand($apellidos2);
										echo "Nombre <b> ". $nombres[$randn] 
										." ". $apellidos1[$radn2] 
										."  ". $apellidos2[$rand3];
										?>
									</b> </li>

									<!-- Generador de Localizacion -->
									<li>
										localitation
										<DIV id="IDnumber">here</DIV>
									</li>


									

									<!-- generador de codigo aleatorio -->
									<li>Codigo Aleatorio <b>
										 <?php 
										// function generarCodigo($longitud) {
										// 	$key = '';
										// 	$pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
										// 	$max = strlen($pattern)-1;
											
										// 	for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
										// 	return $key;
										// } 
										// echo generarCodigo(6);
										  ?>
									</b></li>


									<!-- <li>numero detelefono</li> -->

									<!-- Generador de genero -->

									<li>Genero:<b>
										<script>

											sec = Math.floor((Math.random() * 2) + 1);
											if (sec==1) {
												document.write("female")
											}else {
												document.write("Male")
											}

										</script>

									</b></li>

									<!-- Gneradpr  de Edad -->
									<li style="display: flex;">
										<b><DIV id="IDinfo"> Edad </DIV></b>
									</li>


									<li>Seguro social estadounidense (SSN) de FNG <b> 

										<?php
										require('fngssn.class.php');
													// Instantiate the class
										$fngssn = new fngssn();
													// Generate a SSN for California
										echo $fngssn->generateSSN('CA');
										echo '   ';
													// Validate a SSN
													// echo $fngssn->validateSSN('421-61-1998');
										?>
									</b></li>
								</ul>
							</div>

							<!-- boton para generar datos -->

							<!-- <div class="overflow_div2">
								<button class="btn_2">Generar datos</button>
							</div> -->


							<strong id="close"><button class="btn" onclick="overflow()">X</button></strong>
						</section>
					</div>

					<!-- modal -->

					<section  class="modal_1" id="modal" >
						

						<!-- class="animation2" animacion de subida y bajada -->
						

						<div class="container_modal" >
							<p style="color:green; font-size: 15px; padding: 4px;">Links</p>
							<li><a target="_blank" href="https://gsuite.tools/es/ip-location">Ip lozalizer from Camera all Tools</a></li>
							<li><a target="_blank" href="https://herramientas-online.com/generador-visa-mastercard-bancos-reales.php">Generador Visa Mastercard</a></li>

							<li><a target="_blank" href="http://www.opentopia.com/">cam live citys</a></li>
							<li><a target="_blank" href="https://namso.ccgen.co/">Create Credit Cardt</a></li>
							<li><a target="_blank" href="http://www.insecam.org/">Ips cams Wacht</a></li>
							<li><a target="_blank" href="https://www.subnet-calculator.com/">Calcult Subnet Mascaret sub red</a></li>
							<li><a target="_blank" href="https://www.hackthissite.org/">Skills of Practice for ahcking</a></li>
							<li><a target="_blank" href="https://www.gameofhacks.com/">Game of hacks</a></li>
							<li><a target="_blank" href="https://hack.me/">hackme </a></li>
							<li><a target="_blank" href="https://www.darkhackerworld.com/2020/08/hacking-websites.html">List of games of hack</a></li>
							<li><a target="_blank" href="https://es.fakenamegenerator.com/">Fake name and ident</a></li>
							<li><a target="_blank" href="https://generadordni.com/">https://generadordni.com/</a></li>
							<li><a target="_blank" href="https://www.phonenumbertrack.com/">Number localitation</a></li>
							<li><a target="_blank" href="https://numeroesim.com/phone-numbers/">Numvirtual simp android</a></li>
							<li><a target="_blank" href="https://www.spoofbox.com/es/telefono-virtual">Vitual pc numvber</a></li>
							<li><a target="_blank" href="https://10minutemail.net/?lang=es">correo de 10minutos</a></li>

							<li><a target="_blank" href="http://stylesuxx.github.io/steganography/">Encode msj in image </a></li>
							<li><a target="_blank" href="https://recibir-sms.com/">https://recibir-sms.com/</a></li>
							<li><a target="_blank" href="https://archive.org/details/movies">Archive old of internet</a></li>
							<li><a target="_blank" href="https://www.youtube.com/watch?v=CEbz5i4-Tuo">calla tristeza- miroslava</a></li>
							<li><a target="_blank" href="https://archive.org/details/video_202108_202108">secret archive sub</a></li>
							<li><a target="_blank" href="https://thatsthefinger.com/">https://thatsthefinger.com/</a></li>
							<li><a target="_blank" href="https://hacker.mforos.com/936287/7950249-busco-equipo-de-hacker/?pag=2#99409664">Foro con  MAILS FOR PRACTICE</a></li>
							<li><a target="_blank" href="https://docs.microsoft.com/es-es/cpp/windows/walkthrough-creating-windows-desktop-applications-cpp?view=msvc-160">WEB C++</a></li>
							<li><a target="_blank" href="https://www.fakepersongenerator.com">Fake person generador</a></li>
							<li><a target="_blank" href="https://www.informeconfidencial.mx/nacional/11-casos-impunes-de-corrupcion-en-mexico/">corruption</a></li>
							<li><a target="_blank" href="www.elftown.com/_random faces">similar to mi fried Face false</a></li>
							<li><a target="_blank" href="https://names.igopaygo.com/es/personas/la-identidad-falsa">Fake PEOPLES WHIT ALL DATE AND LIFE</a></li>
							<li><a target="_blank" href="https://llamada.mx/">Search phone numbers</a></li>
							<li><a target="_blank" href="https://theunexplainedx.freeforums.net">Chat forums paranormal onli text</a></li>
							<li><a target="_blank" href="https://www.unexplained-mysteries.com">Things mystiryus  </a></li>
							<li><a target="_blank" href="https://tympanus.net/Tutorials/CSS3FullscreenSlideshow/index4.html">Change img example web</a></li>
							<li><a target="_blank" href="https://temp-mail.org/es">Email temporal</a></li>
							<li><a target="_blank" href="https://seabass.gsfc.nasa.gov/">Inf Public Stereets Experiment USA</a></li>
							<li><a target="_blank" href="https://data.cencoos.org/#">As datasets are published Gilders System Observating</a></li>
							<li><a target="_blank" href="https://www.data.gov/">Here you will find data, tools, and resources to conduct research, develop web and mobile applications, design data visualizations, and more.</a></li>
							<li><a target="_blank" href="https://infotracer.com/">Search any peoople whit History</a></li>
							<li><a target="_blank" href="https://www.it-swarm-es.com/es/javascript/"> Dude of javascript and tips</a></li>
							<li><a target="_blank" href="https://www.proboards.com/">Forums create count free whit hosting</a></li>
							<li><a target="_blank" href="https://hackforums.net/">Hacking forums and resources Dakt password : VkqCRw1W)MU4</a></li>
							<li><a target="_blank" href="https://cutewallpaper.org/22/hacker-typer-wallpapers/view-page-22.html"> backgrounds hackers</a></li>
							<li><a target="_blank" href="https://www.youtube.com/embed/CTV9kOEP8Mo?rel=0&autoplay=1&controls=0&showinfo=0&loop=1&disablekb=1&showinfo=0&playlist=CTV9kOEP8Mo">Fske video youtube hacker</a></li>
							<li><a target="_blank" href="https://www.youtube.com/embed/llufppyponk?rel=0&autoplay=1&controls=0&showinfo=0&loop=1&disablekb=1&showinfo=0&playlist=llufppyponk"></a></li>
							<li><a target="_blank" href="http://www.staggeringbeauty.com/"> gusano animado</a></li>
							<button class="btn" onclick="link()">X</button>
						</div>
						
					</section>
					
					<!-- root -->
					<section id="ro" class="acess">
						<div class="acess_div">
							<nav class="acess_nav"><p class="title2">ACESS</p><button class="btn" onclick="acess()">X</button></nav>
							<!-- <p class="title2"></p> -->
							<form class="acess_form">
								<input type="text" autocomplete="off" name="user" placeholder="Username here" id="user">

								<input type="password" name="password" placeholder="Password here" id="pas">
								<button class="send" onclick="send(event)" >Send</button>
							</form>
						</div>
					</section>

					<section class="negar" id="negado">
						<div class="negar_2">
							<div class="negar_3">
								<p>Hey your acces is deneadend</p>
								<img src="acess.png">
							</div>
						</div>
						
					</section>


					<!-- section secret of archt -->



					<section class="sec" id="sec">
						<div class="holograms"><img src="2.gif"></div>
						<div class="content">
							<nav>Php request <button class="btn" onclick="close_sec()">X</button></nav>
							<p class="meca"><i>

								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor<br>
								incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam,<br>
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br>
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br>
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br>
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></i>
						</div>
					</section>


					<!-- camaaras showww -->

					<section class="cameras" id="show">
						
						<div class="container_cameras" >
							<p id="as" class="title2"><b>Cameras online<b> <i>(click for zoom)</i></p><button class="btn_ta" onclick="showcam()">show cameras </button>
							<button class="btn_ta" onclick="close_cam()">Reload</button>
							<button class="btn_ta" onclick="CameraLarge()"> Show more Panels</button>
							<div class="order" >
								<img class="cameras_img" alt="hola" src="id.png"  id="back1"> 
								<img src="id.png" class="cameras_img"  id="back2">
								<img src="id.png" class="cameras_img"  id="back3">
								<img src="id.png" class="cameras_img"  id="back4"> 
								<img src="id.png" class="cameras_img"  id="back5"> 
								<img src="id.png" class="cameras_img"  id="back6"> 
								<img src="id.png" class="cameras_img"  id="back7"> 
								<img src="id.png" class="cameras_img"  id="back8"> 
								<img src="id.png" class="cameras_img"  id="back9"> 
								<img src="id.png" class="cameras_img"  id="back10"> 
								<img src="id.png" class="cameras_img"  id="back11"> 
								<img src="id.png" class="cameras_img"  id="back12"> 
								<img src="id.png" class="cameras_img"  id="back13"> 
								<img src="id.png" class="cameras_img"  id="back14">
								<img src="id.png" class="cameras_img"  id="back15"> 
								<img src="id.png" class="cameras_img"  id="back16"> 
								<img src="id.png" class="cameras_img"  id="back17"> 
								<img src="id.png" class="cameras_img"  id="back18"> 
								<img src="id.png" class="cameras_img"  id="back19"> 
								<img src="id.png" class="cameras_img"  id="back20"> 
								<img src="id.png" class="cameras_img"  id="back21"> 
								<img src="id.png" class="cameras_img"  id="back22"> 
								<img src="id.png" class="cameras_img"  id="back23"> 
								<img src="id.png" class="cameras_img"  id="back24"> 
								<img src="id.png" class="cameras_img"  id="back25"> 
							</div>
							<div class="order">
								<div class="cameras_img_2" id="back_1"></div>
								<div class="cameras_img_2" id="back_2"></div>
							</div>

							<button class="btn" onclick="camara()"  >X</button>
						</div>
					</section>


					<!-- other seccion -->


					<section class="clound" id="clound">
						<div class="div_clound">
							<img src="id.png">
						</div>
					</section>



					<!-- Section cameras -->


					<section id="camera">
						<div class="Search">
							<input type="Search" name="" placeholder="X and Y">

						</div>


						<section class="section_divs" >

							<div class="div_img" >
								<button class="btn_invisible" onclick="camara()" >
									<div class="file">
										<div class="sub_file"></div>
									</div>
								</button>
								<span>
									<p class="name_detec">Cameras</p>

								</span>
							</div>

							<div class="div_img" >
								<button class="btn_invisible" onclick="link()" >
									<div class="file">
										<div class="sub_file"></div>
									</div>
								</button>
								<span>
									<p class="name_detec">Link</p>


								</span>
							</div>

							<div class="div_img" >
								<button class="btn_invisible" onclick="overflow()" >
<!-- 									<img class="img_btn" src="id.png">
 -->									<div class="file"> 
										<div class="sub_file"></div>
									</div>
								</button>
								<span>
									<p class="name_detec">Fake ID</p>


								</span>
							</div>

							<div class="div_img" >
								<button class="btn_invisible" onclick="acess()" >
									<div class="file">
										<div class="sub_file"></div>
									</div>
								</button>
								<span>
									<p class="name_detec">Root</p>


								</span>
							</div>
							<div class="div_img" >
								<button class="btn_invisible" onclick="log()" >
									<div class="file">
										<div class="sub_file"></div>
									</div>
								</button>
								<span>
									<p class="name_detec">nothings</p>


								</span>
							</div>
							<div class="div_img" >
								<button class="btn_invisible"  >
									<div class="file">
										<div class="sub_file"></div>
									</div>
								</button>
								<span>
									<p class="name_detec">nothig</p>


								</span>
							</div>
							<div class="div_img" >
								<button class="btn_invisible" onclick="clound()" >
									<div class="file">
										<div class="sub_file"></div>
									</div>
								</button>
								<span>
									<p class="name_detec">Could</p>


								</span>
							</div>



						</section>
					</section>



					<!-- section text and inf -->
					<div class="section_camera">
						<div class="inf" >

<!-- 
							 <img class="img_show" id="img_1" src="http://webcam3.vilhelmina.se/mjpg/video.mjpg">
							<img class="img_show" id="img_2" src="http://85.13.14.79/cgi-bin/faststream.jpg?stream=full&fps=0">
							<img class="img_show" id="img_3" src="http://193.45.228.92/mjpg/video.mjpg"> -->




						</div>
					</div>

					<ul class="ul_1" >
						<li class="animation" class="li_1" >
							Albania <p class="p_p1"> +355</p>
						</li>
						<li class="li_1">
							Alemania  <p class="p_p1"> +49</p>
						</li>
						<li class="li_1">
							Andorra <p class="p_p1"> +376</p>
						</li>
						<li class="li_1">
							Angola <p class="p_p1"> +244</p>
						</li>
						<li class="li_1">
							Anguilla <p class="p_p1"> 1+264</p>
						</li>
						<li class="li_1">
							Antártida <p class="p_p1"> +672</p>
						</li>
						<li class="li_1">
							Antigua y Barbuda <p class="p_p1"> +1268</p>
						</li>
						<li class="li_1">
							Arabia Saudita <p class="p_p1"> +966</p>
						</li>
						<li class="li_1">
							Argelia <p class="p_p1"> +213</p>
						</li>
						<li class="li_1">
							Argentina <p class="p_p1"> +54</p>
						</li>
						<li class="li_1">
							Armenia<p class="p_p1"> +374</p>
						</li>
						<li class="li_1">
							Aruba, Isla <p class="p_p1"> +297+8</p>
						</li>
						<li class="li_1">
							Ascensión, Isla <p class="p_p1"> +247</p>
						</li>
						<li class="li_1">
							Australia <p class="p_p1"> +61</p>
						</li>
						<li   class="li_1">
							Austria <p class="p_p1"> +43</p>
						</li>
						<li   class="li_1">
							Azerbaiyán <p class="p_p1"> +994</p>
						</li>

						<li   class="li_1"> <p class="p_p1"> +1242</p>
							Bahamas
						</li>
						<li   class="li_1">
							Bahréin <p class="p_p1"> +973</p>
						</li>
						<li   class="li_1">
							Bangladesh <p class="p_p1"> +880</p>
						</li>
						<li   class="li_1">
							Barbados <p class="p_p1"> +1246</p>
						</li>

						<li   class="li_1">
							Bélgica <p class="p_p1"> +32</p>
						</li>
						<li   class="li_1">
							Belice <p class="p_p1"> +501</p>
						</li>
						<li   class="li_1">
							Bolivia <p class="p_p1"> +591</p>
						</li>
						<li   class="li_1">
							Brasil<p class="p_p1"> +55</p>
						</li>
						<li   class="li_1">
							Bulgaria <p class="p_p1"> +359</p>
						</li>
						<li   class="li_1">
							Burkina Faso <p class="p_p1"> +226</p>
						</li>
						<li   class="li_1">
							Cabo Verde <p class="p_p1"> +238</p>
						</li>
						<li class="li_1">
							Camboya<p class="p_p1"> +855</p>
						</li>
						<li   class="li_1">
							Camerún <p class="p_p1"> +237</p>
						</li>
						<li   class="li_1">
							Congo <p class="p_p1"> +242
							</p>
						</li>
						<li   class="li_1">
							Colombia <p class="p_p1"> +57
							</p>
						</li>
						<li   class="li_1">
							Corea del Sur <p class="p_p1">+850</p>
						</li>
						<li   class="li_1">
							Costa Rica <p class="p_p1">+506
							</p>
						</li>
						<li   class="li_1">
							Croacia <p class="p_p1">+385
							</p>
						</li>
						<li   class="li_1">
							Cuba <p class="p_p1"> +53</p>
						</li>
						<li   class="li_1">
							Curazao <p class="p_p1"> +599
							</p>
						</li>
						<li   class="li_1">
							Checa, República<p class="p_p1">+420
							</p>
						</li>
						<li   class="li_1">
							Chile <p class="p_p1"> +56</p>
						</li>
						<li   class="li_1">
							China <p class="p_p1">+86
							</p>
						</li>
						<li   class="li_1">
							Dinamarca <p class="p_p1">+45
							</p>
						</li>
						<li   class="li_1">
							Ecuador <p class="p_p1"> +593
							</p>
						</li>
						<li   class="li_1">
							Egipto <p class="p_p1"> +20
							</p>
						</li>
						<li   class="li_1">
							El Salvador <p class="p_p1">+503
							</p>
						</li>
						<li   class="li_1">
							España <p class="p_p1"> +34
							</p>
						</li>
						<li   class="li_1">
							Filipinas <p class="p_p1"> +63
							</p>
						</li>
						<li   class="li_1">
							Gabón <p class="p_p1">+241
							</p>
						</li>
						<li   class="li_1">
							Georgia<p class="p_p1"> +995
							</p>
						</li>
						<li   class="li_1">
							Granada<p class="p_p1"> +1473
							</p>
						</li>
						<li   class="li_1">
							Grecia <p class="p_p1"> +30
							</p>
						</li>
						<li   class="li_1">
							Guatemala <p class="p_p1"> +502
							</p>
						</li>
						<li   class="li_1">
							Guyana <p class="p_p1"> +592
							</p>
						</li>
						<li   class="li_1">
							Honduras <p class="p_p1">+504
							</p>
						</li>
						<li   class="li_1">
							Hong Kong <p class="p_p1"> +852
							</p>
						</li>
						<li   class="li_1">
							Indonesia <p class="p_p1"> +62
							</p>
						</li>
						<li   class="li_1">
							Irlanda <p class="p_p1"> +353
							</p>
						</li>
						<li   class="li_1">
							Islandia <p class="p_p1">+354</p>
						</li>
						<li   class="li_1">
							Jamaica<p class="p_p1"> +187
							</p>
						</li>
						<li   class="li_1">
							Japón <p class="p_p1"> +81
							</p>
						</li>
						<li   class="li_1">
							Líbano <p class="p_p1"> +961</p>
						</li>
						<li   class="li_1">
							Liberia <p class="p_p1"> +231
							</p>
						</li>
						<li   class="li_1">
							Lituania <p class="p_p1">+370
							</p>
						</li>
						<li   class="li_1">
							Macedonia <p class="p_p1"> +389
							</p>
						</li>
						<li   class="li_1">
							Malawi <p class="p_p1"> +265
							</p>
						</li>
						<li   class="li_1">
							Malta <p class="p_p1">+356
							</p>
						</li>
						<li   class="li_1">
							México <p class="p_p1"> +52</p>
						</li>
						<li   class="li_1">
							Micronesia <p class="p_p1"> +691</p>
						</li>
						<li   class="li_1">
							Mónaco <p class="p_p1">+377
							</p>
						</li>
						<li   class="li_1">
							Montserrat <p class="p_p1">+1664
							</p>
						</li>
						<li   class="li_1">
							Myanmar <p class="p_p1"> +95
							</p>
						</li>
						<li   class="li_1">
							Nicaragua <p class="p_p1">+505
							</p>
						</li>
						<li   class="li_1">
							Nigeria <p class="p_p1">+234
							</p>
						</li>
						<li   class="li_1">
							Noruega <p class="p_p1"> +47</p>
						</li>
						<li   class="li_1">
							Nueva Caledonia <p class="p_p1"> +687</p>
						</li>
						<li   class="li_1">
							Nueva Zelanda<p class="p_p1"> +64</p>
						</li>
						<li   class="li_1">
							Pakistán <p class="p_p1">+92
							</p>
						</li>
						<li   class="li_1">
							Russia <p class="p_p1"> +7</p>
						</li>
						<li   class="li_1">
							Papau<p class="p_p1"> +675
							</p>
						</li>
						<li   class="li_1">
							Perú <p class="p_p1">+51</p>
						</li>
						<li   class="li_1">
							Polonia <p class="p_p1">+48</p>
						</li>
						<li   class="li_1">
							Portugal <p class="p_p1"> +351</p>
						</li>
						<li   class="li_1">
							Puerto Rico <p class="p_p1">+1
							</p>
						</li>
						<li   class="li_1">
							Rumania <p class="p_p1"> +40</p>
						</li>

						<li   class="li_1">
							Ruanda<p class="p_p1"> +250
							</p>
						</li>
						<li   class="li_1">
							Samoa Americana <p class="p_p1"> +1684</p>
						</li>
						<li   class="li_1">
							San Marino <p class="p_p1">+378</p>
						</li>
						<li   class="li_1">
							Senegal<p class="p_p1">+221</p>
						</li>
						<li   class="li_1">
							Sierra Leona <p class="p_p1"> +232
							</p>
						</li>
						<li   class="li_1">
							Singapur <p class="p_p1">+65
							</p>
						</li>
						<li   class="li_1">
							Siria Rep. Árabe <p class="p_p1">+963
							</p>
						</li>
						<li   class="li_1">
							Suecia <p class="p_p1"> +46
							</p>
						</li>
						<li   class="li_1">
							Surinam<p class="p_p1"> +597
							</p>
						</li>
						<li   class="li_1">
							Suazilandia <p class="p_p1"> +41</p>
						</li>

						<li   class="li_1">
							Tailandia <p class="p_p1">+66
							</p>
						</li>
						<li   class="li_1">
							Ucrania <p class="p_p1"> +380
							</p>
						</li>
						<li   class="li_1">
							Venezuela <p class="p_p1">+58
							</p>
						</li>
						<li   class="li_1">
							Vietnam <p class="p_p1"> +84</p>
						</li>
						<li   class="li_1">
							Yemen<p class="p_p1"> +967
							</p>
						</li>
						<li   class="li_1">
							Yugoslavia <p class="p_p1">+253</p>
						</li>
						<li   class="li_1">
							Zambia <p class="p_p1"> +260
							</p>
						</li>
						<li   class="li_1">
							Zimbabue <p class="p_p1"> +263
							</p>
						</li>	</ul>
					</section>


					<section class="section_two">

						<div class="ip">
							<div class="aligh">
								<div class="text_ip">Your ip</div>
								<strong  id="ipId"></strong>
							</div>
						</div>
						

					<!-- <div id="number">	
						<script>
							document.write(loteria);
						</script>
					</div> -->

				</section>
	
		
		
		</body>


		<script type="text/javascript" src="https://api.ipify.org/?format=jsonp&callback=get_ip"></script>
		<script type="text/javascript">
			const wrapper = document.querySelector(".acess_div"),
			header = wrapper.querySelector("nav");

			function onDrag({movementX, movementY}){
				let getStyle = window.getComputedStyle(wrapper);
				let leftVal = parseInt(getStyle.left);
				let topVal = parseInt(getStyle.top);
				wrapper.style.left = `${leftVal + movementX}px`;
				wrapper.style.top = `${topVal + movementY}px`;
			}
			header.addEventListener("mousedown", ()=>{
				header.classList.add("active");
				header.addEventListener("mousemove", onDrag);
			});
			document.addEventListener("mouseup", ()=>{
				header.classList.remove("active");
				header.removeEventListener("mousemove", onDrag);
			});

		</script>
		<script type="text/javascript">
			const wrappe = document.querySelector(".section_camera"),
			heade = wrappe.querySelector("div");

			function onDra({movementX, movementY}){
				let getStyl = window.getComputedStyle(wrappe);
				let leftVa = parseInt(getStyl.left);
				let topVa = parseInt(getStyl.top);
				wrappe.style.left = `${leftVa + movementX}px`;
				wrappe.style.top = `${topVa + movementY}px`;
			}
			heade.addEventListener("mousedown", ()=>{
				heade.classList.add("active");
				heade.addEventListener("mousemove", onDra);
			});
			document.addEventListener("mouseup", ()=>{
				heade.classList.remove("active");
				heade.removeEventListener("mousemove", onDra);
			});

		</script>




		</html>
