// Definir un array con las letras del abecedario
const abecedario = [
  "A",
  "B",
  "C",
  "D",
  "E",
  "F",
  "G",
  "H",
  "I",
  "J",
  "K",
  "L",
  "M",
  "N",
  "Ñ",
  "O",
  "P",
  "Q",
  "R",
  "S",
  "T",
  "U",
  "V",
  "W",
  "X",
  "Y",
  "Z",
];

// Función para crear elementos HTML para cada letra
function crearLetraElement(letra) {
  const letraDiv = document.createElement("div");
  letraDiv.classList.add("col-md-2", "mb-4", "cursor-pointer");

  const imagen = document.createElement("img");
  imagen.src = `../img/${letra}.png`;
  imagen.alt = letra;
  imagen.classList.add("img-fluid", "imagen-escala");
  imagen.addEventListener("click", () => reproducirAudio(letra)); // Llama a la función reproducirAudio al hacer clic en la imagen

  letraDiv.appendChild(imagen);
  return letraDiv;
}

// Función para reproducir el audio correspondiente a la letra
function reproducirAudio(letra) {
  // Reemplaza 'ruta/al/audio' con la ubicación real de tus archivos de audio
  const audio = new Howl({
    src: [`../audios/${letra}.mp3`],
  });
  audio.play();
}

// Crea los elementos HTML para cada letra y los agrega al contenedor
const contenedorLetras = document.querySelector(".abc");
abecedario.forEach((letra) => {
  const letraElement = crearLetraElement(letra);
  contenedorLetras.appendChild(letraElement);
});
