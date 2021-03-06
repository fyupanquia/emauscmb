<?php 
/**
* 
*/
class Template
{
	private $cssfiles;
	private $jsfiles;
	private $metas;
	public $title;

	public $colour_a;
	public $colour_b;

	function __construct()
	{
		$this->cssfiles = [
							"Fontawesome"=>"font-awesome.min.css",
							"Bootstrap"=>"bootstrap.min.css",
							"Fancybox"=>"jquery.fancybox.css",
							"owl carousel"=>"owl.carousel.css",
							"Animate"=>"animate.css",
							"Main Stylesheet"=>"main.css",
							"Main Responsive"=>"responsive.css",
							//"Icons"=>"font-awesome.css",
							"app"=>"app.css",
							"theme"=>"theme.php"
						  ];


		$this->jsfiles = [
						  "main jQuery"=>"vendor/jquery-1.11.1.min.js",
						  "Bootstrap"=>"bootstrap.min.js",
						  "jquery.nav"=>"jquery.nav.js",
						  "Portfolio Filtering"=>"jquery.mixitup.min.js",
						  "Fancybox"=>"jquery.fancybox.pack.js",
						  "Parallax sections"=>"jquery.parallax-1.1.3.js",
						  "jQuery Appear"=>"jquery.appear.js",
						  "countTo"=>"jquery-countTo.js",
						  "owl carousel"=>"owl.carousel.min.js",
						  "WOW script"=>"wow.min.js",
						  "theme custom scripts"=>"main.js",
						  "app"=>"app.js"
						 ];

		$this->metas = "<!-- Mobile Specific Meta -->
				        <meta name='viewport' content='width=device-width, initial-scale=1'>
				        <!-- Always force latest IE rendering engine -->
				        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
				        <!-- Meta Keyword -->
				        <meta name='keywords' content='one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation'>
				        <!-- meta character set -->
				        <meta charset='utf-8'>";

		$this->title = "default";


	}

