document.addEventListener("DOMContentLoaded", function () {
  const frases = [
    "Hoy es un buen día para un sahumerio.",
    "Conéctate con tu esencia.",
    "Respirá profundo y dejá que fluya.",
    "Aromas que inspiran tu alma.",
    "Un momento de paz cada día."
  ];

  const indice = Math.floor(Math.random() * frases.length);
  const elemento = document.getElementById("frase-aleatoria");
  
  if (elemento) {
    elemento.textContent = frases[indice];
  }
});
