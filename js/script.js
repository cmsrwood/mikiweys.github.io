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
var toggle = document.getElementById('btntema');

    function dark(){
      body.setAttribute("data-bs-theme", "dark");
      toggle.setAttribute("class","bi bi-sun-fill");
    }
    function light(){
      body.setAttribute("data-bs-theme", "light");
      toggle.setAttribute("class","bi bi-moon-fill");
    }
    function tema(){
      while (body.getAttribute("data-bs-theme") == "light") {
        body.setAttribute("data-bs-theme", "dark");
    }
  }