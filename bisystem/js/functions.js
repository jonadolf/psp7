// JavaScript Document
// Esta funcion siver para crear el objeto de ajax
function nuevoAjax()
{
	var xmlhttp=false; 
	try { 
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); 
	} catch (e) { 
		try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } 
		catch (E) { xmlhttp = false; } 
	}if (!xmlhttp && typeof XMLHttpRequest!='undefined') { xmlhttp = new XMLHttpRequest();}
	return xmlhttp;
}

// funcion para cargar el contenido de las paginas a mostrar
function cargarContenido(url,objDiv)
{
	var contenedor;
	contenedor = document.getElementById(objDiv);
	ajax=nuevoAjax();
	ajax.open("GET", url, true);	
	ajax.onreadystatechange=function() 
	{
		if (ajax.readyState == 4 )	
			contenedor.innerHTML = ajax.responseText;	
	}
	ajax.send(null)	
}

// funciona para popups
function abrirModal(url,alto,ancho,nombre)
{ 		
			var caracteristicas ='';									
			var winl = (screen.width) ? (screen.width-ancho)/2 : 0; 
    	var wint = (screen.height) ? (screen.height-alto)/2 : 0;
    	if (nombre == '')
    		nombre='nueva'
	    caracteristicas = 'height='+ alto +', width='+ ancho +', top = '+wint+', left='+winl+',status=0, resizable=0, scrollbars=2, help=0, modal=1, dialog=1';	    
      Ventana= window.open(url,nombre,caracteristicas);
      Ventana.moveTo(winl,wint);
      Ventana.focus();      
}



