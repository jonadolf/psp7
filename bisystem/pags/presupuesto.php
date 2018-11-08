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
<div id="leftPanelpresupuesto">
<table width="460" height="164" border="0" class="vent">
<form name="frmpresupuesto" id="frmpresupuesto" method="post" />
 <tr>
    
      <td colspan="3"><h3 class="presupuesto"> Presupuesto</h3></td>
      
  </tr>
    <tr>

     <td width="153" class="Menu1">Nombre: </td>
      <td class="txt2"><input name="txtnombre" type="text" class="cntChevronList" id="txtnombre" onKeyPress="return JustAlpha(event)"/></td>
   
    </tr>
    <tr>

     <td width="153" class="Menu1">Funsi&oacute;n: </td>
      <td class="txt2"><input name="txtfunsion" type="text" class="cntChevronList" id="txtfunsion" onKeyPress="return JustAlpha(event)"/></td>
     
    </tr>
	<tr>

     <td width="153" class="Menu1">Compa&ntilde;ia: </td>
      <td class="txt2"><input name="txtconpania" type="text" class="cntChevronList" id="txtconpania" onKeyPress="return JustAlpha(event)"/></td>
     
    </tr>
	
    <tr>
     
      <td class="Menu1" >Industria:</td>
      <td class="txt2"><select name="industry" id="industry" class="cntChevronList">

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
      
      <td class="Menu1">Correo Electr&oacute;nico: </td>
      <td class="txt2"><input name="txtemail" type="text" class="cntChevronList" id="txtemail" onBlur="if (Email(this.value)==false){alert('Email Invalido');this.focus();return false;}"/></td>
   
    </tr>
	<tr>
     
      <td class="Menu1">Tel&eacute;fono: </td>
      <td class="txt2"><input name="txttelefono" type="text" class="cntChevronList" id="txttelefono" onKeyPress="return JustNumber(event);" maxlength="12"/></td>
    
    </tr>
	<tr>
    
      <td class="Menu1">Direcci&oacute;n: </td>
      <td class="txt2"><input name="txtdireccion" type="text" class="cntChevronList" id="txtdireccion" onBlur="if (web(this.value)==false){alert('web invalida');this.focus();return false;}"/></td>
    
    </tr>
	<tr>
    
      <td class="Menu1">Ciudad: </td>
      <td class="txt2"><input name="txtciudad" type="text" class="cntChevronList" id="txtciudad" onKeyPress="return JustAlpha(event)" /></td>
     
    </tr>
	
	<tr>
      
      <td class="Menu1">Estado:</td>
      <td class="txt2"><select name="estado" class="cntChevronList" id="estado" >
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
                        </select>
						</td>
    </tr>
	<tr>
   
 <td colspan="2" ><h5 class="presupuesto">&iquest;Qu&eacute; Tipo de Servicios Busca en este Momento? </h5></td>

  <tr>
    <td colspan="3" class="Menu1"><input type="radio" name="radio1" id="DisenioWS" value"Diseño Completo de su Sitio Web."  >
      Dise&ntilde;o Completo de su Sitio Web. <br/>
     <input type="radio" name="radio1" id="rediseñoWS" value="Rediseño Completo de su Sitio Web.">
      Redise&ntilde;o Completo de su Sitio Web.<br/>
     <input type="radio" name="radio1" id="MantenimientoWS" value=" Mantenimiento o Mejora de su Sitio Web." >
      Mantenimiento o Mejora de su Sitio Web. <br />
     <input type="radio" name="radio1" id="DesarrolloAplicaciones"value="Desarrollo de Aplicaciones para su Sitio Web.">
      Desarrollo de Aplicaciones para su Sitio Web.<br/>
      <input type="radio" name="radio1" id="DesarrolloPersonalizado" value="Desarrollo de Software Personalizado." >
      Desarrollo de Software Personalizado.<br/>
  </tr>
  
  <tr>
   <td colspan="2" ><h5 class="presupuesto">&iquest;Podr&aacute; Proporcionarnos Texto e Im&aacute;genes para su Proyecto? </h5></td>
   <tr>
   
   <td colspan="3" class="Menu1">
     <input type="radio" name="radio2" id="AyudaWS" value=" No, Buscámos Ayuda en Todos los Aspectos de Nuestro Sitio Web." >
      No, Busc&aacute;mos Ayuda en Todos los Aspectos de Nuestro Sitio Web. <br/>
      <input type="radio" name="radio2" id="Text_sin_Img" value="Si, Proporcionarémosmos el Texto, sin Imágenes.">
      Si, Proporcionar&eacute;mos el Texto, sin Im&aacute;genes.<br/>
      <input type="radio" name="radio2" id="Text_e_Img" value="Si, Proporcionarémos el Texto e Imá;genes.">
       Si, Proporcionar&eacute;mos el Texto e Im&aacute;genes. <br />
	   </td>
   </tr>
   
    <td colspan="3" ><h5 class="presupuesto">&iquest;Le Gustar&iacute;a Contar  con Servicio  de Mantenimiento?</h5></td>
	<tr>
	<td colspan="3" class="Menu1"><input type="radio" name="radio3" id="Mantenimiento" value="No, Estoy Seguro, Porfavor Surieránme." >
      No, Estoy Seguro, Porfavor Surier&aacute;me. <br/>
     <input type="radio" name="radio3" id="Ayuda_suerir" value="Si, Deseo Mantenimiento También." >
      Si, Deseo Mantenimiento Tambi&eacute;n.<br/>
     <input type="radio" name="radio3" id="Ayuda_Mantenimiento" value="No, Deseo que Alguién más nos de Mantenimiento." >
       No, Deseo que Algui&eacute;n m&aacute;s nos de Mantenimiento. <br />
	   <input type="radio" name="radio3" id="Ayuda_sin_Mantenimiento" value="No, Nosotros nos Encargamos del Mantenimiento." >
       No, Nosotros nos Encargamos del Mantenimiento.
	   </td>
   </tr>
   <tr>
  
   <td width="460" class="Menu1">&iquest;Cu&aacute;l es su Presupuesto para este Proyecto?: </td>
      <td class="txt2"><select name="budget" id="budget" class="cntChevronList">
                          <option value="" selected="selected">---SELECCIONA---</option>
                          <option value="$1,000 - 1,500">$1,000 - 1,500</option>
                          <option value="$2,000 - 2,500">$2,000 - 2,500</option>
                          <option value="$3,000 - 3,500">$3,000 - 3,500</option>
                          <option value="$4,000  +">$4,000  +</option>
                        </select></td>
   </tr>
   <td class="txt2"></td>
   <tr>
   <td width="153" class="Menu1">Si Busca un Redise&ntilde;o o Mejorar su Sitio Web Actual, por Favor, Indique la URL: </td>
      <td class="Menu1">(Por Ejemplo: www.misitio.com)<input name="txtDireccionUrl" type="text" class="cntChevronList" id="txtDireccionUrl" onBlur="if (validaURLs(this.value)==false){alert('La dirección no parece válida...');this.focus();return false;}"/></td>
      </tr>
	  <tr>
	  
	    <td width="153" class="Menu1">&iquest;Ya Registr&oacute; el Nombre el Dominio para Este Sitio Web?</td>
		<td class="Menu1"><select name="nombredominio" class="cntChevronList" id="nombredominio" >
	         <option value=""SELECTED>---</option>
                          	<option value="SI" >SI
							<option value="NO" >NO
							</option>
							</option>
							</select>
		</td>
	  </tr>
	  <tr>
	   <td width="153" class="Menu1">&iquest;Ya contrat&oacute; y detall&oacute; lo necesario para los servicios de hosting de este sitio?</td>
		<td class="txt2"><select name="hosting" class="cntChevronList" id="hosting" >
	         <option value=""SELECTED>---</option>
                          	<option value="SI" >SI
							<option value="NO" >NO
							</option>
							</option>
							</select>
		</td>
	  
	  </tr>
	
	  <tr>
	  <td colspan="2" class="Menu1"/>Describa el Inter&eacute;s Principal de Este Proyecto y Cualquier Requisito.</td>
	    </tr>
		<tr>
	  <td class="Menu1" ><textarea name="txtinteres" cols="40" rows="4" class="cntChevronList" id="txtinteres" ></textarea></td>
	
	  <tr>
	  <td class="boton3"><input type="button" name="btnPresupuesto" id="btnPresupuesto" value="EVIAR CONSULTA" onclick="
	  	var nombre	=	document.getElementById('txtnombre').value;
          var funsion	=	document.getElementById('txtfunsion').value;
          var compania	=	document.getElementById('txtconpania').value;
          var intrustria=	document.getElementById('industry').value;
          var mail	=	document.getElementById('txtemail').value;
          var telefono	=	document.getElementById('txttelefono').value;
          var direccion	=	document.getElementById('txtdireccion').value;
          var ciudad	=	document.getElementById('txtciudad').value;
		  var radio1	=	RadioValor(document.frmpresupuesto.radio1);
	      var radio2	=	RadioValor(document.frmpresupuesto.radio2);
	      var radio3	=	RadioValor(document.frmpresupuesto.radio3);
          var estado	=	document.getElementById('estado').value;
          var budget	=	document.getElementById('budget').value;
		  var direccionUrl=	document.getElementById('txtDireccionUrl').value; 
          var nombredominio=	document.getElementById('nombredominio').value;
          var hosting	=	document.getElementById('hosting').value;
          var intereses=	document.getElementById('txtinteres').value;
		
		  if(nombre==''){alert('Debe Agregar Su Nombre '); return false;}		  
		  if(funsion==''){alert('Debe Agregar Su Funsion'); return false;}
		  if(compania==''){alert('Debe Agregar Su Compania '); return false;}
		  if(mail==''){alert('Debe Agregar Su E-mail '); return false;}
		  if(telefono==''){alert('Debe Agregar Su Teléfono '); return false;}
		  if(direccion==''){alert('Debe Agregar Su direccion '); return false;}
		  if(ciudad==''){alert('Debe Agregar Su ciudad '); return false;}
		  if(radio1.value==''){alert('Debe Marcar el Servicio que Busca'); return false;}
		  if(radio2.value==''){alert('Debe Marcar  Si Nos Dará Material para su Sitio Web '); return false;}
		  if(radio3.value==''){alert('Debe Marcar  Si Mantenimiento para su Sitio Web '); return false;}
		  if(estado==''){alert('Debe Agregar Su Estado '); return false;}
		  if(budget==''){alert('Debe Agregar Su Presupuesto '); return false;}
		  if(nombredominio==''){alert('Debe Marcar si ya Cuenta Con un Dominio Web'); return false;}
		  if(hosting==''){alert('Debe Marcar Si Ya Cuenta Con Servicio de Hostin (Alojamiento Web)'); return false;}
		  if(intereses==''){alert('Debe Describir El Interés De Su Proyecto'); return false;}
		  
		var oHRpresupuesto = new HttpObject();
		oHRpresupuesto.bSynAsyn = true;	       		oHRpresupuesto.textSend=oHRpresupuesto.textSend='consulta=EnviaPresupuesto&Nombre='+nombre+'&Funsion='+funsion+'&Compania='+compania+'&Intrustria='+intrustria+'&Email='+mail+'&Telefono='+telefono+'&Direccion='+direccion+'&Ciudad='+ciudad+'&Servicio='+radio1+'&Material='+radio2+'&Mantenimiento='+radio3+'&Estado='+estado+'&Presupuesto='+budget+'&direccionUrl='+direccionUrl+'&nombredominio='+nombredominio+'&Hosting='+hosting+'&Intereses='+intereses;	
		//alert(radio2);	
		oHRpresupuesto.url ='pags/consultas.php';
		oHRpresupuesto.setTypeResponse('javascript');
		oHRpresupuesto.Execute();		
		oHRpresupuesto.textSend = '';
		
	  	"/>
	    </td>
	  </tr>
</table>
	  </form>
	  </div>
	  
</body>
</html>











