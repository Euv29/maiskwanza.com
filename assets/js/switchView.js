

document.getElementById('list-view').addEventListener('click', function () {
    document.getElementById('view-wrap').classList.add('list-view');
    document.getElementById('view-wrap').classList.remove('grid-view');
    document.getElementById('list-view').classList.add('ative');
    document.getElementById('grid-view').classList.remove('ative');
});

document.getElementById('grid-view').addEventListener('click', function () {
    document.getElementById('view-wrap').classList.add('grid-view');
    document.getElementById('view-wrap').classList.remove('list-view');
    document.getElementById('list-view').classList.remove('ative');
    document.getElementById('grid-view').classList.add('ative');
});

function ajustarClasse() {
    const viewWrap = document.getElementById('view-wrap');
    const largura = window.innerWidth;

    if (largura <= 600) {
        viewWrap.classList.add('grid-view');
        viewWrap.classList.remove('list-view');
    } else {
        viewWrap.classList.add('list-view');
        viewWrap.classList.remove('grid-view');
    }
}

// Executa a função ao carregar a página
window.addEventListener('load', ajustarClasse);
// Executa a função quando a janela é redimensionada
window.addEventListener('resize', ajustarClasse);
