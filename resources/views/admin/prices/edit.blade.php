@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Редактировать услуги и цены</h1>

    <form action="{{ route('admin.prices.update', $price->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="service">Услуга:</label>
            <input type="text" name="service" id="service" value="{{ $price->service }}" required>
        </div>
        <div class="form-group">
            <label for="cost">Стоимость (руб.):</label>
            <input type="text" name="cost" id="cost" value="{{ $price->cost }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
    </div>
@endsection