@extends('layouts.app')

@section('title', 'Каталог')
@section('page_title', 'Каталог товарів')

@section('content')
    <div class="row g-3">
        @foreach($products as $id => $name)
            <div class="col-md-4">
                <x-card
                    :title="$name"
                    :subtitle="'ID: '.$id"
                    :link="url('/products/'.$id)"
                    button="Детальніше"
                >
                    <p class="mb-0">Товар зі статичного масиву.</p>
                </x-card>
            </div>
        @endforeach
    </div>
@endsection