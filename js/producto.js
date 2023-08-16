/* idk */
var imagenp = document.getElementById('img');
var imagenc = document.querySelectorAll('#imgb'); //ARRAY
var imagenb = document.querySelectorAll('#btnc'); //ARRAY
console.log(imagenc);
console.log(imagenb);

function cambiar(){
  let id=0;
      if (imagenb[id].hasAttribute("class",id)=id) {
        imagenc = imagenc[id].getAttribute("src");
        imagenp.setAttribute("src",imagenc);
  }
    else{
      id++
      return id
    }
}
