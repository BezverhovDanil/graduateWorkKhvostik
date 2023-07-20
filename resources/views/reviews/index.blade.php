<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ url('/img/caticologo.png') }}" type="image/x-icon">
    <title>Ваш отзыв</title>
</head>
<body style="background-color:white;">
@extends('layouts.app')
    @section('content')
    
    <div class="container">
        <h1 class="ccol">Тут вы можете оставить отзыв о нашей клинике</h1>
        <form class="mt-3" method="POST" action="{{ route('reviews.clinic.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-lg-12 padcol">
            <div class="form-group">
                <label for="name" class="ccol"><h5>Ваше имя</h5></label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Ваше имя" required>
            </div>
        </div>
        <div class="col-lg-12 padcol">
            <div class="form-group">
                <label for="img" class="ccol"><h5>Фотография питомца</h5></label>
                <input class="form-control" type="file" name="img" accept="image/*" id="img" required>
                
            </div>
        </div>
        <div class="col-lg-12 padcol">
            <div class="form-group">
                <label for="message" class="ccol"><h5>Ваш отзыв</h5></label>
                <input class="form-control" type="text" name="message" id="message" placeholder="Отзыв" required>
            </div>
        </div>
        <div class="col-lg-6 padcol">
            <div class="form-group">
                <label for="disease" class="ccol"><h5>Заболевание питомца</h5></label>
                <input class="form-control" type="text" name="disease" id="disease" placeholder="Заболевание" required>
            </div>
        </div>
        <div class="col-lg-12 padcol">
            <button type="submit" class="btn btn-md btn-block border-0" style="background-color: green; color:white;"><span>Отправить</span></button>
        </div>
        </div>
        </form>
    </div>
    @endsection
</body>
</html>


