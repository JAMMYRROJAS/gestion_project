// Definir un array con las palabras del oraciones
const oraciones = [
  "avion",
  "elefante",
  "caballo",
  "dado",
  "raton",
  "mochila",
];

// Función para crear elementos HTML para cada palabra
function crearPalabraElement(palabra) {
  const palabraDiv = document.createElement("div");
  palabraDiv.classList.add("col-md-4", "mb-4", "text-center", "cursor-pointer");

  const imagen = document.createElement("img");
  imagen.src = `../img/${palabra}.png`;
  imagen.alt = palabra;
  imagen.classList.add("img-fluid", "imagen-escala", "w-75");
  imagen.addEventListener("click", () => reproducirAudio(palabra)); // Llama a la función reproducirAudio al hacer clic en la imagen

  palabraDiv.appendChild(imagen);
  return palabraDiv;
}

// Función para reproducir el audio correspondiente a la palabra
function reproducirAudio(palabra) {
  // Reemplaza 'ruta/al/audio' con la ubicación real de tus archivos de audio
  const audio = new Howl({
    src: [`../audios/${palabra}.mp3`],
  });
  audio.play();
}

// Crea los elementos HTML para cada palabra y los agrega al contenedor
const contenedorPalabras = document.querySelector(".word");
oraciones.forEach((palabra) => {
  const palabraElement = crearPalabraElement(palabra);
  contenedorPalabras.appendChild(palabraElement);
});
