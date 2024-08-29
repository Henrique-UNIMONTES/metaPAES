# metaPAES
> Projeto do Metaverso do PAES

### Inicialização do projeto
> Ao clonar o projeto, execute os seguintes passos:

- Crie o arquivo .env
- Run `composer install`
- Run `npm i`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `npm run build`
- Run `php artisan serve`

### Tecnologias
> ![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
> ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
> ![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
> ![Bootstrap](https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white)
> ![SASS](https://img.shields.io/badge/SASS-hotpink.svg?style=for-the-badge&logo=SASS&logoColor=white)

- **Engine:** PlayCanvas
### Dependências

- php version: 8.3.7
- bootstrap: v5.3.3
- sass: v1.77.1

### Configurações do File Parser

> O File Parser é um aplicativo para analisar arquivos de origem do PlayCanvas para a arquitetura de rotas do Laravel.

- Primeiro copie a pasta de cenas para o diretório `FileParser/scenes/`.
- Se você tiver algum arquivo comum a todas as cenas, coloque-o no diretório `FileParser/common/`.
- Após copiar os arquivos, vá para um terminal de prompt e digite o diretório `FileParser/`.
- Quando estiver dentro do diretório `FileParser/`, execute o comando `php FileParser.php`.
- Seus arquivos analisados ​​devem estar localizados dentro do diretório `FileParser/scenes (parsed)/`.
- Agora, basta copiar os arquivos analisados ​​das cenas para o diretório `Resources/scenes/` e compilá-los com o vite usando o comando `npm run build`.
