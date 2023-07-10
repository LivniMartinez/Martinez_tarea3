//Se agrega el evento utilizando un querySelector a la caja de texto y el out

const textBox = document.querySelector('#textBox');
const output = document.querySelector('#output');
textBox.addEventListener(
    "keydown",
    (e) => (output.textContent = `Hiciste click a "${e.key}".`)
);
