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
	$email = 'jonadolf@hotmail.com,soporte@bisystemsolutions.com';
	$codigohtml = "Nombre:&#09;".$_POST['Nombre'];
 	$codigohtml.= "<br>Funsi�n:&#09;".$_POST['Funsion'];
 	$codigohtml.= "<br>Compa�ia:&#09; ".$_POST['Compania'];
 	$codigohtml.= "<br>Industria:&#09;".$_POST['Intrustria'];
 	$codigohtml.= "<br>Email:&#09;".$_POST['Email'];
 	$codigohtml.= "<br>Tel�fono:&#09;".$_POST['Telefono'];
 	$codigohtml.= "<br>Direcci�n:&#09;".$_POST['Direccion'];
 	$codigohtml.= "<br>Ciudad:&#09;".$_POST['Ciudad'];
	$codigohtml.= "<br>Estado:&#09;".$_POST['Estado'];
	$codigohtml.= "<br>Tipo de Servicio:&#09;".$_POST['Servicio'];
	$codigohtml.= "<br>Texto E Im�genes:&#09;".$_POST['Material'];
	$codigohtml.= "<br>Mantenimiento:&#09;".$_POST['Mantenimiento'];
  	$codigohtml.= "<br>Presupuesto con el que cuento:&#09;".$_POST['Presupuesto'];
	$codigohtml.= "<br>Direcci�n del Sitio Actual de la Empresa:&#09;".$_POST['direccionUrl'];
	$codigohtml.= "<br>La Empresa cuenta con un Dominio:&#09;".$_POST['nombredominio'];
 	$codigohtml.= "<br>La Empresa Cuenta con Hosting:&#09;".$_POST['Hosting'];
 	$codigohtml.= "<br>Inter�s Del Proyecto:&#09;".$_POST['Intereses'];
 	$codigohtml.= "<br>Enviado el &#09;" . date('d/m/Y', time());
 	$asunto = 'Presupuesto';
 	$cabeceras = "Content-type: text/html\r\n";
 	 	
	mail($email,$asunto,$codigohtml,$cabeceras);
	$strBusqueda.="alert('El Ticket Se Envio Correctamente En Poco Tiempo Le Atenderemos.');";	
	$strBusqueda.="window.location='http://www.bisystemsolutions.com';";

	break;
	
	
	
}

echo $strBusqueda ;



?>