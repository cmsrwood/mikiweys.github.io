/* POPOVER */
const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

/* TOOLTIP */
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

/* TOAST */
const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

if (toastTrigger) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
  toastTrigger.addEventListener('click', () => {
    toastBootstrap.show()
  })
}

/* TEMA OSCURO */
var body = document.querySelector('body');
var itoggle = document.getElementById('itoggle');
var btndark = document.getElementById('btndark');
var btnlight = document.getElementById('btnlight');
var navbar = document.getElementById('navbar');
var logo = document.getElementById('logo');
var main = document.getElementById('main');

/* responsive */
var irtoggle = document.getElementById('irtema');
var btoggle = document.getElementById('btnrtema');
var ltoggle = document.getElementById('logor');


// TEMA
    function tema(){
      if (body.getAttribute("data-bs-theme") == "light") {
        body.setAttribute("data-bs-theme", "dark");
        irtoggle.setAttribute("class"," bi bi-moon");
        btoggle.setAttribute("class","btn text-white");
        navbar.setAttribute("class","navbar navbar-expand-xl fixed-top navbar-light bg-dark text-center align-items-center shadow");
        ltoggle.setAttribute("src","../../IMG/todo/logodark.png");
        logo.setAttribute("src","../../IMG/todo/logodark.png");
        main.setAttribute("class", "p-5 container bg-dark shadow");
      }
      else {
        body.setAttribute("data-bs-theme", "light");
        irtoggle.setAttribute("class"," bi bi-sun");
        btoggle.setAttribute("class","btn");
        navbar.setAttribute("class","navbar navbar-expand-xl fixed-top navbar-light bg-white text-center align-items-center shadow");
        ltoggle.setAttribute("src","../../IMG/todo/logo.png");
        logo.setAttribute("src","../../IMG/todo/logo.png");
        main.setAttribute("class", "p-5 container color shadow");
      }
    }
 
   const formulario = document.querySelector("#formulario");

   //CREAR VENTA
   
  function insertarFila(){
    let tablaDatos= document.getElementById('tablaDatos').insertRow(0);
    let col1= tablaDatos.insertCell(0);
    let col2= tablaDatos.insertCell(1);
    let col3= tablaDatos.insertCell(2);
    const producto = document.querySelector("#producto").options[document.querySelector("#producto").options.selectedIndex].text;
    const cantidad = document.querySelector("#cantidad").value;
    col1.textContent = `${producto}`
    col2.textContent = `${cantidad}`
    col3.textContent = `${suma}`
  }
   
