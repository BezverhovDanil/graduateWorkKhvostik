<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вы успешно оставили свой отзыв</title>
</head>
<body style="background-color: white;">
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h2 class="ccol">Вы успешно оставили свой отзыв</h2>
        <img src="{{ url('/img/catsmile.jpg') }}" alt="">
        
    </div>
    @endsection
</body>
</html>