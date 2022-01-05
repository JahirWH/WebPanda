let nombre = prompt("Cual es tu nombre")

alert("Bienvenido " + nombre)

let contraseña = prompt("Contraseña");

function actualizar(){location.reload(true);}

if (contraseña !== "Naruto") {
	alert(contraseña + " incorrecta");
	location.reload()

}
if (contraseña === "Naruto"){
	alert("Correcta");
		setInterval("actualizar()",130000);
	
}

