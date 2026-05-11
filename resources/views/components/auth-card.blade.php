@props([
    'title',
    'cardClass' => '',
    'headerClass' => '',
])

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card {{ $cardClass }}">
                <div class="card-header {{ $headerClass }}">
                    <h3 class="text-center">{{ $title }}</h3>
                </div>
                <div class="card-body">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
