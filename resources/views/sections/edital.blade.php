<section id="edital">
    @include('components.section-title', ['title' => "conheça o edital"])

    <div class="container my-6">
        <div class="row">
            <div class="col col-12 col-md-6 d-flex align-items-center">
                <p class="text-justify">
                    Explore o edital do programa de forma virtual através do Metaverso do PAES. Conheça os prazos, documentos e procedimentos necessários para realizar sua inscrição de forma interativa e lúdica
                </p>
            </div>
            <div class="col col-12 col-md-6">
                <img class="d-flex ms-auto me-auto me-md-0" src="{{ Vite::asset('resources/img/game-brand.png') }}" alt="PAES" width="169" height="169">
            </div>
        </div>
    </div>
        
    <div class="container mb-5 d-flex justify-content-center">
        <button class="btn btn-outline-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#stage-modal">explorar</button>
    </div>
</section>
