pc.script.createLoadingScreen((app) => {
     document.head.innerHTML += `
        <style>
            .lds-circle {
            /* change color here */
            color: #3175C7
            }
            .lds-circle,
            .lds-circle div {
            box-sizing: border-box;
            }
            .lds-circle {
            display: inline-block;
            transform: translateZ(1px);
            }
            .lds-circle > div {
            display: inline-block;
            width: 32px;
            height: 32px;
            margin: 8px;
            background: currentColor;
            border-radius: 50%;
            animation: lds-circle 2.4s cubic-bezier(0, 0.2, 0.8, 1) infinite;
            }
            @keyframes lds-circle {
            0%, 100% {
                animation-timing-function: cubic-bezier(0.5, 0, 1, 0.5);
            }
            0% {
                transform: rotateY(0deg);
            }
            50% {
                transform: rotateY(1800deg);
                animation-timing-function: cubic-bezier(0, 0.5, 0.5, 1);
            }
            100% {
                transform: rotateY(3600deg);
            }
            }
        </style>
    `;

    // Div principal da tela de loading (Cobre toda a página)
    const main = document.createElement('div');
    main.style.backgroundColor = "#F7F9FB";
    main.style.color = "#3175C7";
    main.style.fontFamily = "Arial";
    main.style.position = "absolute";
    main.style.top = "0";
    main.style.left = "0";
    main.style.height = "100%";
    main.style.width = "100%";
    document.body.appendChild(main);

    // Container com o conteúdo
    const container = document.createElement('div');
    container.style.position = "absolute";
    container.style.top = "50%";
    container.style.left = "25%"
    container.style.transform = "translateY(-50%)";
    container.style.width = "50%";
    main.appendChild(container);

    // var url = pc.Application.getApplication().assets.find('logo-paes.png', 'texture').getFileUrl();

    const title = document.createElement('div');
    title.style.textAlign = "center";
    title.innerHTML = `
        <h1>metaPAES</h1>
        <h4 style="color:#ffc107; text-align: start;" hidden>test-version</h4>
    `;
    container.appendChild(title);

    // Barra de carregamento
    const progressBar = document.createElement('div');
    progressBar.style.height = "5px";
    progressBar.style.backgroundColor = "#d3d3d3";
    container.appendChild(progressBar);

    // Progresso da barra
    const progressFiller = document.createElement('div');
    progressFiller.style.height = "100%";
    progressFiller.style.width = "0%";
    progressFiller.style.backgroundColor = "#3175C7";
    progressBar.appendChild(progressFiller);

    // Valor de progresso
    const progressValue = document.createElement('p');
    progressValue.style.color = "#6c757d";
    progressValue.style.textAlign = "end";
    progressBar.appendChild(progressValue);

    // Atualização do progresso da barra
    app.on('preload:progress', (value) => {
        progressFiller.style.width = (value * 100) + '%';
        progressValue.innerHTML = `${Math.trunc(value*100)}%`;
    });
    app.once('preload:end', () => {
        app.off('preload:progress');
    });

    // Remover div principal após carregamento cessar
    app.once('start', () => {
        document.body.removeChild(main);
    });
});