/**
* Esta clase nos ayuda a interactuar con el objeto XMLHttpRequest, que sirve para "ejecutar" archivos de asp desde 
* JavaScript y tener un resultado por medio de ResponseText que se dio en la pagina de asp y poder manipularlo desde JS.
* Propiedades:
*	- HttpObject.url: tipo String, es la ruta relativa del ASP a ejecutar.
*	- HttpObject.method: tipo String, es el metodo con el cual se ejecutara el ASP.
*	- typeResponse: tipo String, nos sirve para poner el tipo de forma en la que quiero que la clase me regrese el
*					resultado del ASP. Ejemplo: String, ComboBox, TextBox, etc.
*	- objResponseId: tipo String, este es el nombre del objeto en el cual se regresara el resultado del ASP.
*	- XmlHttp: tipo Object, es el objeto XMLHttpRequest.
*	- strAction (tiene metodo Set y Get): tipo String, nos sirve para pasar algun tipo de accion que va a ser el objResponse en el evento
				 onClick (aplica solo para algunos typeResponse)
*	- objTxtId (tiene metodo Set y Get): tipo String, es el id del objeto que va a guardar el Valor de la busqueda (ej.: idColonia=16144)
*	- objValId (tiene metodo Set y Get): tipo String, es el id del objeto que va a guardar el Texto de la busqueda (ej.: Colonia='Jardines de San Ignacio')
*	- charSeparationOption (tiene metodo Set y Get): tipo String, es la cadena que va a separar las opciones de la busqueda que se realizo (ej.: option|option)
*	- charSeparationValue (tiene metodo Set y Get): tipo String, es la cadena que va a separar los valores de los textos en las opciones (ej.: value|text)
* Metodos:
*	- HttpObject.setTypeResponse(parametro1:String): tipo valor retorno Void, asigna el parametro a la variable typeResponse.
*	- HttpObject.getTypeResponse(): tipo valor retorno String, obtiene el valor de la variable typeResponse.
*	- HttpObject.setObjResponseId(parametro1:String): tipo valor retorno Void, asigna el nombre del objeto donde se regresara
													  el resultado de la busqueda a la variable objResponseId.
*	- HttpObject.getObjResponseId(): tipo valor retorno String, regresa el valor de la variable objResponseId
*	- HttpObject.Execute(): tipo valor retorno Void, manda a ejecular el archivo ASP.
*	- HttpObject.GetResponse(): tipo valor retorno Void, regresa el valor del objeto XMLHttpRequest.responseText a 
*								el objResponse.
**/
function HttpObject (){
	
	this.url = '';
	this.method = 'POST';
	this.bSynAsyn = true;
	this.textSend = '';
	var charSeparateOption = '^';
	var charSeparateValue = '~';
	var typeResponse = 'textbox';
	var objResponseId;
	var strAction = '';
	var strCboSelectedValue = '';
	var XmlHttp = false;
	
	// En caso de ser typeResponse = div, se declaran las variables de objTxtId, objValId
	var objTxtId = new String();
	var objValId = new String();
	var ids = ['Msxml2.XMLHTTP.5.0','Msxml2.XMLHTTP.4.0','Msxml2.XMLHTTP.3.0','Msxml2.XMLHTTP','Microsoft.XMLHTTP'];
		
	if ((typeof window.XMLHttpRequest != 'undefined' || typeof window.ActiveXObject != 'undefined')){
		try {
			XmlHttp = new XMLHttpRequest();
		} catch (e1) {
			for(var i=0; !XmlHttp && i<ids.length; i++) {
			    try { XmlHttp = new ActiveXObject(ids[i]); }
			    catch(ex) { xmlhttp = false; }
			}
		}
	}
		
	this.setTypeResponse = function (strType) { typeResponse = strType.toString().toLowerCase(); }
	this.getTypeResponse = function () { return(typeResponse); }
		
	this.setObjResponseId = function (strObjResponse) { objResponseId = strObjResponse; }
	this.getObjResponseId = function () { return(objResponseId); }
	
	this.setObjTxtId = function (strObjTxt) { objTxtId = strObjTxt; }
	this.getObjTxtId = function () { return(objTxtId); }
	
	this.setObjValId = function (strObjVal) { objValId = strObjVal; }
	this.getObjValId = function () { return(objValId); }
	
	this.setCharSeparateOption = function (strCSO) { charSeparateOption = strCSO; }
	this.getCharSeparateOption = function () { return(charSeparateOption); }
	
	this.setCharSeparateValue = function (strCSV) { charSeparateValue = strCSV; }
	this.getCharSeparateValue = function () { return(charSeparateValue); }
	
	this.setStrAction = function (strAct) { strAction = strAct; }
	this.getStrAction = function () { return(strAction); }
	
	this.setStrCboSelectedValue = function (strSelVal) { strCboSelectedValue = strSelVal; }
	this.getStrCboSelectedValue = function () { return(strCboSelectedValue); }
	
	this.GetResponse = function () {
		try {
			if (XmlHttp.readyState == 4) {					
				if (XmlHttp.status == 200) {				
					var strResponseText = new String(XmlHttp.responseText);					
					//alert(escape(strResponseText));
					//alert(unescape(strResponseText));
					switch (typeResponse){
						case 'string':
							objResponse = strResponseText;
							break;
						case 'textbox':
							document.getElementById(objResponseId).value = strResponseText;
							break;
						case 'combobox':
							var contX = 0;
							if (strResponseText.length > 0) {
								var arrOptions = unescape(strResponseText).toString().split(charSeparateOption);
								var arrValueText;
								
								document.getElementById(objResponseId).options.length = 0;
								for (contX = 0; contX < arrOptions.length; contX++){
									arrValueText = arrOptions[contX].toString().split(charSeparateValue);
									var objOption = new Option(arrValueText[1], arrValueText[0], false, false);
									document.getElementById(objResponseId).options[contX] = objOption;
								}
							}
							else {
								var objOption = new Option('No se encontro.', '', false, false);
								document.getElementById(objResponseId).options[0] = objOption;
								contX = 1;
							}
							if (contX < 10){
								document.getElementById(objResponseId).size = contX;
							}
							else {
								document.getElementById(objResponseId).size = 10;
							}
							setTimeout(document.getElementById(objResponseId).focus(),350);
							document.getElementById(objResponseId).options.selectedIndex = 0;
							break;
						case 'altacatalogo':
							var contX = 0;
							if (strResponseText.length > 0) {
								var arrOptions = unescape(strResponseText).toString().split(charSeparateOption);
								var arrValueText;
								alert (strResponseText);
								document.getElementById(objResponseId).options.length = 0;
								
								for (contX = 0; contX < arrOptions.length; contX++){
									arrValueText = arrOptions[contX].toString().split(charSeparateValue);
									var objOption = new Option(arrValueText[1], arrValueText[0], false, false);
									document.getElementById(objResponseId).options[contX] = objOption;
								}
							}
							
							document.getElementById(objResponseId).focus();
							document.getElementById(objResponseId).options.selectedIndex = 0;
							break;
						case 'div':
							var strDivs = new String();
							if (strResponseText.length > 0) {
								var arrOptions = strResponseText.split(charSeparateOption);
								var arrValueText;
								var contX = 0;
								
								for (contX = 0; contX < arrOptions.length; contX++){
									arrValueText = arrOptions[contX].toString().split(charSeparateValue);
									strDivs += '<div id="' + objResponseId + contX + '" style="width:100%;" value="' + arrValueText[0] + '" onMouseOver="javascript: this.style.background = \'#E5E7E9\'" onMouseOut="javascript: this.style.background = \'\'" onClick="javascript: CboAjaxSeleccionaOp(this, \'' + objResponseId + '\', \'' + objTxtId + '\', \'' + objValId + '\', \'' + strAction + '\');">' + arrValueText[1] + '</div>';
								}
							}
							else {
								strDivs += '<div id="' + objResponseId + '0" style="width:100%;" value="" onMouseOver="javascript: this.style.background = \'#E5E7E9\'" onMouseOut="javascript: this.style.background = \'\'" onClick="javascript: CboAjaxSeleccionaOp(this, \'' + objResponseId + '\', \'' + objTxtId + '\', \'' + objValId + '\', \'\');">No se encontraron datos.</div>';
							}
							document.getElementById(objResponseId).innerHTML = strDivs;
							break;
						case 'javascript':
							//alert(unescape(strResponseText.replace("'","\'").toString().replace('Telefono', 'TelÈfono')));							
							if (strResponseText.length > 0) {
								eval(unescape(strResponseText));
							}
							break;
					}
				}
			}
		} catch (e1) {
			//No hace nada
			//alert('catch:->' + e1.number + '<->' + e1.name + '<->' + e1.description + '<->' + e1.message + '<-');
		}
	}
		
	this.Execute = function () {  	
  if (this.textSend==''){   
   XmlHttp.open('GET', this.url, this.bSynAsyn);  
   XmlHttp.onreadystatechange = this.GetResponse;    
   XmlHttp.send(null);
  }
  else{   			
   		 XmlHttp.open('POST', this.url, this.bSynAsyn);     
			 XmlHttp.onreadystatechange = this.GetResponse;
			 XmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			 XmlHttp.setRequestHeader("Content-length", this.textSend.length);
			 XmlHttp.setRequestHeader("Connection", "close");
			 XmlHttp.send(this.textSend);		 
  } 
 }
 
}




