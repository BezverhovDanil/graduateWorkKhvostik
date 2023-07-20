<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ url('/img/caticologo.png') }}" type="image/x-icon">
    <title>О нас</title>
</head>
<body style="background-color: white;">
@extends('layouts.app')

@section('content')
<div class="container">
<h2 class="aboutusinf">Наша клиника находится по адресу:</h2>   
<p class="ccol">Адрес: г. Омск, ул. Бульвар Архитекторов</p> 

<p class="ccol">Телефон: +7 (123) 456-78-90</p> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2722.8253216402036!2d73.28902483947459!3d54.9798671318133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43ab01bbdc2eb99b%3A0x4e27537b23fc84b1!2z0YPQuy4g0LHRg9C7LiDQkNGA0YXQuNGC0LXQutGC0L7RgNC-0LIsINCe0LzRgdC6LCDQntC80YHQutCw0Y8g0L7QsdC7Lg!5e0!3m2!1sru!2sru!4v1684164708524!5m2!1sru!2sru" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    


</div>
@endsection

</body>
</html>