	function render(){

		$_SESSION["emaus"] = json_encode( ["colour_a"=>$this->colour_a,"colour_b"=>$this->colour_b] );

		$html = "<!DOCTYPE html>
				<!--[if lt IE 7]>      <html lang='en' class='no-js lt-ie9 lt-ie8 lt-ie7'> <![endif]-->
				<!--[if IE 7]>         <html lang='en' class='no-js lt-ie9 lt-ie8'> <![endif]-->
				<!--[if IE 8]>         <html lang='en' class='no-js lt-ie9'> <![endif]-->
				<!--[if gt IE 8]><!-->
				 <html lang='en' class='no-js'> <!--<![endif]-->
				 <head>
				        $this->metas
			
				        <!-- Site Title -->
				        <title>$this->title</title>
				        
						<!-- favicon -->
				        <link rel='shortcut icon'  href='/img/logo.png'/>
				        <!--


				        Google Fonts
				        ============================================= -->
				        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
						
				        <!--
				        CSS============================================= -->
				        ". File::loadLabels("css",$this->cssfiles) ."				
						
						". File::loadLabels("js",["Modernizer Script for old Browsers"=>"vendor/modernizr-2.6.2.min.js"]) ."
						<script type='text/javascript' >
								emaus = {
									colour_a : '$this->colour_a',
									colour_b : '$this->colour_b',
								}
						</script>
				</head>
				    <body>

			        <!--
			        Fixed Navigation
			        ==================================== -->
			        <header id='navigation' class='navbar-fixed-top'>
			            <div class='container'>

			                <div class='navbar-header'>
			                    <!-- responsive nav button -->
			                    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
			                        <span class='sr-only'>Toggle navigation</span>
			                        <span class='icon-bar'></span>
			                        <span class='icon-bar'></span>
			                        <span class='icon-bar'></span>
			                    </button>
			                    <!-- /responsive nav button -->

			                    <!-- logo -->
			                    <h1 class='navbar-brand'>
			                        <a href='#body'>
			                            <img src='img/logo.png' alt='Kasper Logo' style='width: 46%;'>
			                        </a>
			                    </h1>
			                    
			                        <div class='contact-head' >
										<div>
											<label class='callme'>¡ Llámenos !</label><br/><br/>
											<div class='flexcmb'>
												<div class='phone-img' >
													<img src='/img/icons/telefono.gif' class='phone-gif' /> 
												</div>
												<div class='phone-number' >
													<div>259-4149</div>
													<div>737-7321</div>
												</div>
											</div>

										</div>
			                        </div>
			                    
			                    <!-- /logo -->

			                    </div>

			                    <!-- main nav -->
			                    <nav class='collapse navigation navbar-collapse navbar-right' role='navigation'>
			                        <ul id='nav' class='nav navbar-nav'>
			                            <li class='current'><a href='#home'>Inicio</a></li>
			                            <li><a href='#service'>Servicios</a></li>
			                            <li><a href='#portfolio'>Galería</a></li>
			                            <li><a href='#about'>Acerca</a></li>
			                            <li><a href='#contact'>Contáctenos</a></li>
			                        </ul>
			                    </nav>
			                    <!-- /main nav -->
			                </div>

			            </div>
			        </header>
			        <!--
			        End Fixed Navigation
			        ==================================== -->


			        <!--
			        Home Slider
			        ==================================== -->
			        <section id='home'>     
			            <div id='home-carousel' class='carousel slide' data-interval='false'>
			                <ol class='carousel-indicators'>
			                    <li data-target='#home-carousel' data-slide-to='0' class='active'></li>
			                    <li data-target='#home-carousel' data-slide-to='1'></li>
			                    <li data-target='#home-carousel' data-slide-to='2'></li>
			                </ol>
			                <!--/.carousel-indicators-->

			                <div class='carousel-inner'>

			                    <div class='item active'  style='background-image: url(\"img/slider/first.jpg\")' >
			                        <div class='carousel-caption'>
			                            <div class='animated bounceInRight'>
			                                <p class='start-panel'>Gracias a su colaboración podemos seguir con nuestro objetivo y lograr alcanzar así nuestras metas para ayudar a quien más lo necesita.</p>
			                            </div>
			                        </div>
			                    </div>              

			                    <div class='item' style='background-image: url(\"img/slider/second.jpg\")' >                
			                        <div class='carousel-caption'>
			                            <div class='animated bounceInDown'>
			                                <p class='start-panel'>Nuestra ayuda llega a quienes más lo necesitan:  Asociación del Adulto Mayor y Comedor Valle el Triunfo.</p>
			                            </div>
			                        </div>
			                    </div>

			                    <div class='item' style='background-image: url(\"img/slider/third.jpg\")' >                 
			                         <div class='carousel-caption'>
			                            <div class='animated bounceInUp'>
			                                <p class='start-panel'>Todos somos hermanos y con la ayuda de usted y de Dios podemos lograrlo.</p>
			                                <p>Comedor \"Valle del Triunfo\"</p>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			                <!--/.carousel-inner-->
			                <nav id='nav-arrows' class='nav-arrows hidden-xs hidden-sm visible-md visible-lg'>
			                    <a class='sl-prev hidden-xs' href='#home-carousel' data-slide='prev'>
			                        <i class='fa fa-angle-left fa-3x'></i>
			                    </a>
			                    <a class='sl-next' href='#home-carousel' data-slide='next'>
			                        <i class='fa fa-angle-right fa-3x'></i>
			                    </a>
			                </nav>

			            </div>
			        </section>
			        <!--
			        End #home Slider
			        ========================== -->

			        
			        <!--
			        #service
			        ========================== -->
			        <section id='service'>
			            <div class='container'>
			                <div class='row'>
			                    <div class='col-md-12'>
			                        <div class='section-title text-center wow fadeInDown'>
			                            <h2>Servicios</h2>    
			                            <p>Y es a través de los principios de TRABAJO, COMUNIDAD Y SERVICIO, que expresamos nuestro trabajo social frente a la pobreza extrema, y la combatimos con un pan y un libro.
										Es decir, debe comer primero este niño pobre, para que, asistiendo a su Institución Educativa, se forme y eduque para que mañana pueda superar el estado de miseria y necesidad en que ha vivido y finalmente, poder servir a otro más infeliz. </p>

										<p>
											Para ello solicitamos en donación a las Personas y familias de buena voluntad y a las Empresas Privadas y Entidades del Estado:<br/>
											<b>\"Cosas usadas que aún sirvan\"</b><br/>
											<b>\"Libros, ropas, mobiliario y útiles escolares, equipo de cómputo, muebles y artefactos, motores y máquinarias en desuso y alimentos no perecibles...así como material recuperable: papeles, cartones, plásticos, metales y chatarra en general...\"</b><br/>
										</p>
			                        </div>
			                    </div>
			                </div>
			            </div> <!-- end .container -->
			        </section>
			        <!--
			        End #service
			        ========================== -->

			        <!--
			        #service-bottom
			        ========================== -->
			        
			        <section id='service-bottom'>
			            <div class='container'>
			                    <div class='mobile-device'>
			                       <img data-wow-delay='0.2s' class='img-responsive black  wow fadeInLeftBig' src='img/icons/abbe-pierre-b.jpg' alt='iPhone Black'>
			                    </div>
			                <div class='service-features wow fadeInRight'>
			                    <h3>ABBÉ PIERRE</h3>
			                    <ul>
			                        <li>
			                        Sacerdote Francés, Fundador de los Traperos de Emaús, quien hizo vocación la ley “Servir a quien más sufre” y con ello demostrar nuestro amor cristiano para con el pobre y gestó la ayuda que puede ofrecer una persona pobre con su trabajo para servir ayudando a otra persona pobre.En nuestra Comunidad, nosotros nos empeñamos en “servir al más débil quien quiera que sea”
									</li>
			                    </ul>
			                </div>
			            </div>
			        </section>
			        <!--
			        End #service-bottom
			        ========================== -->


			        <!--
			        #Portfolio
			        ========================== -->
			        
			        <section id='portfolio'>
						
				            <div class='section-title text-center wow fadeInDown'>
				                <h2>Galería</h2>    
				            </div>
				            
				            <nav class='project-filter clearfix text-center wow fadeInLeft'  data-wow-delay='0.5s'>
				                <ul class='list-inline'>
				                    <li><a href='javascript:;' class='filter' data-filter='all'>Todos</a></li>
				                    <li><a href='javascript:;' class='filter' data-filter='.s1'>Donaciones 2016</a></li>
				                    <li><a href='javascript:;' class='filter' data-filter='.s2'>Chocolatadas 2016</a></li>
				                    <li><a href='javascript:;' class='filter' data-filter='.s3'>Donaciones 2017</a></li>
				                </ul>
				            </nav>
						

			            <div id='projects' class='clearfix'>

                <figure class='mix portfolio-item s1'>
                    <img class='img-responsive' src='img/portfolio/donacion_nov_2016_1.png' alt='Portfolio Item'>
                    <a href='img/portfolio/donacion_nov_2016_1_big.png' title='DONACIÓN DE CAMAS' rel='portfolio' class='fancybox'><span class='plus'></span></a>
                    <figcaption class='mask'>
                        <h3>DONACIÓN DE CAMAS</h3>
                        <span>Noviembre 2016</span>
                    </figcaption>
                </figure>
                <figure class='mix portfolio-item s1'>
                    <img class='img-responsive' src='img/portfolio/donacion_nov_2016.png' alt='Portfolio Item'>
                    <a href='img/portfolio/donacion_nov_2016_big.png' title='DONACIÓN DE CAMAS' rel='portfolio' class='fancybox'><span class='plus'></span></a>
                    <figcaption class='mask'>
                        <h3>DONACIÓN DE CAMAS</h3>
                        <span>Noviembre 2016</span>
                    </figcaption>
                </figure>
                <figure class='mix portfolio-item s1'>
                    <img class='img-responsive' src='img/portfolio/donacion_nov_2016_2.png' alt='Portfolio Item'>
                    <a href='img/portfolio/donacion_nov_2016_2_big.png' title='DONACIÓN DE CAMAS' rel='portfolio' class='fancybox'><span class='plus'></span></a>
                    <figcaption class='mask'>
                        <h3>DONACIÓN DE CAMAS</h3>
                        <span>Noviembre 2016</span>
                    </figcaption>
                </figure>
                <figure class='mix portfolio-item s2'>
                    <img class='img-responsive' src='img/portfolio/chocolatada_dic_2016_1.png' alt='Portfolio Item'>
                    <a href='img/portfolio/chocolatada_dic_2016_1_big.png' title='CHOCOLATADA (ADULTOS) 2016' rel='portfolio' class='fancybox'><span class='plus'></span></a>
                    <figcaption class='mask'>
                        <h3>ASOCIACION ADULTO MAYOR</h3>
                        <span>18 DICIEMBRE 2016</span>
                    </figcaption>
                </figure>

                <figure class='mix portfolio-item s2'>
                    <img class='img-responsive' src='img/portfolio/chocolatada_dic_2016_2.png' alt='Portfolio Item'>
                    <a href='img/portfolio/chocolatada_dic_2016_2_big.png' title='CHOCOLATADA (ADULTOS) 2016' rel='portfolio' class='fancybox'><span class='plus'></span></a>
                    <figcaption class='mask'>
                        <h3>ASOCIACION ADULTO MAYOR</h3>
                        <span>18 DICIEMBRE 2016</span>
                    </figcaption>
                </figure>

                <figure class='mix portfolio-item s2'>
                    <img class='img-responsive' src='img/portfolio/chocolatada_dic_2016_3.png' alt='Portfolio Item'>
                    <a href='img/portfolio/chocolatada_dic_2016_3_big.png' title='CHOCOLATADA (ADULTOS) 2016' rel='portfolio' class='fancybox'><span class='plus'></span></a>
                    <figcaption class='mask'>
                        <h3>ASOCIACION ADULTO MAYOR</h3>
                        <span>18 DICIEMBRE 2016</span>
                    </figcaption>
                </figure>

                <figure class='mix portfolio-item s2'>
                    <img class='img-responsive' src='img/portfolio/chocolatada_dic_2016_4.png' alt='Portfolio Item'>
                    <a href='img/portfolio/chocolatada_dic_2016_4_big.png' title='CHOCOLATADA (NIÑOS) 2016' rel='portfolio' class='fancybox'><span class='plus'></span></a>
                    <figcaption class='mask'>
                        <h3>COMEDOR VALLE DEL TRIUNFO</h3>
                        <span>18 DICIEMBRE 2016</span>
                    </figcaption>
                </figure>

                <figure class='mix portfolio-item s2'>
                    <img class='img-responsive' src='img/portfolio/chocolatada_dic_2016_5.png' alt='Portfolio Item'>
                    <a href='img/portfolio/chocolatada_dic_2016_5_big.png' title='CHOCOLATADA (NIÑOS) 2016' rel='portfolio' class='fancybox'><span class='plus'></span></a>
                    <figcaption class='mask'>
                        <h3>COMEDOR VALLE DEL TRIUNFO</h3>
                        <span>18 DICIEMBRE 2016</span>
                    </figcaption>
                </figure>

                <figure class='mix portfolio-item s2'>
                    <img class='img-responsive' src='img/portfolio/chocolatada_dic_2016_6.png' alt='Portfolio Item'>
                    <a href='img/portfolio/chocolatada_dic_2016_6_big.png' title='CHOCOLATADA (NIÑOS) 2016' rel='portfolio' class='fancybox'><span class='plus'></span></a>
                    <figcaption class='mask'>
                        <h3>COMEDOR VALLE DEL TRIUNFO</h3>
                        <span>18 DICIEMBRE 2016</span>
                    </figcaption>
                </figure>


                <figure class='mix portfolio-item s3'>
                    <img class='img-responsive' src='img/portfolio/donacion_ene_2017_1.png' alt='Portfolio Item'>
                    <a href='img/portfolio/donacion_ene_2017_1_big.png' title='DONACIÓN CAMA CLÍNICA' rel='portfolio' class='fancybox'><span class='plus'></span></a>
                    <figcaption class='mask'>
                        <h3>DONACIÓN CAMA CLÍNICA</h3>
                        <span>ENERO 2017</span>
                    </figcaption>
                </figure>

                <figure class='mix portfolio-item s3'>
                    <img class='img-responsive' src='img/portfolio/donacion_ene_2017_2.png' alt='Portfolio Item'>
                    <a href='img/portfolio/donacion_ene_2017_2_big.png' title='DONACIÓN CAMA CLÍNICA' rel='portfolio' class='fancybox'><span class='plus'></span></a>
                    <figcaption class='mask'>
                        <h3>DONACIÓN CAMA CLÍNICA</h3>
                        <span>ENERO 2017</span>
                    </figcaption>
                </figure>

                <figure class='mix portfolio-item s3'>
                    <img class='img-responsive' src='img/portfolio/donacion_ene_2017_3.png' alt='Portfolio Item'>
                    <a href='img/portfolio/donacion_ene_2017_3_big.png' title='DONACIÓN CAMA CLÍNICA' rel='portfolio' class='fancybox'><span class='plus'></span></a>
                    <figcaption class='mask'>
                        <h3>DONACIÓN CAMA CLÍNICA</h3>
                        <span>ENERO 2017</span>
                    </figcaption>
                </figure>


			            </div> <!-- end #projects -->

			        </section>
			        <!--
			        End #Portfolio
			        ========================== -->

			        <!--
			        #quotes
			        ========================== -->
			        <section id='quotes'>
			            <div class='container'>
			                <div class='row wow zoomIn'>
			                    <div class='col-lg-12'>
			                        <div class='call-to-action text-center'>
			                            <p>AUTORIZACIONES</p><br/>
										<div class='flexcmb authorization' >
											<div class='cnt_authorization'><img src='https://www.sunarp.gob.pe/PDFs/2016/CONVOCATORIAS/CONCURSOS/PUBLICOS/mod-cpm/img/logo-sunarp.png' /></div>
											<div class='cnt_authorization' ><img src='http://www.munisechura.gob.pe/imagenes/sunat.png' /></div>
										</div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </section>
			        <!--
			        End #quotes
			        ========================== -->


			        <!--
			        #about
			        ========================== -->
			        <section id='about'>
			            <div class='container'>
			                <div class='row'>

			                    <div class='section-title text-center wow fadeInUp'>
			                        <h2>ACERCA DE NOSOTROS</h2>    
			                        <p>SOMOS UNA ENTIDAD DE BIEN SOCIAL, QUE COLABORA CON LA FUNCION SOCIAL DEL ESTADO PERUANO, AL COOPERAR CON PERSONAS O FAMILIAS QUE PROVIENEN DE LA EXTREMA POBREZA Y AGRADECEMOS POR SU SOLIDARIDAD Y CONFIANZA EN NUESTRO TRABAJO SOCIAL Y DIFUNDIR EL PENSAMIENTO Y OBRA DEL <b>ABATE PIERRE,</b> FUNDADOR DE <b>LOS TRAPEROS DE EMAÚS</b></p>
			                    </div>
			                    
			                    <div class='about-us text-center wow fadeInDown'>
			                        <img src='img/about.jpg' alt='About Us' class='img-responsive'>
			                    </div>
			                </div>
			            </div>
			        </section>
			        <!--
			        End #about
			        ========================== -->
			        

			        <!--
			        #quotes
			        ========================== -->
			        <section id='quotes'>
			            <div class='container'>
			                <div class='row wow zoomIn'>
			                    <div class='col-lg-12'>
			                        <div class='call-to-action text-center'>
			                            <p>“SERVIR AL MÁS DÉBIL QUIEN QUIERA QUE SEA”</p>
			                            <span>Servicios Sociales Solidarios</span>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </section>
			        <!--
			        End #quotes
			        ========================== -->


			        <!--
			        #subscribe
			        ========================== -->
			        <!-- section id='subscribe'>
			            <div class='container'>
			                <div class='row'>

			                    <div class='col-md-7 wow fadeInLeft'>
			                        <form action='#' method='post' class='subscription-form'>
			                            <i class='fa fa-envelope-o fa-lg'></i>
			                            <input type='email' name='subscribe' class='subscribe' placeholder='YOUR MAIL' required=''>
			                            <input type='submit' value='SUBSCRIBE' id='mail-submit'>
			                        </form>
			                    </div>

			                    <div class='col-md-4 text-left wow fadeInRight'>
			                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blan dit aliquet elit, eget tincidunt.</p>
			                    </div>
			                </div>
			            </div>
			        </section -->
			        <!--
			        End #subscribe
			        ========================== -->


			        <!--
			        #contact
			        ========================== -->
			        <section id='contact'>
			            <div class='container'>
			                <div class='row'>

			                    <div class='section-title text-center wow fadeInDown'>
			                        <h2>Contáctenos</h2>
			                        <p>Lunes a Viernes 8:00am-5:00pm <br/> Sábados de 8:00am a 1:00pm</p>
			                    </div>
			                    
			                    <div class='col-md-8 col-sm-9 wow fadeInLeft'>
			                        <div class='contact-form clearfix'>
			                            <form name='emaus_contact' action='/services' method='post'>
			                            <input type='hidden' name='service' value='Contact'>
			                            <input type='hidden' name='method' value='send'>

			                                <div class='input-field'>
			                                    <input type='text' class='form-control' name='name' placeholder='Nombres' required=''>
			                                </div>
			                                <div class='input-field'>
			                                    <input type='email' class='form-control' name='email' placeholder='Correo Electrónico' required=''>
			                                </div>
			                                <div class='input-field message'>
			                                    <textarea name='message' class='form-control' placeholder='Mensaje' required=''></textarea>
			                                </div>
			                                <input type='button' class='btn btn-blue pull-right' value='ENVIAR' id='msg-submit'>
			                            </form>
			                        </div> <!-- end .contact-form -->
			                    </div> <!-- .col-md-8 -->

			                    <div class='col-md-4 col-sm-3 wow fadeInRight'>
			                        <div class='contact-details'>
			                            <p>RUC</p>
			                            <span>N°20543772586</span>
			                            <p>OFICINA</p>
			                            <span>AV. SANTA ROSA N°306 <br> TABLADA DE LURIN V.M.T. LIMA</span>
			                            <p>TELEFONO</p>
			                            <span> 259-4149 ó 737-7321 </span>
			                        </div> <!-- end .contact-details -->

			                        <!-- end .contact-details -->
			                    </div> <!-- .col-md-4 -->
			                </div>
			            </div>
			            		<div class='map'>
									<iframe src='https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d730.997300417261!2d-76.92774353606102!3d-12.198983215176565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1486315475874' 
				                	width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>
								</div>
			        </section>
			        <!--
			        End #contact
			        ========================== -->

			        <!--
			        #footer
			        ========================== -->
			        <footer id='footer' class='text-center'>

			            <div class='container'>
			                <div class='row'>
			                    <div class='col-lg-12'>

			                        <div class='footer-logo wow fadeInDown'>
			                            <img src='img/logo.png' alt='logo'>
			                        </div>

			                        <div class='footer-social wow fadeInUp'>
			                            <h3>Servicios Sociales Solidarios</h3>
			                            <ul class='text-center list-inline'>
			                                <li><a href='#'><i class='fa fa-facebook fa-lg'></i></a></li>
			                                <li><a href='#'><i class='fa fa-twitter fa-lg'></i></a></li>
			                                <li><a href='#'><i class='fa fa-google-plus fa-lg'></i></a></li>
			                                <li><a href='#'><i class='fa fa-dribbble fa-lg'></i></a></li>
			                            </ul>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </footer>
			        <!--
			        End #footer
			        ========================== -->

						<div id='blockoptions'>
							<div class='contentoption' style='height: 100%;width: 100%;'>
								<div class='' id='imgloading'>
									<img src='/img/load.gif'>
								</div>
							</div>
						</div>
			        <!--
			        JavaScripts
			        ========================== -->
				        ". File::loadLabels("js",$this->jsfiles) ."	


			    </body>
			    </html>
			    ";


		return $html;
	}
}