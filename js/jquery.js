$(document).ready(init);
//*----------------------------------------------Funcion que asigna eventos----------------------------------------//
function init()
{
	tooltip();
	//$('#boton').hide();
    $("#name").keyup(validaName); 
    $("#email").keyup(validaEmail); 
    $("#btnNext").click(validateForm); 
    
function validateForm()
{ 
  var name=$("#name").val();
  var email=$("#email").val();
  var number = $('#number').val();
  validaName(),validaEmail(), validateNumber(); 

  if(validaName() && validaEmail() && validateNumber())
  {
    localStorage.setItem('number',number);
    localStorage.setItem('Name',name);
    localStorage.setItem('Email',email);
	  window.location = 'gracias.php';
  }
  else
  {
	  //alert('no nns');
  }
}
function isAlphabetic(cadena)
{
  return(cadena.match(/^[a-zA-Z\s]*$/));
}

function isEmail(email) 
{
  return(email.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/));
}

function validaName() 
{
  var container=$("#container");
  var name=$("#name");
  var isValid=false;
  if(name.val().length >0 && name.val().length <=30 && isAlphabetic(name.val()))
  {  
    container.html("<small style='color:green;'>Campo correctamente llenado ✔</small>");
    name.css('backgroundColor',"white");
    isValid=true;
  }
  else{ 
    container.html("<small style='color:red;'>Debes escribir solo letras , max 30 caracteres</small>");
    name.css('backgroundColor',"#FFDDE5");
  }
  return isValid;
}


function validaEmail() 
{ 
  var containerEmail=$("#containerEmail");
  var email=$("#email"); 
  var isValid=false;
  if(email.length >0 && email.length <=50 && isEmail(email.val()))
  {  
    containerEmail.html("<small style='color:green;'>Formato valido ✔</small>");
    email.css('backgroundColor',"white");
    isValid=true;
  }
  else
  {
    containerEmail.html("<small style='color:red;'>Invalido Ejm: name@domain.com, max 50 caracteres</small>");
    email.css('backgroundColor',"#FFDDE5");
  }
  return isValid;
}

// -----------validar numero --------------------
function isNumber(number){
	//return(number.match(/^\d{9}$/));
	return(/^([0-9])*$/.test(number));
}

function validateNumber()
{
	var isValid = false;
	var number = $('#number');
	if(number.length >0 && number.length <=9 && isNumber(number.val()))
	{
		number.css('backgroundColor',"white");
		isValid = true;
	}
	else
	{
		 number.css('backgroundColor',"#FFDDE5");
	}
	 return isValid;
}

function tooltip(){
	$('[data-toggle="tooltip"]').tooltip(); 
}
