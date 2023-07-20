@extends('layouts.app')

@section('content')
<body style="background-color: white;">
<div class="container">
  <div class="row">
    <div class="col-md-6 ccat">
        
    </div>
    <div class="col-md-6">
      <h2 class="ccol">Запись к врачу на осмотр через почту</h2>
      <form method="POST" action="{{ route('send.email') }}">
        @csrf
        <div class="form-group ccol">
          <label for="name">Ваше Имя</label>
          <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group ccol">
          <label for="petName">Имя вашего питомца</label>
          <input type="text" name="petName" id="petName" class="form-control" required>
        </div>
        <div class="form-group ccol">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group ccol">
          <label for="message">Какие жалобы у питомца?</label>
          <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
        </div>
        <img src="{{ url('/img/catpressbutton.gif') }}" alt="">
        <button type="submit" class="btn btn-warning">Отправить</button>
      </form>
    </div>
    
    <div class="row">

    
          
            <h2 style="margin-top:10%; text-align: center;" class="telegcolor">Записаться к врачу через Telegram</h2>
            
            <div class="col">
            <div style="padding: 5%;" class="col-md-6">
                <img class="telegramgif" src="{{ url('/img/telegramgif.gif') }}" alt="">                    
            </div>
            </div>
            <div class="col-md-6">
            <form method="POST" action="{{ route('send.email.telegram') }}">
              @csrf
              <div class="form-group telegcolor">
                <label for="name">Ваше Имя</label>
                <input type="text" name="name" id="name" class="form-control" required>
              </div>
              <div class="form-group telegcolor">
                <label for="petName">Имя вашего питомца</label>
                <input type="text" name="petName" id="petName" class="form-control" required>
              </div>
              <div class="form-group telegcolor">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
              </div>
              <div class="form-group telegcolor">
                <label for="message">Какие жалобы у питомца?</label>
                <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
              </div>
              
              <button type="submit" class="btn btn-warning">Отправить</button>
            </form>
            </div>
          
        
          
    </div>
    
  </div>
</div>
</body>
@endsection
