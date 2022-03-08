const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc); //fokusira se natpis
  input.addEventListener("blur", blurFunc);
});


function printInDiv() //funkcija za printanje samo određenog dijela sajta
{
  var text = document.getElementsByTagName('input')[0].value;
  document.getElementById('printableArea').innerHTML = text;
  window.print();
}