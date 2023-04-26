//menu do mobile
function mostrarMenu(button, elementId) {
    var element = document.getElementById(elementId);
    if (element.style.display === 'block') {
      element.style.display = 'none';
    } else {
      element.style.display = 'block';
    }

    var backgroundImage = window.getComputedStyle(button).getPropertyValue('background-image');
    if (backgroundImage.includes('imagens_para_site/desktop/menu.svg')) {
      button.style.backgroundImage = 'url("imagens_para_site/desktop/fechar.svg")';
    } else {
      button.style.backgroundImage = 'url("imagens_para_site/desktop/menu.svg")';
    }
  }

const info_extra = window.document.getElementById("info_extra");
const botao_ver_mais = window.document.getElementById("ver_mais");
ver_mais.addEventListener('click', function(){
  info_extra.style.display = "block";
  botao_ver_mais.style.display = "none";
})



