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
var itoggle = document.getElementById('itema');
var btoggle = document.getElementById('btntema');

var navbar = document.getElementById('navbar')
var logo = document.getElementById('logo')
/* RESPONSIVE */
var brtoggle = document.getElementById('btnrtema');
var irtoggle = document.getElementById('irtema');
var logor = document.getElementById('logor')

/* FUNCION */
    function tema(){
      if (body.getAttribute("data-bs-theme") == "light") {
        body.setAttribute("data-bs-theme", "dark");
        itoggle.setAttribute("class"," bi bi-sun-fill");
        btoggle.setAttribute("class","btn text-white");
        navbar.setAttribute("class","navbar navbar-expand-xl fixed-top navbar-light bg-dark text-center align-items-center shadow");
        logo.setAttribute("src","IMG/todo/logodark.png");
        /* responsive */
        irtoggle.setAttribute("class"," bi bi-sun-fill");
        brtoggle.setAttribute("class","btn text-white");
        logor.setAttribute("src","IMG/todo/logodark.png");
      }
      else {
        body.setAttribute("data-bs-theme", "light");
        itoggle.setAttribute("class"," bi bi-moon-fill");
        btoggle.setAttribute("class","btn");
        navbar.setAttribute("class","navbar navbar-expand-xl fixed-top navbar-light bg-light text-center align-items-center shadow");
        logo.setAttribute("src","IMG/todo/logo.png");
        /* RESPONSIVE */
        irtoggle.setAttribute("class"," bi bi-moon-fill");
        brtoggle.setAttribute("class","btn");
        logor.setAttribute("src","IMG/todo/logo.png");
      }
  }