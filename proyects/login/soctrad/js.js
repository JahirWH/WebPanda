// window.onload = function() {

// visor=document.getElementById("reloj"); //localizar pantalla del reloj
// //asociar eventos a botones: al pulsar el botón se activa su función.
// document.cron.boton1.onclick = activo; 
// document.cron.boton2.onclick = pausa;
// document.cron.boton1.disabled=false;
// document.cron.boton2.disabled=true;
// //variables de inicio:
// var marcha=0; //control del temporizador
// var cro=0; //estado inicial del cronómetro.

// }

window.addEventListener("load",function(){
    document.getElementById("lo").classList.toggle("loading2")
});




// obtener ip


function get_ip(obj){
    document.getElementById('ipId').innerHTML = obj.ip;


}

// boton de la camara 
   function showcam(){
    var elemento = document.getElementsByClassName("cameras_img");
for(var i = 0; i < elemento.length; i++)
    elemento[i].className += " flex";

    var d1 = document.getElementById("back1");
    var d2 = document.getElementById("back2");
    var d3 = document.getElementById("back3");
    var d4 = document.getElementById("back4");
    var d5 = document.getElementById("back5");
    var d6 = document.getElementById("back6");
    var d7 = document.getElementById("back7");
    var d8 = document.getElementById("back8");
    var d9 = document.getElementById("back9");
    var d10 = document.getElementById("back10");
    var d11 = document.getElementById("back11");
    var d12 = document.getElementById("back12");
    var d13 = document.getElementById("back13");
    var d14 = document.getElementById("back14");
    var d15 = document.getElementById("back15");
    var d16 = document.getElementById("back16");
    var d17 = document.getElementById("back17");
    var d18 = document.getElementById("back18");
    var d19 = document.getElementById("back19");
    var d20 = document.getElementById("back20");  
    var d21 = document.getElementById("back21");
    var d22 = document.getElementById("back22");
    var d23 = document.getElementById("back23");
    var d24 = document.getElementById("back24");



    if (1<4) {
        d1.classList.add("back1");
        d2.classList.add("back2");
        d3.classList.add("back3");
        d4.classList.add("back4");
        d5.classList.add("back5");
        d6.classList.add("back6");
        d7.classList.add("back7");
        d8.classList.add("back8");
        d9.classList.add("back9");
        d10.classList.add("back10");
        d11.classList.add("back11");
        d12.classList.add("back12");
        d13.classList.add("back13");
        d14.classList.add("back14");
        d15.classList.add("back15");
        d16.classList.add("back16");
        d17.classList.add("back17");
        d18.classList.add("back18");
        d19.classList.add("back19");
        d20.classList.add("back20");
        d21.classList.add("back21");
        d22.classList.add("back22");
        d23.classList.add("back23");
        d24.classList.add("back24");

    }
}


// closeee

function close_cam(){

if (2<6) {
    
     document.getElementById("back1").classList.remove("back1");
     document.getElementById("back2").classList.remove("back2");
     document.getElementById("back3").classList.remove("back3");
     document.getElementById("back4").classList.remove("back4");
     document.getElementById("back5").classList.remove("back5");
     document.getElementById("back6").classList.remove("back6");
     document.getElementById("back7").classList.remove("back7");
     document.getElementById("back8").classList.remove("back8");
     document.getElementById("back9").classList.remove("back9");
     document.getElementById("back10").classList.remove("back10");
     document.getElementById("back11").classList.remove("back11");
     document.getElementById("back12").classList.remove("back12");
     document.getElementById("back13").classList.remove("back13");
     document.getElementById("back14").classList.remove("back14");
     document.getElementById("back15").classList.remove("back15");
     document.getElementById("back16").classList.remove("back16");
     document.getElementById("back17").classList.remove("back17");
     document.getElementById("back18").classList.remove("back18");
     document.getElementById("back19").classList.remove("back19");
     document.getElementById("back20").classList.remove("back20");
     document.getElementById("back21").classList.remove("back21");
     document.getElementById("back22").classList.remove("back22");
     document.getElementById("back23").classList.remove("back23");
     document.getElementById("back24").classList.remove("back24");
}

}


