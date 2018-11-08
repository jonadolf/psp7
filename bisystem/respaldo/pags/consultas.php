<?PHP // consultas php por ajax 
session_start();
ob_start();
if (trim($_GET[consulta])!="")
		$consulta = $_GET[consulta];
else
		$consulta = $_POST[consulta];
$strBusqueda ="";

switch ($consulta)
{	
	// query para mandar los datos de contactar
	case "EnviaContacto":
			
			$strBusqueda = '';		
						
			$email = 'soporte@bisystemsolutions.com';						
			$codigohtml = "Nombre: ".$_GET[nombre]."<br>Email: ".$_GET[mail]."<br> Tel: ".$_GET[phone]."<br> Msj: <br>".$_GET[needs];
			$asunto = 'Contactar User';
			$cabeceras = "Content-type: text/html\r\n";			
			mail($email,$asunto,$codigohtml,$cabeceras);
								
			$strBusqueda.="alert('El Ticket Se Envio Correctamente En Poco Tiempo Le Atenderemos.');";				
			$strBusqueda.="document.getElementById('_firstname').value='';";				
			$strBusqueda.="document.getElementById('_email').value='';";				
			$strBusqueda.="document.getElementById('_phone').value='';";				
			$strBusqueda.="document.getElementById('_needs').value='';";				
			
	break;	
	
	// query para mandar los datos de contactar
	case "EnviaContactoPHP":
			$strBusqueda = '';					
			$email = 'soporte@bisystemsolutions.com';						
			
			$codigohtml = "Contacto desde menu <br> Nombre: ".$_POST['nombre'];
			$codigohtml .="<br>Email: ".$_POST['correo'];
			$codigohtml .="<br> Tel: ".$_POST['tel'];
			$codigohtml .="<br> Empresa: ".$_POST['empresa'];
			$codigohtml .="<br> Msj: <br>".$_POST['comentarios'];
			
			$asunto = 'Contactar User';
			$cabeceras = "Content-type: text/html\r\n";
			mail($email,$asunto,$codigohtml,$cabeceras);										
			$strBusqueda.="alert('Los Datos Se Enviaron Correctamente, En Poco Tiempo Le Atenderemos.');";
			$strBusqueda.="window.location='http://www.bisystemsolutions.com';";				
			
	break;	
	case "EnviaPresupuesto":
	$strBusqueda = '';
	$email = 'jmanuelcc_29@hotmail.com';
	$codigohtml = "Nombre:".$_POST['Nombre'];
 	$codigohtml.= "<br>Funsión:".$_POST['Funsion'];
 	$codigohtml.= "<br>Compañia: ".$_POST['Conpania'];
 	$codigohtml.= "<br>Industria:".$_POST['Industry'];
 	$codigohtml.= "<br>Email:".$_POST['Email'];
 	$codigohtml.= "<br>Teléfono:".$_POST['Telefono'];
 	$codigohtml.= "<br>Dirección:".$_POST['Direccion'];
 	$codigohtml.= "<br>Ciudad:".$_POST['Ciudad'];
	$codigohtml.= "<br>Tipo de Servicio:".$_POST['Radio1'];
	$codigohtml.= "<br>Texto E Imágenes:".$_POST['Radio2'];
	$codigohtml.= "<br>Mantenimiento:".$_POST['Radio3'];
 	$codigohtml.= "<br>Estado:".$_POST['Estado'];
  	$codigohtml.= "<br>Presupuesto con el que cuento:".$_POST['Budget'];
 	$codigohtml.= "<br>Hosting:".$_POST['Hosting'];
 	$codigohtml.= "<br>Interés:".$_POST['Interes'];
 	$codigohtml.= "<br>Enviado el " . date('d/m/Y', time());
 	$asunto = 'Presupuesto';
 	$cabeceras = "Content-type: text/html\r\n";
 	 	
	mail($email,$asunto,$codigohtml,$cabeceras);
	$strBusqueda.="alert('El Ticket Se Envio Correctamente En Poco Tiempo Le Atenderemos.');";	
	$strBusqueda.="window.location='http://www.bisystemsolutions.com';";

	break;
	
	
	
}

echo $strBusqueda ;



?>