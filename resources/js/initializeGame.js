/**
 * Configurando os eventos de click dos botões para enviar as coordenadas
 */
document.getElementById("game-btn").addEventListener('click', startGame);

/**
 * Realiza o redirecionamento para a página do jogo
 */
function startGame() {
    location.href = import.meta.env.VITE_JOGO_URL;
}