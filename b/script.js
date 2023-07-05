var valtozoTerulet = document.getElementById("valtozo-terulet");

function changeColor(color) {
  valtozoTerulet.classList.remove("red", "blue", "green");
  valtozoTerulet.classList.add(color);
}

document.getElementById("szinvaltas-gomb").addEventListener("click", function() {
  var colors = ["red", "blue", "green"];
  var randomColor = colors[Math.floor(Math.random() * colors.length)];
  changeColor(randomColor);
});

valtozoTerulet.addEventListener("mouseover", function() {
  this.innerHTML = "Az egér felette van.";
});

valtozoTerulet.addEventListener("mouseout", function() {
  this.innerHTML = "";
});
