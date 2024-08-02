// Efeito de Digitação
const textElement = document.getElementById("title");
const text = "Desenvolvedor Full Stack Mobile";
let index = 0;

function typeText() {
  if (index < text.length) {
    textElement.textContent += text.charAt(index);
    index++;
    setTimeout(typeText, 150); // Velocidade da digitação em milissegundos
  }
}

typeText();

// Proibir o arrastar de imagem

(function () {
    function desativarDragDrop() {
      document.addEventListener('dragstart', (evento) => evento.preventDefault(), false)
      document.addEventListener('drop', (evento) => evento.preventDefault(), false)
    }
    desativarDragDrop()
  }())