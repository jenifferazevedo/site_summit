/* Contador */
var countDownDate = new Date("Feb 11, 2020 09:00:00").getTime();
var x = setInterval(function () {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("dias").innerHTML = days;
  document.getElementById("horas").innerHTML = hours;
  document.getElementById("minutos").innerHTML = minutes;
  document.getElementById("segundos").innerHTML = seconds;
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("resultado").innerHTML = "O evento começou!";
  }
}, 1000);

$(document).ready(function(){
$('[data-toggle="popover"]').popover();   
});

/* Click nav */
 let navlink = $('.navbar-nav a');
 for (var i = 0; i < navlink.length; i++) {
   navlink[i].addEventListener("click", function () {
     var current = $('.active');
     current[0].className = current[0].className.replace(" active", "");
     this.className += " active";
   });
 }

/* $('.navbar-nav>a').on('click', function(){
  $('.navbar-collapse').collapse('hide');
});*/

 /*Botão Ver mais - texto*/
 let botao = document.getElementById("btncollapse");
 $('#sobreevento').on('show.bs.collapse', function () {
   botao.innerHTML = "Ver menos"
 });
 $('#sobreevento').on('hide.bs.collapse', function () {
   botao.innerHTML = "Ver mais"
 });

 /*Botão Ver mais - Noticias */
 let botao2 = document.getElementById("btncollapse2");
 $('#noticias2').on('show.bs.collapse', function () {
   botao2.innerHTML = "Ver menos"
 });

 $('#noticias2').on('hide.bs.collapse', function () {
   botao2.innerHTML = "Ver mais"
 });

 /*Botão Ver mais - Oradores */
 let botao3 = document.getElementById("btncollapse3");
 $('#todosoradores').on('show.bs.collapse', function () {
   botao3.innerHTML = "Ver menos"
 });
 $('#todosoradores').on('hide.bs.collapse', function () {
   botao3.innerHTML = "Ver mais"
 });


 // Example starter JavaScript for disabling form submissions if there are invalid fields
 (function () {
   'use strict';
   window.addEventListener('load', function () {
     // Fetch all the forms we want to apply custom Bootstrap validation styles to
     var forms = document.getElementsByClassName('needs-validation');
     // Loop over them and prevent submission
     var validation = Array.prototype.filter.call(forms, function (form) {
       form.addEventListener('submit', function (event) {
         if (form.checkValidity() === false) {
           event.preventDefault();
           event.stopPropagation();
         }
         form.classList.add('was-validated');
         //event.preventDefault();
       }, false);
     });
   }, false);
 })();

 