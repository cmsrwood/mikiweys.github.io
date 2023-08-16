/* idk */
var imagenp = document.getElementById('img');
var imagenbtn = document.querySelectorAll('#imgb');
var idimg = imagenbtn.getAttribute("id");
console.log(imagenbtn);


function cambiar(){
  var i=0;
  if (idimg =="imgb1") {
    imagenbtn = imagenbtn.getAttribute("src");
    imagenp.setAttribute("src",imagenbtn);
  }

}