<!-- Iniciar a sessão -->
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<!-- MetaTags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Incluir folha de estilos -->
	<link type="text/css" rel="stylesheet" href="../css/styles.css">

	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Link da google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	<!-- Font Awesome icons -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<!-- Título da página -->
	<title>BusiChat | Nova mensagem</title>
</head>
<body>

	<div id="nova_msg">

		<!-- Botão de regresso à Área de Gestão -->
		<a href="../area_gestao.php"><button class="btn btn-info"><i class="fas fa-arrow-circle-left"></i>Regressar à área de gestão</button></a>

			<!-- Título da página -->
			<h1 class="text-center">Envio de nova mensagem</h1>

			<!-- Formulário da nova mensagem -->
			<div class="form-container form-mensagem">

				<!-- Formulário de edição de conta -->
				<form action="" method="post">

	        	<!-- Assunto da nova mensagem -->
	        	<div class="form-group">
	          	<label for="subject">Assunto da sua nova mensagem</label>
	          	<input type="text" name="subject_msg" placeholder="Escreve aqui uma breve descrição da mensagem que pretende enviar" class="form-control col-sm-7">
						</div>

						<!-- Escolha dos contactos a receber a mensagem -->
						<div class="form-group">
							<label for="contactos_msg">Contactos que receberão a mensagem</label>
							<br>
							<select class="custom-select col-sm-3" name="contactos_msg">
								<option value="">Funcionário 1</option>
								<option value="">Funcionário 2</option>
								<option value="">Funcionário 3</option>
								<option value="">Funcionário 4</option>
							</select>
						</div>

						<!-- Corpo da mensagem -->
						<div class="form-group">
							<textarea name="text_msg" rows="8" cols="110" placeholder="Escreva aqui a sua mensagem..."></textarea>
						</div>

						<!-- Botão de mensagem -->
						<div class="form-group">
				      <button type="submit" name="submeter_envio_msg" class="btn">Enviar nova mensagem</button>
				    </div>

				</form>
	</div>

<!-- JavaScript -->
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>