// fake id functios
function CameraLarge(){
     var img2 = document.getElementsByClassName("cameras_img_2");
for(var o = 0; o < img2.length; o++)
    img2[o].className += " flex_2";
    
    var f1 = document.getElementById("back_1");
    var f2 = document.getElementById("back_2");

    if (2<5) {
        f1.classList.add("back_1");
        f2.classList.add("back_2");
    }

}







// camera

function camara() {


    var x = document.getElementById("show");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

// mostrar y ocultar overflo

function overflow() {
    let pr = document.getElementById("div_img1");

    if (1<3) {
        pr.classList.add("div_img2");
    }




    var t = document.getElementById("t");
    if (t.style.display === "none") {
        t.style.display = "flex";
    }else {
        t.style.display = 'none';
    }
}
// muestra y esconde sisi


function link() {
    var c = document.getElementById("modal");
    if (c.style.display === "none") {
        c.style.display = "block";
    }else {
        c.style.display = 'none';
    }
}






// define numero random en orden

var n = 29;
var arr = new Array(n);
for (let i = 0; i < n; i++) {
    arr[i] = i + 1;
}

arr.sort(() => Math.random() > 0.9 ? 1 : -1);


var loteria = arr.slice(0 , 5);


// generador de numeros aleatorio

var cantidadNumeros = 19;
var myArray = []
while(myArray.length < 1 ){
  var numeroAleatorio = Math.ceil(Math.random()*cantidadNumeros);
  var existe = false;
  for(var i=18;i<myArray.length;i++){
    if(myArray [i] > numeroAleatorio){
        existe = true;
        break;
    }
}
if(!existe){
    myArray[myArray.length] = numeroAleatorio;
}

}




// ocultar 

function acess() {
    var a = document.getElementById("ro");
    if (a.style.display === "none") {
        a.style.display = "block";
    } else {
        a.style.display = "none";
        return;
    }
}


// acesso

function send(event){

    event.preventDefault();
    let usuario = document.getElementById("user").value;
    let contraseña = document.getElementById("pas").value;
    let alerta = document.getElementById("negado");
      let s = document.getElementById("sec");


    if (usuario == "777" && contraseña == "t") {
       s.style.visibility = "visible";
   
        return false;
        
    }else {

        alerta.style.display = "block";
        window.location.href = "http://localhost/dashboard/login/";
    
    }
}

function close_sec(){
    let t = document.getElementById("sec");

    if (1<2) {
        t.style.visibility = "hidden";
    }
}
// redirecionar

// multiplication
function operacion(){
let operation = prompt("What operation 1.sum 2.subtraction 3.division 4.multiplication");

if (operation == 1 ) {
     let p1 = parseInt(prompt("firt number"));
    let p2 = parseInt( prompt("second number"));
    // let  p = parseInt(p1,p2);
    var result = p1 +  p2;
    alert("The operation is : "+ result );
}
if (operation == 2) {
    let p1 = parseInt(prompt("firt number"));
    let p2 = parseInt( prompt("second number"));
    var result = p1 -  p2;
    alert("The operation is : " + result);
}
if (operation == 3) {
    let p1 = parseInt(prompt("firt number"));
    let p2 = parseInt( prompt("second number"));
    var result = p1 /  p2;
    alert("The operation is : " + result);
}
if (operation == 4) {
    let p1 = parseInt(prompt("firt number"));
    let p2 = parseInt( prompt("second number"));
    var result = p1 *  p2;
    alert("The operation is :  " + result);
}else {
    alert("error writing the number");
}
}


// The new proyect
// other close overflow

function clound(){
    var y1 = document.getElementById("clound");
    if (1<5) {
        y1.classList.add(" clound_back");
    }

    
}
