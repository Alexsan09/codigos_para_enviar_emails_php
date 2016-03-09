<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Envio de email</title>


<link href="estilo.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

 <script type="text/javascript">
    window.onload = function() {       
        CKEDITOR.replace( 'mensagem', {
                           toolbar:
                           [
                             { name: 'basicstyles', items : [ 'Bold','Italic','Underline' ] },
                             { name: 'paragraph', items : [ 'NumberedList','BulletedList' ] },
                             { name: 'paragraph', items : [ 'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'] },
                             { name: 'styles', items : [ 'Font','FontSize' ] },
                             { name: 'colors', items : [ 'TextColor','BGColor' ] },
                             { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteFromWord','-','Undo','Redo' ] },                             
                             { name: 'tools', items : [ 'Maximize','-','About' ] }
                           ],
                           width: "740px",
                           height: "200px"}
                         );
    };
  </script>
			

<script language="javascript">

function validar() {
var form1=document.getElementById("form1");
if (form1.nome.value.length == 0) {
		alert("Favor informar seu nome. ");
        form1.nome.focus();
        return false;
     }
	 
	 
if (form1.email.value.length == 0) {
		alert("Favor informar seu email. ");
        form1.email.focus();
        return false;
     }
	 
if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form1.email.value))) {
		alert("É necessário o preenchimento de um endereço de e-mail válido.");
		form1.email.focus();
		return false;
	}

if (form1.assunto.value.length == 0) {
		alert("Favor informar o Assunto. ");
        form1.assunto.focus();
        return false;
     }
	 
return true;
	 }



function clearText(thefield){
thefield.value = ""
} 

</script>


</head>

<body>

<center>
<div class="quadro">

<table width="524" border="0" cellspacing="0" cellpadding="0">
 <form  name="form1" id="form1" action="upload.php" method="post" enctype="multipart/form-data" onSubmit="return validar();">
 
  <tr>
    <th height="76" align="left" class="titulo" scope="col"></th>
    <th height="76" colspan="2" align="left" class="titulo" scope="col">Fale Conosco</th>
    <th width="10" scope="col">&nbsp;</th>
    <th width="11" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td width="88">&nbsp;</td>
    <td width="28">&nbsp;</td>
    <td width="607" height="32">Nome (obrigatório)</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td height="32"><label for="nome4"></label>
      <input name="nome" type="text" id="nome4" size="50" placeholder="Digite seu nome." autofocus/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td height="32">E-mail (obrigatório)</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="32">&nbsp;</td>
    <td><label for="email"></label>
      <input name="email" type="text" id="email" size="50" placeholder="Digite seu email." /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td height="32">Assunto</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="32">&nbsp;</td>
    <td><label for="assunto2"></label>
      <input name="assunto" type="text" id="assunto2" size="50" placeholder="Digite o assunto."/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="48">&nbsp;</td>
    <td>Sua mensagem</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label for="mensagem"></label>
      <textarea name="mensagem" id="mensagem" cols="80" rows="8" placeholder="Digite um breve texto aqui."></textarea></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="image" src="enviar.jpg" width="60" height="30" title="Enviar" name="Enviar" id="Enviar" value="Enviar" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  </form>
</table>

</div>
</center>


</body>
</html>