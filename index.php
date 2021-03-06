<!doctype html>
<html lang="pt-br">
<head>
		<meta charset="utf-8">
		<title>Stillo Refrigeração </title>
		<meta name="robots" content="index, follow">
		<meta name="distribution" content="global">
		<meta name="revisit-after" content="1">
		<meta name="expires" content="never">
		<meta name="rating" content="general">
		<meta name="description" content="">
		<!-- TROCAAAA -->
		<meta name="keywords" content="salvatur teen, salvaturteen, disney salvador, viagem jovem, disney 2013, salvatur 2013, salvatur disney, pacotes disney, viagens disney, sonho disney, salvatur teen">
		<link rel="stylesheet" href="build/css/index.css">
		<link rel="shortcut icon" href="images/favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="build/css/bootstrap.css">
		 
		
		<meta property="og:title" content="Stillo Refrigeração e Serviços">
		<meta property="og:type" content="WebSite">       
		<meta property="og:image" content="">      
		<meta property="og:url" content="http://stillorefrigeracao.com.br">

	</head>

	<body>
	<div id="all">
		<?php include("header.php"); ?>

		<div class="wrapper">
			<section id="content">

				<div id="cbp-fwslider" class="cbp-fwslider">
				    <ul>
				        <li><a href="#"><img src="images/banner2.png" alt="Banner 1"/></a></li>
				        <li><a href="#"><img src="images/banner2.png" alt="Banner 1"/></a></li>
				        <li><a href="#"><img src="images/banner2.png" alt="Banner 1"/></a></li>
				        
				    </ul>
				</div>


				<div class="int">
					<section id="first">
						<div id="newsletter">
							<h3>Newsletter</h3>
							<h6 class="sub">Cadastre-se e receba diversas novidades</h6>
							<form method="POST" action="" name="newsletter" id="formNewsletter">
								<input type="text" name="nome" placeholder="Seu nome"/>
								<input type="text" name="email" placeholder="Seu email"/><br>
								<!-- <button class="btn btn-large btn-success">Cadastrar</button> -->
								<button type="submit">Cadastrar</button>
							</form>
						</div>

						<section id="dicas"> 
							<article class="article">
								<span>1</span>
								<h4>Por que nos escolher?</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit leo eu lectus viverra dictum vel sed erat. Vivamus est urna, sollicitudin in varius eget, ullamcorper sed velit. Donec felis magna, imperdiet id posuere at.</p>
							</article>

							<article class="article">
								<span>2</span>
								<h4>Segurança e meio ambiente</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit leo eu lectus viverra dictum vel sed erat. Vivamus est urna, sollicitudin in varius eget, ullamcorper sed velit. Donec felis magna, imperdiet id posuere at.</p>
							</article>

							<article class="article">
								<span>3</span>
								<h4>Amarração legal</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit leo eu lectus viverra dictum vel sed erat. Vivamus est urna, sollicitudin in varius eget, ullamcorper sed velit. Donec felis magna, imperdiet id posuere at.</p>
							</article>
						</section>
					</section>

					<section class="container">
						<h4>Nossos serviços</h4>
						<div id="servicos">
							<div class="service">
								<img src="images/settings.png" alt="Manutenção de Ar condicionado">
								<h5>Manutenção de Splits</h5>
							</div>

							<div class="service">
								<img src="images/sale.png" alt="Manutenção de Ar condicionado">
								<h5>Venda e Locação de aparelhos</h5>
							</div>

							<div class="service clean">
								<img src="images/clean.png" alt="Manutenção de Ar condicionado">
								<h5>Reparos em máquinas de lavar e refrigeradores</h5>
							</div>

							<div class="service">
								<img src="images/robot.png" alt="Manutenção de Ar condicionado">
								<h5>Limpeza de dutos de ar com equipamentos robotizados</h5>
							</div>

							
						</div>	
					</section>

					<section class="container clientes">
						<h4>Principais clientes</h4>

						<div class="listaClientes">
							<!-- <img src="images/cliente2.jpg" class="img-rounded" alt="Perbras"> -->
							<img src="images/cliente1.jpg" class="img-rounded" alt="Petrobras">
							<img src="images/cliente3.jpg" class="img-rounded" alt="Clinica Semec">
							<img src="images/cliente4.jpg" class="img-rounded" alt="GB Engenharia">
							<img src="images/cliente5.jpg" class="img-rounded" alt="IFBA">
							<div class="muitoMais"><span>Entre outros</span></div>
						</div>	
					</section>

				</div>
				
			</section>
		</div> <!-- wrapper -->

	</div> <!-- all -->

	<?php include("footer.php") ?>


		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="build/js/app.min.js"></script>

		<script type="text/javascript">
			$( function() {
				$( '#cbp-fwslider' ).cbpFWSlider();
			});

			$('#formNewsletter button').click(function(){
				
				$.ajax({
					type: 'POST',
					url: 'newsletter.php',
					data: $('#formNewsletter').serialize(),
					dataType: 'json',
					success: function(data){
						console.log("foi");
						console.log(data);
						 
					},error: function(data){
						console.log('Error');
						console.log(data);
					}

				});

				return false;
			});
		</script>
</body>
</html>