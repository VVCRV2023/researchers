@extends('index')

@section('cont')

  @if(isset($text)) 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 text-center mx-auto">
            <div class="alert alert-danger">  <!--Bootstrap -->
                {{ $text }} <!--Повідомлення для користувача, що треба авторизуватися -->
            </div> 
        </div>
    </div>
  @endif


<div class="row">
      	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 text-center mx-auto">
            <h4 class="text-primary">Авторизація</h4>
 		  <form method="post" name="form1" action="/login">
            @csrf
              <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" name="email" placeholder="Введіть email">
               </div>
              <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" class="form-control" name="password" placeholder="Введіть пароль">
               </div>
               <div class="form-check">
                <input type="checkbox" class="form-check-input" name="remember">
                <label class="form-check-label" for="flexCheckDefault">Запам'ятати мене</label>
               </div>
              <button type="submit" class="btn btn-primary mx-2 my-2">Ок</button>
        </form>
      </div>
</div>	

@endsection