<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ $pageTitle }}</title>
        <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon/favicon.ico') }}" type="image/x-icon">
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>

    <header>
        <x-utils.navbar/>
    </header>

    <body class="ff-montserrat">
        <main>
            <x-sections.sobre/>

            <x-sections.edital/>

            <x-sections.cursos :$cursos/>

            <x-sections.duvidas :$duvidas/>
        </main>

        <x-utils.modal :scenes="$scenes"/>
    </body>

    <footer>
        <x-utils.footer/>
    </footer>
</html>