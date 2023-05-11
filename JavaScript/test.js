let konamiCode = [
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

document.addEventListener("DOMContentLoaded", function () {
  let konamiIndex = 0;
  const bodyElements = document.querySelectorAll("body *");
  const bodyElementsArray = Array.from(bodyElements);
  const backgroundColors = bodyElementsArray.map(function (element) {
    return element.style.backgroundColor;
  });
  const textColors = bodyElementsArray.map(function (element) {
    return element.style.color;
  });
  const body = document.querySelector("body");

  // Rotate the document
  function rotateDocument() {
    body.classList.add("rotate");
    setTimeout(function () {
      body.classList.remove("rotate");
    }, 2000);
  }

  document.addEventListener("keydown", function (event) {
    var key = event.code || event.key;
    if (key === konamiCode[konamiIndex]) {
      konamiIndex++;
      if (konamiIndex === konamiCode.length) {
        // Gem nuværende farver
        const currentBackgroundColors = bodyElementsArray.map(function (
          element
        ) {
          return element.style.backgroundColor;
        });
        const currentTextColors = bodyElementsArray.map(function (element) {
          return element.style.color;
        });

        // Generer tilfældige farver
        const randomBackgroundColor =
          "#" + Math.floor(Math.random() * 16777215).toString(16);
        const randomTextColor =
          "#" + Math.floor(Math.random() * 16777215).toString(16);

        // Opdater farverne
        bodyElementsArray.forEach(function (element) {
          element.style.backgroundColor = randomBackgroundColor;
          element.style.color = randomTextColor;
        });

        // Vent et kort øjeblik og sæt farverne tilbage
        setTimeout(function () {
          bodyElementsArray.forEach(function (element, index) {
            element.style.backgroundColor = currentBackgroundColors[index];
            element.style.color = currentTextColors[index];
          });
        }, 3000);

        // Roter dokumentet
        rotateDocument();

        // Nulstil konami-indexet
        konamiIndex = 0;
      }
    } else {
      konamiIndex = 0;
    }
  });
});
