var konamiCode = [
  "ArrowUp",
  "ArrowUp",
  "ArrowDown",
  "ArrowDown",
  "ArrowLeft",
  "ArrowRight",
  "ArrowLeft",
  "ArrowRight",
  "KeyB",
  "KeyA",
];
var konamiIndex = 0;

document.addEventListener("keydown", function (event) {
  var key = event.code || event.key;
  if (key === konamiCode[konamiIndex]) {
    konamiIndex++;
    if (konamiIndex === konamiCode.length) {
      // udfør din skjulte funktion her
      alert("Tillykke! Du har fundet den hemmelige funktion!");
      konamiIndex = 0;
    }
  } else {
    konamiIndex = 0;
  }
});
