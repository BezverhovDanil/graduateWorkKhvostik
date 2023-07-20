<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ url('/img/caticologo.png') }}" type="image/x-icon">
    <title>Цены</title>
</head>
<body style="background-color:white;">
    @extends('layouts.app')

    @section('content')
    <div class="container">
    <table class="tableprice ccol">
    <thead>
        <tr>
            <th>Услуга</th>
            <th>Стоимость (руб.)</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($prices as $price)
        <tr>
            <td>{{ $price->service }}</td>
            <td>{{ $price->cost }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
    @endsection
</body>
</html>