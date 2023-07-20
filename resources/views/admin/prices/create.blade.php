@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('admin.prices.store') }}" method="post">
    @csrf
    <div>
        <label for="service">Услуга:</label>
        <input type="text" name="service" id="service" required>
    </div>
    <div>
        <label for="cost">Стоимость (руб.):</label>
        <input type="text" name="cost" id="cost" required>
    </div>
    <button type="submit">Сохранить</button>
    </form>
</div>
@endsection
