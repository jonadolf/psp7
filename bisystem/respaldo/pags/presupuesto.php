<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/styles.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../js/functions.js"></script>
<title>Solicite su Presupuesto</title>
</head>

<body>
<table width="460" height="164" border="0">
<form name="frmpresupuesto" id="frmpresupuesto" method="post" />
 <tr>
    
      <td colspan="3"><div align="center" class="txt3"><h1>Presupuesto</h1> </div></td>
      
  </tr>
    <tr>

     <td width="153" class="txt2">Nombre: </td>
      <td class="txt2"><input name="txtnombre" type="text" id="txtnombre" onKeyPress="return JustAlpha(event)"/></td>
   
    </tr>
    <tr>

     <td width="153" class="txt2">Funsi&oacute;n: </td>
      <td class="txt2"><input name="txtfunsion" type="text" id="txtfunsion" onKeyPress="return JustAlpha(event)"/></td>
     
    </tr>
	<tr>

     <td width="153" class="txt2">Compa&ntilde;ia: </td>
      <td class="txt2"><input name="txtconpania" type="text" id="txtconpania" onKeyPress="return JustAlpha(event)"/></td>
     
    </tr>
	
    <tr>
     
      <td class="txt2">Industria:</td>
      <td class="txt2"><select name="industry" id="industry" class="Textbox_out">

                            <option value="" selected="selected">------------ SELECCIONE   ------------</option>
                            <option value="Publicidad/Mercadotecnia/Relaciones P.">Publicidad/Mercadotecnia/Relaciones P&uacute;blicas</option>
                            <option value="Agricultura">Agricultura</option>
                            <option value="Biotecnologia/Farmaceuticas">Biotecnolog&iacute;a/Farmaceuticas</option>
                            <option value="Computadoras - Hardware">Computadoras - Hardware</option>

                            <option value="Computadoras - Software">Computadoras - Software</option>
                            <option value="Construccion/Contratos Generales">Construcci&oacute;n/Contratos Generales</option>
                            <option value="Asesorias y Consultas">Asesorias y Consultas</option>
                            <option value="Educacion">Educacion</option>
                            <option value="Ventas de equipo y atencion al cliente">Ventas de equipo y atenci&oacute;n al cliente</option>

                            <option value="Servicios financieros">Servicios financieros</option>
                            <option value="Gobierno">Gobierno</option>
                            <option value="Asistencia medica">Asistencia médica</option>
                            <option value="Servicios de Informacion">Servicios de Informaci&oacute;n</option>
                            <option value="Seguros">Seguros</option>
                            <option value="Legal">Legal</option>

                            <option value="Fabricacion">Fabricaci&oacute;n</option>
                            <option value="Multimedia/Entretenimiento/Publicidad">Multimedia/Entretenimiento/Publicidad</option>
                            <option value="No lucrativo">No lucrativo</option>
                            <option value="Inmobiliarias">Inmobiliarias</option>
                            <option value="Restaurantes">Restaurantes</option>
                            <option value="Venta al por   menor">Venta al por   menor</option>

                            <option value="Telecomunicaciones">Telecomunicaciones</option>
                            <option value="Transporte/Logistica">Transporte/Log&iacute;stica</option>
                            <option value="Viajes/Hospedaje">Viajes/Hospedaje</option>
                            <option value="Wholesale">Venta al por mayor</option>
                            <option value="Otros servicios">Otros servicios</option>
                        </select></td>
    
    </tr>
    <tr>
      
      <td class="txt2">Correo Electr&oacutenico: </td>
      <td class="txt2"><input name="txtemail" type="text" id="txtemail" onBlur="if (Email(this.value)==false){alert('Email Invalido');this.focus();return false;}"/></td>
   
    </tr>
	<tr>
     
      <td class="txt2">Tel&eacute;fono: </td>
      <td class="txt2"><input name="txttelefono" type="text" id="txttelefono" onKeyPress="return JustNumber(event);" /></td>
    
    </tr>
	<tr>
    
      <td class="txt2">Direcci&oacute;n: </td>
      <td class="txt2"><input name="txtdireccion" type="text" id="txtdireccion"  onKeyPress="return JustAlpha(event)"/></td>
    
    </tr>
	<tr>
    
      <td class="txt2">Ciudad: </td>
      <td class="txt2"><input name="txtciudad" type="text" id="txtciudad" onKeyPress="return JustAlpha(event)" /></td>
     
    </tr>
	
	<tr>
      
      <td class="txt2">Estado:</td>
      <td class="txt2"><select name="estado" id="estado" >
	         <option value=""SELECTED>---SELECCIONE ---</option>
                          	<option value="USA" >USA
							<option value="AGS" >Aguascalientes
							<option value="BC" >B. California
							<option value="BCS" >B. California Sur
							<option value="CAMP" >Campeche
							<option value="CHPS" >Chiapas
							<option value="CHIH" >Chihuahua
							<option value="COAH" >Coahuila
							<option value="COL" >Colima
							<option value="DF" >D. Federal
							<option value="DGO" >Durango
							<option value="MEX" >E. de M&eacute;xico
							<option value="GTO" >Guanajuato
							<option value="GUE" >Guerrero
							<option value="HGO" >Hidalgo
							<option value="JAL" >Jalisco
							<option value="MICH" >Michoacán
							<option value="MR" >Morelos
							<option value="NAY" >Nayarit
							<option value="NL" >Nuevo León
							<option value="OAX" >Oaxaca
							<option value="PUE" >Puebla
							<option value="QRO" >Quer&eacute;taro
							<option value="QR" >Quintana Roo
							<option value="SLP" >S. Luis Potosí
							<option value="SIN" >Sinaloa
							<option value="SON" >Sonora
							<option value="TAB" >Tabasco
							<option value="TMPS" >Tamaulipas
							<option value="TLAX" >Tlaxcala
							<option value="VER" >Veracruz
							<option value="YUC" >Yucat&aacute;n
							<option value="ZAC" >Zacatecas
                        </select></td>
   
   
