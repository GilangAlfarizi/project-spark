@extends('layouts.master')

@section('content')

<div class="container py-4 py-xl-5">
    <div class="row mb-4 mb-lg-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto">
            <h2 style="color: rgb(78,115,223);">Kelompok 8</h2>
            <p>Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
        </div>
    </div>
    <div class="row gy-4 row-cols-2 row-cols-md-4">
        <div class="col">
            <div class="card border-0 shadow-none">
                <div class="card-body text-center d-flex flex-column align-items-center pt-4"><img class="rounded-circle mb-3 fit-cover" width="130" height="130" src="data:image/jpeg;base64,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">
                    <h5 class="fw-bold text-primary card-title mb-0">Gilang Alfarizi</h5>
                    <p class="text-muted card-text mb-2">Backend</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 shadow-none">
                <div class="card-body text-center d-flex flex-column align-items-center pt-4"><img class="rounded-circle mb-3 fit-cover" width="130" height="130" src="data:image/jpeg;base64,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">
                    <h5 class="fw-bold text-primary card-title mb-0">Muhammad Muchtar</h5>
                    <p class="text-muted card-text mb-2">Frontend</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 shadow-none">
                <div class="card-body text-center d-flex flex-column align-items-center pt-4"><img class="rounded-circle mb-3 fit-cover" width="130" height="130" src="data:image/jpeg;base64,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">
                    <h5 class="fw-bold text-primary card-title mb-0">Nadya Qolbin</h5>
                    <p class="text-muted card-text mb-2">Database</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 shadow-none">
                <div class="card-body text-center d-flex flex-column align-items-center pt-4"><img class="rounded-circle mb-3 fit-cover" width="130" height="130" src="data:image/jpeg;base64,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">
                    <h5 class="fw-bold text-primary card-title mb-0">Stefan Enrico</h5>
                    <p class="text-muted card-text mb-2">Backend</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection