@extends('adminlte::page')

@section('title', 'Додати товар')

@section('content_header')
    <h1>Додати новий товар</h1>
@stop

@section('content')

<div class="card">
<div class="card-body">

<form action="{{ route('admin.products.store') }}" method="POST">

@csrf

<div class="mb-3">
<label class="form-label">Назва товару</label>
<input type="text" name="name" class="form-control" value="{{ old('name') }}">

@error('name')
<div class="text-danger">{{ $message }}</div>
@enderror
</div>


<div class="mb-3">
<label class="form-label">Опис</label>
<textarea name="description" class="form-control">{{ old('description') }}</textarea>
</div>


<div class="mb-3">
<label class="form-label">Ціна</label>
<input type="number" name="price" class="form-control" value="{{ old('price') }}">

@error('price')
<div class="text-danger">{{ $message }}</div>
@enderror
</div>


<div class="mb-3">
<label class="form-label">Кількість</label>
<input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}">

@error('quantity')
<div class="text-danger">{{ $message }}</div>
@enderror
</div>


<button class="btn btn-success">
Додати товар
</button>

<a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
Назад
</a>

</form>

</div>
</div>

@stop