</table>
	  
	
	 
	 
	  <table width="460" height="164" border="0">
	  
	    <td colspan="3" ><div align="center" class="txt3"><h3>¿Qu&eacute; Tipo de Servicios Busca en este Momento? </h3></div></td>
  <tr>
    <td colspan="3"><input type="radio" name="radio1" id="DisenioWS" >
      Dise&ntilde;o Completo de su Sitio Web. <br/>
     <input type="radio" name="radio1" id="rediseñoWS" >
      Redise&ntilde;o Completo de su Sitio Web.<br/>
     <input type="radio" name="radio1" id="MantenimientoWS" >
      Mantenimiento o Mejora de su Sitio Web. <br />
     <input type="radio" name="radio1" id="DesarrolloAplicaciones" >
      Desarrollo de Aplicaciones para su Sitio Web.<br/>
      <input type="radio" name="radio1" id="DesarrolloSW" >
      Desarrollo de Software Personalizado.<br/>
    
  </tr>
  <tr>
   
   <td colspan="3" ><div align="center" class="txt3"><h3>¿Podr&aacute; Proporcionarnos Texto e Im&aacute;genes para su Proyecto? </h3></div></td>
   <tr>
   
   <td colspan="3">
     <input type="radio" name="radio2" id="AyudaWS" >
      No, Busc&aacute;mos Ayuda en Todos los Aspectos de Nuestro Sitio Web. <br/>
      <input type="radio" name="radio2" id="Text_sin_Img" >
      Si, Proporcionar&eacute;mos el Texto, sin Im&aacute;genes.<br/>
      <input type="radio" name="radio2" id="Text_e_Img" >
       Si, Proporcionar&eacute;mos el Texto e Im&aacute;genes. <br />
   </tr>
   
    <td colspan="3" ><div align="center" class="txt3"><h3>¿Le Gustar&iacute;a Contar Tambi&eacute;n con Servicio  de Mantenimiento?</h3></div></td>
	<tr>
	<td colspan="3"><input type="radio" name="radio3" id="Mantenimiento" >
      No, Estoy Seguro, Porfavor Surier&aacute;me. <br/>
     <input type="radio" name="radio3" id="Ayuda_suerir" >
      Si, Deseo Mantenimiento Tambi&eacute;n.<br/>
     <input type="radio" name="radio3" id="Ayuda_Mantenimiento" >
       No, Deseo que Algui&eacute;n m&aacute;s nos de Mantenimiento. <br />
	   <input type="radio" name="radio3" id="Ayuda_sin_Mantenimiento" >
       No, Nosotros nos Encargamos del Mantenimiento.
   </tr>
   <tr>
   <td width="460" class="txt2">¿Cu&aacute;l es su Presupuesto para este Proyecto?: </td>
      <td class="txt2"><select name="budget" id="budget" class="Textbox_out">
                          <option value="" selected="selected">---SELECCIONA---</option>
                          <option value="4000">$1,000 - 1,500</option>
                          <option value="5000">$2,000 - 2,500</option>
                          <option value="7000">$3,000 - 3,500</option>
                          <option value="10000">$4,000  +</option>
                        </select></td>
   </tr>
   <td class="txt2"></td>
   <tr>
   <td width="153" class="txt2">Si Busca un Redise&ntilde;o o Mejorar su Sitio Web Actual, por Favor, Indique la URL: </td>
      <td class="txt2">(Por Ejemplo: www.misitio.com)<input type="text" name="txtDireccionUrl" id="txtDireccionUrl"/></td>
      </tr>
	  <tr>
	  
	    <td width="153" class="txt2">¿Ya Registr&oacute; el Nombre el Dominio para Este Sitio Web?</td>
		<td class="txt2"><select name="nombredominio" id="nombredominio" >
	         <option value=""SELECTED>---</option>
                          	<option value="SI" >SI
							<option value="NO" >NO
							</option>
							</option>
							</select>
	  </tr>
	  <tr>
	   <td width="153" class="txt2">¿Ya contrat&oacute; y detall&oacute; lo necesario para los servicios de hosting de este sitio?</td>
		<td class="txt2"><select name="hosting" id="hosting" >
	         <option value=""SELECTED>---</option>
                          	<option value="SI" >SI
							<option value="NO" >NO
							</option>
							</option>
							</select>
	  
	  </tr>
	  <br/>
	  <tr>
	  <td colspan="2" />Describa el Inter&eacute;s Principal de Este Proyecto y Cualquier Requisito.</td>
	    </tr>
		<tr>
	  <td class="txt2"><textarea rows="4" cols="40" name="txtinteres" id="txtinteres" ></textarea></td>
	
	  <tr>
	  <td><input type="button" name="btnPresupuesto" id="btnPresupuesto" value="EVIAR CONSULTA" onclick="
	  	var nombre	=	document.getElementById('txtnombre').value;
          var funsion	=	document.getElementById('txtfunsion').value;
          var compania	=	document.getElementById('txtconpania').value;
          var intrustria=	document.getElementById('industry').value;
          var mail	=	document.getElementById('txtemail').value;
          var telefono	=	document.getElementById('txttelefono').value;
          var direccion	=	document.getElementById('txtdireccion').value;
          var ciudad	=	document.getElementById('txtciudad').value;
	      var radio1	=	document.getElementById('radio1').checked ='false';
	      var radio2	=	document.getElementById('radio2').checked = 'false';
	      var radio3	=	document.getElementById('radio3').checked = 'false';
          var estado	=	document.getElementById('estado').value;
          var budget	=	document.getElementById('budget').value;
          var nombredominio	=	document.getElementById('nombredominio').value;
          var hosting	=	document.getElementById('hosting').value;
          var intereses	=	document.getElementById('txtinteres').value;
		
		  if(nombre==''){alert('Debe Agregar Su Nombre '); return false;}		  
		  if(funsion==''){alert('Debe Agregar Su Funsion'); return false;}
		  if(compania==''){alert('Debe Agregar Su Compania '); return false;}
		  if(mail==''){alert('Debe Agregar Su E-mail '); return false;}
		  if(telefono==''){alert('Debe Agregar Su Teléfono '); return false;}
		  if(direccion==''){alert('Debe Agregar Su direccion '); return false;}
		  if(ciudad==''){alert('Debe Agregar Su ciudad '); return false;}
		  if(radio1==''){alert('Debe Marcar el Servicio que Busca'); return false;}
		  if(radio2==''){alert('Debe Marcar  Si Nos Dará Material para su Sitio Web '); return false;}
		  if(radio3==''){alert('Debe Marcar  Si Mantenimiento para su Sitio Web '); return false;}
		  if(estado==''){alert('Debe Agregar Su Estado '); return false;}
		  if(budget==''){alert('Debe Agregar Su Presupuesto '); return false;}
		  if(intereses==''){alert('Debe Describir El Interés De Su Proyecto'); return false;}
		  
		var oHRpresupuesto = new HttpObject();
		oHRpresupuesto.bSynAsyn = true;
		oHRpresupuesto.textSend ='consulta=EnviaPresupuesto&Nombre='+nombre+'&Funsion='+funsion+'&Compania='+compania+'&Intrustria='+intrustria+'&Email='+mail+'&Telefono='+telefono+'&Direccion='+direccion+'&Ciudad='+ciudad+'&Servicio='+radio1+'&Material'+radio2+'&Mantenimiento'+radio3+'&Estado='+estado+'&Presupuesto='+budget+'&Intereses'+intereses;		
		oHRpresupuesto.url ='pags/consultas.php';
		oHRpresupuesto.setTypeResponse('javascript');
		oHRpresupuesto.Execute();		
		oHRpresupuesto.textSend = '';
	  	"/>
		 </td>
	  </tr>
</table>
	  </form>
</body>
</html>











