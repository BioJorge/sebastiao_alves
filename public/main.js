let focus = document.getElementById("focus");
focus.scrollIntoView();



//menu do mobile
function mostrarMenu(button, elementId) {
    var element = document.getElementById(elementId);
    if (element.style.display === 'block') {
      element.style.display = 'none';
    } else {
      element.style.display = 'block';
    }

    var backgroundImage = window.getComputedStyle(button).getPropertyValue('background-image');
    if (backgroundImage.includes('public/imagens/menu.svg')) {
      button.style.backgroundImage = 'url("public/imagens/fechar.svg")';
    } else {
      button.style.backgroundImage = 'url("public/imagens/menu.svg")';
    }
  }


ver_mais.addEventListener('click', function(){
  const info_extra = window.document.getElementById("info_extra");
  const botao_ver_mais = window.document.getElementById("ver_mais");

  info_extra.style.display = "block";
  botao_ver_mais.style.display = "none";
})






