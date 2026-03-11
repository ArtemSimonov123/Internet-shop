@extends('adminlte::page')

@section('title', 'Деталі товару')

@section('content_header')
    <h1>Деталі товару</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $product->name }}</h3>
        </div>

        <div class="card-body">
            <p><strong>ID:</strong> {{ $product->id }}</p>
            <p><strong>Назва:</strong> {{ $product->name }}</p>
            <p><strong>Опис:</strong> {{ $product->description }}</p>
            <p><strong>Ціна:</strong> {{ $product->price }} грн</p>
            <p><strong>Кількість:</strong> {{ $product->quantity }}</p>

            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                Назад до списку
            </a>
        </div>
    </div>
@stop