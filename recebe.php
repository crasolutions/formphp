
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Obrigado pelo cadastro.</title>

		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/recebe.css">

	</head>
	<body>



		<?php
		if (isset($_POST['BTEnvia'])) {

		//Variaveis de POST, Alterar somente se necessário
		//====================================================
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$mensagem = $_POST['mensagem'];
		//====================================================

		//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
		//====================================================
		$email_remetente = "fabio@fclbrindes.com.br"; // deve ser uma conta de email do seu dominio
		//====================================================

		//Configurações do email, ajustar conforme necessidade
		//====================================================
		$email_destinatario = "fabio@fclbrindes.com.br"; // pode ser qualquer email que receberá as mensagens
		$email_reply = "$email";
		$email_assunto = "Contato do site FCL Brindes"; // Este será o assunto da mensagem
		//====================================================

		//Monta o Corpo da Mensagem
		//====================================================
		$email_conteudo = "Nome = $nome \n";
		$email_conteudo .= "Email = $email \n";
		$email_conteudo .= "Telefone = $telefone \n";
		$email_conteudo .= "Mensagem = $mensagem \n";
		//====================================================

		//Seta os Headers (Alterar somente caso necessario)
		//====================================================
		$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
		//====================================================

		//Enviando o email
		//====================================================
		if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
					echo "</b><h3>E-Mail enviado com sucesso!</h3></b>";
					}
			else{
					echo "</b><h3>Falha no envio do E-Mail!</h3></br>"; }
		//====================================================
		}
		?>



				<div class="container jumbotron">

					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">




				<h1 class="text-info">Obrigado pela visita!</h1>
				  <h2 class="text-info text-left text-uppercase" style="font-size:32px;"><a href="index.html">Continue navegando em nosso site!</a></h2>

				<a href="index.html" style="text-decoration:none;"><input type="submit" name"voltar para o site" value="Voltar para o site"  title="Voltar para o site"onClick="index.html"></a>

				</div>
				</div>

					</div>

			</body>
		</html>
