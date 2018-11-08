<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bienvenido a Bi-System Solutions</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/functions.js"></script>
<script>
	// Funcion que manda los datos del contacto, con Ajax
	function EnviaContacto(){		
		var nombre = document.getElementById('_firstname').value
		var mail = document.getElementById('_email').value
		var phone = document.getElementById('_phone').value
		var needs = ReplaceEnters(document.getElementById('_needs').value, true)
		if(nombre==''){alert('Debe Agregar Su Nombre'); return false;}
		if(mail==''){alert('Debe Agregar Su Email'); return false;}
		if(needs==''){alert('Debe Agregar Su Mensaje'); return false;}
		
		
		var oHRcontacto = new HttpObject();
		oHRcontacto.bSynAsyn = false;
		//oHRcontacto.textSend = 'consulta=EnviaContacto&nombre='+nombre+'&mail='+mail+'&phone='+phone+'&needs='+needs;		
		//oHRcontacto.url ='pags/consultas.php';		
		oHRcontacto.url ='pags/consultas.php?consulta=EnviaContacto&nombre='+nombre+'&mail='+mail+'&phone='+phone+'&needs='+needs;
		oHRcontacto.setTypeResponse('javascript');		
		oHRcontacto.Execute();		
		oHRcontacto.textSend = '';
			
	}
	
</script>
</head>

<body onload="Javascript: cargarContenido('pags/_main.html','main');">
<!-- TOP MENU -->
<!-- HEADER -->
<div id="header">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="780" height="325" title="bisystemsolutions">
    <param name="movie" value="swf/MenuBanner.swf" />
    <param name="quality" value="high" />
    <embed src="swf/MenuBanner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="780" height="325" ></embed>
  </object>
</div>
<!-- HEADER -->
	<div id="body">
	<!-- LEFT PANEL -->
		<div id="main">
			
	  </div>
		<!-- RIGHT PANEL -->
	  <div id="divContactForm" >			
		  	<form name="form_contacto">
              <table width="217" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td class="idHeaderCell">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="CustomHeight"><input  name="firstname" id="_firstname" type="text" class="inputField" onKeyPress="return JustAlpha(event);" size="24" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="CustomHeight"><input  name="email" id="_email" type="text" class="inputField" size="24" onBlur="if (Email(this.value)==false){alert('Email Invalido');this.focus();return false;}" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="CustomHeight"><input  name="phone" id="_phone" type="text" class="inputField" size="24" onKeyPress="return JustNumber(event);"/></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="CustomHeight2">&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><textarea name="needs" id="_needs" cols="25" rows="3" ></textarea></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>
				  <input type="button" class="SendButton" value=" " onclick="Javascript: EnviaContacto();" /></td>
                </tr>
              </table>
			</form>
	  </div>
		<br class="spacer" />		
	</div>	
<!-- FOOTER -->
	<div id="footer">		
		<p> 
		Ayuda del sitio| <a href="mailto:soporte@bisystemsolutions.com">Póngase en contacto con soporte</a>| <a href="http://www.bisystemsolutions.com/">Bi-SystemSolutions Inical</a> | Tecnología aplicada <br>
		Desarrollado por <a href="http://www.bisystemsolutions.com/">Bi-SystemSolutions</a>
		</p>
	</div>	
</body>
</html>
