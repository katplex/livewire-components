@props([
    'title' => ''
])

<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label">
                {{ $title }}
                <small>Listado</small>
            </h3>
        </div>
        <div class="card-toolbar">
            {{ $toolbar ?? '' }}
        </div>
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>