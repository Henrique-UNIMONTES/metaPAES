<div class="p-2 d-flex justify-content-between align-items-center mb-2 rounded-3 border modal-item
@if ($state == 0) closed 
@elseif ($state == 1) await 
@else open 
@endif">
    <div class="col-6 d-grid text-start">
        <span>{{ $name }}</span>

        @if ($state == 0)
            <span class="closed">(Encerrado)</span>
        @elseif ($state == 1)
            <span class="await">(Em breve)</span>
        @else
            <span class="open">(Em andamento)</span>
        @endif
    </div>

    <div class="d-grid col-6 text-end">
        <span class="">
            {{ $startDate }} 
            @if ($endDate !== NULL) 
                <span class="date-separator"> - </span>{{ $endDate }}
            @endif
        </span>
    </div>
</div>