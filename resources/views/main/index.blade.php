@extends('layouts.app')

@section('title', 'Головна')
@section('page_title', 'Головна сторінка')

@section('content')
    <p class="lead">Ласкаво просимо в інтернет-магазин.</p>
    <a class="btn btn-primary" href="{{ url('/products') }}">Перейти в каталог</a>
@endsection