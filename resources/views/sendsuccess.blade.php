<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вы записались к врачу</title>
</head>
<body style="background-color: white;">
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h2>Вы успешно записались к врачу</h2>
        <img src="{{ url('/img/nyancat.gif') }}" alt="">
        <p>Доктор с вами свяжется через почту и назначит время</p>
    </div>
    @endsection
</body>
</html>