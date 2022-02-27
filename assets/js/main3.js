    window.addEventListener("load",function(){
	document.getElementById("loader").classList.toggle("loader2")
});


function modal1(){
 	var d1 = document.getElementById("modal_1");

 	if (d1.style.display == "none" ) {
 		d1.style.display = "block";
 	}else{
 		d1.style.display = "none";
 	}
 }

/*function close(){
 var D1	= document.getElementById("modal_1");
	if (D1.style.display == "block") {
		D1.style.display = "none";
	}
}*/