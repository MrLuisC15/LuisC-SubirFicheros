/**
 * @file Añade la funcionalidad al modal
 * @author Luis C Marzal
 */

$("document").ready(iniciar());

function iniciar() {
  // Captura el div modal
  var modal = document.getElementById("myModal");

  // Capturar Imagen y Texto donde se almacenarán posteriormente
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");

  // Bucle para dar función click a todos los div que contienen imágenes
  for (let index = 4; index < $("div").length; index++) {
    $("div:eq(" + index + ")").click(function () {
      modal.style.display = "block";
      modalImg.src = $(this).find("img:first").attr("src");
      //captionText.innerHTML = $(this).find("img:first").attr("alt");
    });
  }

  // Capturar el elemento close, X
  var span = document.getElementById("close");

  // Cuando se haga click en el span "X", se oculta el modal
  $("#close").click(function () {
    modal.style.display = "none";
  });
}
