
	// window.location.href ="https://www.google.com/"

function login(){ 

let usuario = document.getElementById("usuario").value; 
 
let contraseña = document.getElementById("contraseña").value; 

if (usuario == "paco" && contraseña == "come"){ 

alert("Contraseña verificada");
}

 if  (usuario !=="paco" && contraseña !== "come"){
	alert("incorrecta");
} 
// if (true) {window.location.href ="https://www.google.com/"
// };

} 


// if (usuario=="" && password=="") { 
// window.location="errorpopup.html"; 
// } 