  <style type="text/css">
  h2 {
	  font-size:20px;
	  font-family:Tahoma, Geneva, sans-serif;
    color:#2E8B57;
}
  h3 {
	  font-size:18px;
	  font-family:Tahoma, Geneva, sans-serif;
    color:#2E8B57;
}
#bloco{
width:480px;
height:140px;
background:#E0FFFF;	
 border-radius: 10px;
 border:1px solid #CCC;
}
  </style>

<?php
if (getenv("REQUEST_METHOD") == "POST")
{

// variáveis recebidas pelo método POST do Formulário

$nome     = $_POST[nome];
$email   = $_POST[email];
$assunto   = $_POST[assunto];
$mensagem  = $_POST[mensagem];
$mail = "alex.sdo09@gmail.com";			// email do destinatário
//$Cc = "cópia para";		// digite um email que receberá uma cópia
$data = date("d/m/Y");




// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// Return-Path: Contém o endereço de e-mail utilizado pelo MTA para devolver as mensagens que por algum motivo não foram enviadas ao(s) destinatário(s).

$headers  = "MIME-Version: 1.0\r\n";
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "Date: ".date("D, d M Y H:i:s O")."\n";
$headers .= "From: \"$nome\" <$email>\r\n";
//$headers .= "Return-Path: $email\r\n"; // return-path
//$headers .= "Cc: ".$Cc;


if(mail($mail, $assunto, $mensagem, $headers)){
        echo "<br><br><center><div id='bloco'><br><h2>Sua mensagem foi enviada com sucesso!</h2>
		<h3>Em breve entraremos em contato.</h3></div></center>";
} else {
        echo "Nao foi possivel enviar sua mensagem, por favor tente mais tarde.";
}       
}

echo '<meta HTTP-EQUIV="Refresh" CONTENT="3; URL=http://isw10.16mb.com/enviar_email/email.php">';	// Trocar *************** pelo o endereço do email.php para retornar para página do formulário ou para outra página se preferir.

// CONTENT="3 é o tempo de espera para depois redireciona para a aágina informada na URL=

?>