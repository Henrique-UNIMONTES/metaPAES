/**
 * Adicionando os eventos de rotação de ícone nos cards de dúvidas
 */

window.addEventListener("DOMContentLoaded", () => {
    for (let i = 1; i <= 3; i++) {
        document.getElementById("card" + i + "-content").addEventListener("show.bs.collapse", () => { rotateArrowIcon(i) });
        document.getElementById("card" + i + "-content").addEventListener("hide.bs.collapse", () => { unchangeArrowIcon(i) });
    }
});

/*
 * Rotaciona o ícone "arrow" nos cards de dúvidas em 180°
 * @param {Number} child Indica o card que se quer aplicar a transformação
 * @returns {void}
 */
function rotateArrowIcon(child = 1) {
    document.getElementById("arrow"+ child + "-expand").classList.add("rotate-180");
}

/**
 * Retorna o ícone "arrow" nos cards de dúvidas para sua rotação original
 * @param {Number} child Indica o card que se quer aplicar a transformação
 * @returns {void}
 */
function unchangeArrowIcon(child = 1) {
    document.getElementById("arrow"+ child + "-expand").classList.remove("rotate-180");
}