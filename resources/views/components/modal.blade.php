<div class="modal fade" id="stage-modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border border-0">
                <h5 class="modal-title">ESTÁGIOS DO PROGRAMA</h5>
                <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body d-grid">
                @foreach ($scenes as $scene)
                    @include('components.modal-card', ['name' => $scene['name'], 'state' => $scene['state'], 'startDate' => $scene['startDate'], 'endDate' => $scene['endDate']])
                @endforeach
            </div>

            <div class="modal-footer mt-2">
                <button id="game-btn" type="button" class="btn btn-sm btn-outline-primary">Jogar</button>
            </div>
        </div>
    </div>
</div>