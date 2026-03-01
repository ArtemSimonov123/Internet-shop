@extends('layouts.app')

@section('title', 'Товар')
@section('page_title', 'Сторінка товару')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="mb-2">{{ $name }}</h4>
            <p class="text-muted mb-3">ID: {{ $id }}</p>
            <a class="btn btn-secondary" href="{{ url('/products') }}">Назад до каталогу</a>
        </div>
    </div>
@endsection