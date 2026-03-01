@props([
    'title' => '',
    'subtitle' => '',
    'link' => '#',
    'button' => 'Відкрити'
])

<div class="card shadow-sm h-100">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>

        @if($subtitle)
            <p class="card-text text-muted">{{ $subtitle }}</p>
        @endif

        {{ $slot }}

        <a class="btn btn-outline-primary mt-2" href="{{ $link }}">{{ $button }}</a>
    </div>
</div>