/*====================	Sustituye los Enters en los text area por <br>	=======================*/
function ReplaceEnters(texto, conbr) {
	//para que funcione en IE y Firefox
	var nl=document.all?String.fromCharCode(13):"\n";
	if (conbr) { 	
		while(texto.indexOf(nl)>=0){
			texto = texto.replace(nl, "<br/>");
			/*en IE aunque remplaces los char(13) los saltos se mantienen, debes hacer esto*/
			if(document.all)  texto = texto.replace("\n", "");
		}
	} else {
		while(texto.indexOf("<br/>")>=0){
			texto = texto.replace("<br/>",nl);
		}
	}
	return texto;
}

// validacion de numeros y letras	
function JustAlphaNumberGuion(e){
	keypress = (document.all) ? e.keyCode : e.which; // 2
 	keychar = String.fromCharCode(keypress);
 	if (keypress == 8) {
 		return true;
 	}
 	numcheck = /[a-zA-ZÒ—0-9¡…Õ”⁄·ÈÌÛ˙\s - #]/;
 	return numcheck.test(keychar)
}

// numeros y letras acentuadas
//para explorer y firefox
function JustAlphaNumber(e){
	keypress = (document.all) ? e.keyCode : e.which; // 2
 	keychar = String.fromCharCode(keypress);
 	if (keypress == 8) {
 		return true;
 	}
 	numcheck = /[a-zA-ZÒ—0-9¡…Õ”⁄·ÈÌÛ˙\s]/;
 	return numcheck.test(keychar);
}

// valida email
function Email(txtemail) {
	if(txtemail.length > 0)
	{
		var email=/^[A-Za-z0-9][\w-.]+@[A-Za-z0-9]([\w-.]+[A-Za-z0-9]\.)+([A-Za-z]){2,4}$/i;
		return (email.test(txtemail));
 }
}

// validacion de numeros
function JustNumber(e){
	keypress = (document.all) ? e.keyCode : e.which; // 2
	if(keypress==8 || keypress==0 || keypress==13) return true;
	keychar = String.fromCharCode(keypress);
	numcheck = /\d/;
	return numcheck.test(keychar);	
}

// validacion de letras
function JustAlpha(e){
	keypress = (document.all) ? e.keyCode : e.which; // 2
 	keychar = String.fromCharCode(keypress);
 	if (keypress == 8) {
 		return true;
 	}
 	numcheck = /[a-zA-ZÒ—¡…Õ”⁄·ÈÌÛ˙\s]/;
 	return numcheck.test(keychar);
}


// trim en javascript
function trim(cadena) 
{ 
    for(i=0; i<cadena.length; ) 
    { 
        if(cadena.charAt(i)==" ") 
            cadena=cadena.substring(i+1, cadena.length); 
        else 
            break; 
    } 

    for(i=cadena.length-1; i>=0; i=cadena.length-1) 
    { 
        if(cadena.charAt(i)==" ") 
            cadena=cadena.substring(0,i); 
        else 
            break; 
    } 
     
    return cadena; 
}



//funsion valida DIRECCION URL	
function validaURLs(url) {
var re=/^w+(\.\w+)*\.\w{2,3}$/;
return re.test(url);
} 

//valida los radiobutton en la pagina PRESUPUESTOS
function RadioValor(ctrl)
{
    for(i=0;i<ctrl.length;i++)
        if(ctrl[i].checked) return ctrl[i].value;
}