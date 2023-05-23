@extends('index')

@section('cont')

<div class="row">
      	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 text-center mx-auto">
            <h4 class="text-primary">Реєстрація</h4>
 		  <form method="post" name="form1" action="/reg">
            @csrf
            <div class="form-group">
                <label for="name">ПІБ:</label>
                <input type="text" class="form-control" name="name" placeholder="Введіть ПІБ" required autocomplete="off">
               </div>  
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" name="email" placeholder="Введіть email" required autocomplete="off">
               </div>
              <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" class="form-control" name="password" placeholder="Введіть пароль" required autocomplete="off">
               </div>
              <button type="submit" class="btn btn-primary mx-2 my-2">Зареєструватися</button>
        </form>
      </div>
</div>		

@endsection