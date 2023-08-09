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
/* responsive */
var irtoggle = document.getElementById('irtema');
var btoggle = document.getElementById('btnrtema');
var ltoggle = document.getElementById('logor');

    function dark(){
      body.setAttribute("data-bs-theme", "dark");
      btndark.setAttribute("class","btn text-white");
      btnlight.setAttribute("class","btn text-white");
      itoggle.setAttribute("class","bi bi-moon text-white");
      navbar.setAttribute("class","navbar navbar-expand-xl fixed-top navbar-dark bg-dark text-center align-items-center shadow text-white");
      logo.setAttribute("src","IMG/todo/logodark.png");

      /* RESPONSIVE */
    }
    function light(){
      body.setAttribute("data-bs-theme", "light");
      btnlight.setAttribute("class","btn");
      btndark.setAttribute("class","btn");
      itoggle.setAttribute("class","bi bi-sun");
      navbar.setAttribute("class","navbar navbar-expand-xl fixed-top navbar-light bg-white text-center align-items-center shadow");
      logo.setAttribute("src","IMG/todo/logo.png");
      /* RESPONSIVE */
    }
    function tema(){
      if (body.getAttribute("data-bs-theme") == "light") {
        body.setAttribute("data-bs-theme", "dark");
        irtoggle.setAttribute("class"," bi bi-moon");
        btoggle.setAttribute("class","btn text-white");
        navbar.setAttribute("class","navbar navbar-expand-xl fixed-top navbar-light bg-dark text-center align-items-center shadow");
        ltoggle.setAttribute("src","IMG/todo/logodark.png");
        logo.setAttribute("src","IMG/todo/logodark.png");
      }
      else {
        body.setAttribute("data-bs-theme", "light");
        irtoggle.setAttribute("class"," bi bi-sun");
        btoggle.setAttribute("class","btn");
        navbar.setAttribute("class","navbar navbar-expand-xl fixed-top navbar-light bg-light text-center align-items-center shadow");
        ltoggle.setAttribute("src","IMG/todo/logo.png");
        logo.setAttribute("src","IMG/todo/logo.png");
      }
    }
        