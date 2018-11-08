<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/styles.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../js/functions.js"></script>
<title>Documento sin t&iacute;tulo</title>

</head>

<body>
<div id="leftPanelcontacte">
  <table width="75%" border="0" align="center">
  <form id="frmContactenos" name="frmContactenos" onsubmit="" method="post" >
    <tr>
      <td width="50%" class="Titulo1">Nombre:</td>
      <td width="50%"><input name="nombrecont" type="text" class="cajatxt" id="nombrecont" onKeyPress="return JustAlpha(event);"/></td>
    </tr>
    <tr>
      <td class="Titulo1">Correo Electr&oacute;nico: </td>
      <td><input name="emailcont" type="text" class="cajatxt" id="emailcont" onBlur="if (Email(this.value)==false){alert('Email Invalido');this.focus();return false;}"/></td>
    </tr>
    <tr>
      <td class="Titulo1">Tel&eacute;fono:</td>
      <td><input name="telefonocont" type="text" class="cajatxt" id="telefonocont" onKeyPress="return JustNumber(event);"/></td>
    </tr>
    <tr>
      <td class="Titulo1">Compa&ntilde;&iacute;a:</td>
      <td><input name="empresacont" type="text" class="cajatxt" id="empresacont"/></td>
    </tr>
    <tr>
      <td class="Titulo1">Comentarios:</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">
	  <textarea name="comentarioscont" cols="50" rows="6" class="cajatxt" id="comentarioscont" > </textarea>
	  </td>
      </tr>
	   <tr>
      <td colspan="2">
	  <input name="btnContactenos" type="button" class="Boton2" id="btnContactenos" value="Aceptar" onclick="
	  var comentarios = ReplaceEnters(trim(document.getElementById('comentarioscont').value), true);	  
	  var nombre = document.getElementById('nombrecont').value;
	  var email = document.getElementById('emailcont').value;
	  var telefono = document.getElementById('telefonocont').value;
	  var empresa = document.getElementById('empresacont').value;
	      
		if(nombre==''){alert('Debe Agregar Su Nombre '); return false;}
		if(email==''){alert('Debe Agregar Su Email'); return false;}
		if(comentarios==''){alert('Debe Agregar Su Mensaje'); return false;}		
		
		
		var oHRcontacto = new HttpObject();
		oHRcontacto.bSynAsyn = true;
		oHRcontacto.textSend = 'consulta=EnviaContactoPHP&nombre='+nombre+'&correo='+email+'&tel='+telefono+'&empresa='+empresa+'&comentarios='+comentarios;		
		oHRcontacto.url ='pags/consultas.php';
		oHRcontacto.setTypeResponse('javascript');
		oHRcontacto.Execute();		
		oHRcontacto.textSend = '';
		
	  "/>
	  </td>
      </tr>
	</form>
  </table>
</div>
</body>
</html>
