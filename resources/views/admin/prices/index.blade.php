@extends('layouts.app')

@section('content')
    <body style="background-color: white;">
        
    
    <div class="container">
    <h1>Список услуг и цен</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Услуга</th>
                <th>Удалить услугу</th>
                <th>Стоимость (руб.)</th>
                <th>Отредактировать</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prices as $price)
                <tr>
                    <td>{{ $price->service }}</td>
                    <td>
                        <form action="{{ route('admin.prices.destroy', $price) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button">Удалить</button>
                        </form>
                    </td>
                    <td>{{ $price->cost }}</td>
                    <td>
                        <a href="{{ route('admin.prices.edit', $price->id) }}">Редактировать</a>
                    </td>
                    
                </tr>
                
            @endforeach
        </tbody>
    </table>
   

    <a href="{{ route('admin.prices.create') }}" class="btn btn-primary">Добавить услугу и цену</a>

    <div class="row">
        @foreach ($reviews as $review)
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                <img src="{{ asset('img/' . $review->img) }}" class="rounded-circle w-50" alt="...">

                    <h5 class="card-title">{{ $review->name }}</h5>
                    <p class="card-text">{{ $review->message }}</p>
                    @if ($review->approved == 0)
                        <form action="{{ route('admin.reviews.approve', $review) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success">Разрешить отзыв</button>
                        </form>
                    @else
                        <p class="card-text text-success">Отзыв уже разрешен</p>
                    @endif
                    <form action="{{ route('admin.reviews.destroy', $review) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить отзыв</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    

    
    </div>
    </body>
@endsection