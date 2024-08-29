<section id="cursos">
    @include('components.section-title', ['title' => "cursos ofertados"])

    <div class="container m-auto">
        @foreach ($cursos as $curso)
            @include('components.curso-card', ['curso' => $curso])
        @endforeach
    </div>

    <div class="container my-5 d-flex justify-content-end pe-4">
        <a href="https://www.coteps.unimontes.br/wp-content/uploads/2024/06/EDITAL-3-2024-PAES.pdf#page=8" target="_blank" rel="noopener noreferr" class="btn btn-sm btn-outline-primary btn-rounded">ver todos</a>
    </div>
</section>