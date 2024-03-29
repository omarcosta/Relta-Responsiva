<!DOCTYPE html>
<!--
 * A Design by OmarCosta
 * Author: OmarCosta
 * Author URL: http://omarcosta.site
 * License: http://omarcosta.site
-->
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:title" content="Teste de Envio via FormMail" />
	<meta property="og:locale" content="pt_br" />
	<title>RELTA ARQUITETURA</title>
	<link href='fonts/oswald.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/uikit.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/mobile.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<script src="js/modernizr.custom.js"></script>
	<!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<!-- Carregar idioma script automaticamente pelo idioma do navegador -->
	<script type="text/javascript">

	</script>
</head>

<body>
	<script type="text/javascript">
		var userLang = navigator.language || navigator.userLanguage;
		switch (userLang) {
			case 'en':
				lang_EN();
				break
			case 'pt-BR':
				lang_BR();
				break
			default:
				lang_BR();
		}
		//Carregar idioma manualmente
		function lang_BR() {
			var element = document.createElement("script");
			element.src = "lang/BR.js";
			document.body.appendChild(element);
		}
		function lang_EN() {
			var element = document.createElement("script");
			element.src = "lang/EN.js";
			document.body.appendChild(element);
		}
	</script>
	<div id="aninaLoader" class="loader" onload="animaloader()">
		<div class="project-loader">
			<div class="bubblingG">
				<img src="img/logo.png" width="400px" />
				<span id="bubblingG_1"></span>
				<span id="bubblingG_2"></span>
				<span id="bubblingG_3"></span>
			</div>
		</div>
	</div>
	<div class="loading" id="wrapper">
		<!-- Fixed navbar -->
		<div class="navbar navbar-smak navbar-fixed-top " id="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header" style="position: absolute;">
					<button type="button" class="navbar-toggle m-nav" data-toggle="collapse" data-target=".navbar-collapse">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand animate" href="#"><img src="img/logo.png" alt="logo1"></a>
				</div>
				<div class="navbar-collapse collapse">
					<!-- navbar-right -->
					<ul class="nav navbar-nav navbar-center animate m-itens-menu">
						<li class="nav-li"><a id="menu-1" onclick="recarregar('#')" data-toggle="collapse" data-target=".navbar-collapse"></a></li>
						
                       
                        <li class="nav-li"><a id="menu-4" href="#"></a>
							<div uk-dropdown="offset: 0">
								<ul class="uk-nav uk-dropdown-nav">
									<li><a onclick="recarregar('portfolio/casa-verde.html')">Casa Verde</a></li>
									<li><a onclick="recarregar('portfolio/esv.html')">ESV</a></li>
									<li><a onclick="recarregar('portfolio/di-petra.html')">Di Petra</a></li>
									<li><a onclick="recarregar('portfolio/casa-do-norte-emporio-maria-amelia.html')">Casa do Norte e Empório Maria Amélia</a></li>
									<li><a onclick="recarregar('portfolio/stella-bella-vita.html')">Stella Vita Bella Vita</a></li>
								</ul>
							</div>
						</li>
						<!--<li class="nav-li"><a id="menu-5" onclick="recarregar('depoimentos.html')" data-toggle="collapse" data-target=".navbar-collapse"></a></li>-->
                        <li class="nav-li"><a id="menu-6" onclick="recarregar('contato.html')" data-toggle="collapse" data-target=".navbar-collapse"></a></li>
                        <!--<li class="nav-li"><a id="menu-7" class="uk-button uk-button-primary" href="" target="_blanck"></a></li>
						<li class="nav-li">
							<span id="idioma"><a onclick="lang_BR()" data-toggle="collapse" data-target=".navbar-collapse">BR</a>&nbsp;|&nbsp;
								<a onclick="lang_EN()" data-toggle="collapse" data-target=".navbar-collapse">EN</a></span>
						</li>-->
					</ul>
					<div class="agende-reuniao-botao">

						<a id="menu-7" class="uk-button uk-button-primary" href="#modal-center" uk-toggle></a>

						<div id="modal-center" class="uk-flex-top" uk-modal>
							<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
						
								<button class="uk-modal-close-default" type="button" uk-close></button>
								<iframe src=" https://docs.google.com/forms/d/1ncAV5qfvPF1gug4VQIbyKUmGfN0GSQxvd8CSX6YnmZw//viewform?embedded=true" width="550" height="610" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
							
						
							</div>
						</div>

						







						<!--<a id="menu-7" class="uk-button uk-button-primary" href="" target="_blanck"></a>-->
					</div>
					
					<div>
						<span id="idioma"><a onclick="lang_BR()" data-toggle="collapse" data-target=".navbar-collapse">BR</a>&nbsp;|&nbsp;
							<a onclick="lang_EN()" data-toggle="collapse" data-target=".navbar-collapse">EN</a></span>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>

		<div uk-slideshow="animation: fade;autoplay:true; autoplay-interval:7000;pause-on-hover:false">

			<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

				<ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 5">
					<li>
						<div class="banner" style="background-image:url('img/Banner/banner1.png');" uk-cover></div>
						<div class="banner-black uk-inline">
							<!--<div class="uk-position-center uk-overlay">
								<h1 id="banner-1"></h1>
								<p id="banner-msg-1"></p>
							</div>-->
						</div>
					</li>
					<li>
						<div class="banner" style="background-image:url('img/Banner/banner2.png');" uk-cover></div>
						<div class="banner-black uk-inline">
							<!--<div class="uk-position-center uk-overlay">
								<h1 id="banner-2"></h1>
								<p id="banner-msg-2"></p>
							</div>-->
						</div>
					</li>
					<li>
						<div class="banner" style="background-image:url('img/Banner/banner3.png');" uk-cover></div>
						<div class="banner-black uk-inline">
							<!--<div class="uk-position-center uk-overlay">
								<h1 id="banner-3"></h1>
								<p id="banner-msg-3"></p>
							</div>-->
						</div>
					</li>
				</ul>

				<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
					uk-slideshow-item="previous"></a>
				<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
					uk-slideshow-item="next"></a>
			</div>
			<ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
		</div>
		<section id="services" class="gray">
			<div class="container">
				<div class="heading">
					<h1 id="servico_titulo"></h1>
					<div class="divider"><span></span></div>
					
                </div>
                <!--
				<div class="row">
					<div class="col-sm-4">
						<div class="service-item fadeInDown">
							<img src="https://logodownload.org/wp-content/uploads/2017/03/sao-paulo-brasao-logo.png"
								width="100" style="height: 100px;">
							<h3 id="servico_1_titulo"></h3>
							<p id="servico_1_desc" class="font-m"></p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="service-item fadeInUp">
							<img src="img/logo.png" width="100" height="100">
							<h3 id="servico_2_titulo"></h3>
							<p id="servico_2_desc" class="font-m"></p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="service-item fadeInDown">
							<img src="http://www.ccb.policiamilitar.sp.gov.br/portalcb/img/brasao-novo-final.png"
								width="100" height="100">
							<h3 id="servico_3_titulo"></h3>
							<p id="servico_3_desc" class="font-m"></p>
						</div>
                    </div>-->

                    <div class="uk-child-width-1-3@m" uk-grid>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top">
									<!--<img class="img-services" src="img/prefeitura.jpg" alt="">-->
									<img class="img-services" src="img/services/Prefeitura.png" alt="">
                                </div>
                                <div class="uk-card-body card-services">
                                    <h3 id="servico_1_titulo" class="uk-card-title"></h3>
                                    <p id="servico_1_desc"></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top">
									<!--<img class="img-services" src="img/Relta.jpg" alt="">-->
									<img class="img-services" src="img/services/Projetos.png" alt="">
                                </div>
                                <div class="uk-card-body card-services">
                                    <h3 id="servico_2_titulo" class="uk-card-title"></h3>
                                    <p id="servico_2_desc"></p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-default">
                                <div class="uk-card-media-top">
									<!--<img class="img-services" src="img/bombeiros.jpg" alt="">-->
									<img class="img-services" src="img/services/Bombeiros.jpeg" alt="">
                                </div>
                                <div class="uk-card-body card-services">
                                    <h3 id="servico_3_titulo" class="uk-card-title"></h3>
                                    <p id="servico_3_desc"></p>
                                </div>
                            </div>
                        </div>
                    </div>
		</section>
		<section id="about">
			<div class="container">
				<div class="heading">
					<div id="sobre_titulo"></div>
					<h1 id="sobre_subtitulo"></h1>
					<div class="divider">
						<span></span>
					</div>
					<p id="sobre_msg"></p>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="about-item">
							<div class="circle pull-left">
								<i class="fa fa-clock-o"></i>
							</div>
							<h4 id="missao_titulo"></h4>
							<p id="missao_desc" class="font-m"></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="about-item delay2">
							<div class="circle pull-left">
								<i class="fa fa-rocket"></i>
							</div>
							<h4 id="visao_titulo"></h4>
							<p id="visao_desc" class="font-m"></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="about-item delay4">
							<div class="circle pull-left">
								<i class="fa fa-thumbs-up"></i>
							</div>
							<h4 id="valores_titulo"></h4>
							<p id="valores_desc" class="font-m"></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="gray">
				<div class="container">
					<div class="heading">
						<h2 id="equipe_titulo"></h2>
						<div class="divider animate fadeInLeft"><span></span></div>
						<!--<p id="equipe_desc"></p>-->
					</div>                    
                    <div class="row uk-card uk-card-default uk-margin uk-border-pill card-team">
                        <div class="col-md-3 uk-padding-remove">
                            <img src="img/Team/Raquel.jpg" alt="" class="img-team">
                        </div>
                        <div class="col-md-8">
							<div class="uk-card-body">
                                <h3 class="uk-card-title quemsomos-txt">Raquel Toni</h3>
                                <p id="equipe_p2_cv" class="quemsomos-txt"></p>
                                <div class="m-equipe-social quemsomos-txt">
                                    <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="icon: linkedin; ratio: 1.2"></a>
                                    <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="icon: instagram; ratio: 1.2"></a>
                                    <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="icon: mail; ratio: 1.2"></a>
                                    <a href="" class="uk-icon-button" uk-icon="icon: whatsapp; ratio: 1.2"></a>
                                </div>
                            </div>
						</div>
                    </div>
				</div>
			</div>
		</section>

		<!-- Inicio partifolio -->
		<section class="portfolio" id="Projetos">
			<div class="container" style="width: 97%;">
				<div class="heading">
					<h1 id="port_titulo"></h1>
					<div class="divider"><span></span></div>
					<p id="port_desc"></p>
				</div>
				<div class="uk-grid-small uk-text-center" uk-grid>				
					<div class="uk-width-1-3@m">
						<div class="uk-card uk-card-default card-port">
							<div class="img-cover" style="background-image: url('img/portfolio/ESV/Capa.png');"
								onmouseenter="remAtributo('#port-4', 'style')">
								<div id="port-4" style="display:none">
									<a href="portfolio/esv.html" class="img-click mouseEvento-h"
										onmouseout="addAtributo('#port-4', 'display:none;')">
										ESV BR</a>
								</div>
							</div>
						</div>
					</div>
					<div class="uk-width-1-3@m">
						<div class="uk-card uk-card-default card-port">
							<div class="img-cover" style="background-image: url('img/portfolio/Casa Verde/Capa.JPG');"
								onmouseenter="remAtributo('#port-2', 'style')">
								<div id="port-2" style="display:none">
									<a href="portfolio/casa-verde.html" class="img-click mouseEvento-h"
										onmouseout="addAtributo('#port-2', 'display:none;')">
										Casa Verde</a>
								</div>
							</div>
						</div>
					</div>
					<div class="uk-width-1-3@m">
						<div class="uk-card uk-card-default card-port">
							<div class="img-cover" style="background-image: url('img/portfolio/Di Petra/Capa.png');"
								onmouseenter="remAtributo('#port-3', 'style')">
								<div id="port-3" style="display:none">
									<a href="portfolio/di-petra.html" class="img-click mouseEvento-h"
										onmouseout="addAtributo('#port-3', 'display:none;')">
										Di Petra</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!--<section id="parceiros">
			<div class="container">
				<div class="heading">
					<h1 id="parceiro_titulo"></h1>
					<div class="divider"><span></span></div>
					<p id="parceiro_desc"></p>
				</div>
				<div class="uk-child-width-1-1@s uk-child-width-1-4@l  uk-grid-small uk-text-center" uk-grid>
					<div>
						<div class="parceiros">
							<a href="https://www.etna.com.br/" target="_blanck">
								<img class="uk-border-circle uk-margin-small-bottom" src="img/parceiros/etna.jpg" />
							</a>							
						</div>
					</div>
					<div>
						<div class="parceiros">
							<a href="https://www.leroymerlin.com.br/" target="_blanck">
								<img class="uk-border-circle uk-margin-small-bottom"
									src="img/parceiros/leroy-merlin.jpg" />
							</a>
						</div>
					</div>
					<div>
						<div class="parceiros">
							<a href="https://www.instagram.com/suiteplanejados/" target="_blanck">
								<img class="uk-border-circle uk-margin-small-bottom"
									src="img/parceiros/suite-planejados.jpg" />
							</a>
						</div>
					</div>
					<div>
						<div class="parceiros">
							<a href="https://www.tokstok.com.br/" target="_blanck">
								<img class="uk-border-circle uk-margin-small-bottom" src="img/parceiros/tok-stok.jpg" />
							</a>				
						</div>
					</div>
				</div>
			</div>
		</section>-->

		<section id="contacto">
			<a href="https://api.whatsapp.com/send?phone=5511942932035">
				<img class="pulse" src="img/whatsaap.png" />
			</a>
			<!--<a href="contato.html"><img id="contatoW" class="pulse" src="img/contato.png" />
			</a>-->
		</section>
		<footer></footer>

		<!-- Load all jsavascrip files -->
		<script type="text/javascript" src="js/componentes.js"></script>
		<script>
			window.document.body.onload = rodape();

		</script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.bxslider.js"></script>
		<script type="text/javascript" src="js/jquery.label_better.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.js"></script>
		<script type="text/javascript" src="js/jquery.easypiechart.js"></script>
		<script type="text/javascript" src="js/jquery.inview.js"></script>
		<script type="text/javascript" src="js/countUp.js"></script>
		<script type="text/javascript" src="js/uikit.min.js"></script>
		<script type="text/javascript" src="js/uikit-icons.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/grid.js"></script>
		<script type="text/javascript" src="js/port.js"></script>
		<script type="text/javascript" src="js/mobile.js"></script>
</body>

</html>