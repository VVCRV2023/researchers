@section('nav')

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light"> 
    <a class="navbar-brand" href="/"><img src="/logo.png"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"> <a class="nav-link" href="/researchers_search_form">Пошук дослідника <span class="sr-only">(current)</span></a> </li>
      @if(Auth::check()) <!-- Приховування кнопки коли користувач зареєстрований-->
      <li class="nav-item"> <a class="nav-link" href="/personal_data">Особисті дані</a> </li>
      @endif
      <li class="nav-item"> <a class="nav-link" href="/reg">Реєстрація</a> </li>
      @if(Auth::check()) <!-- Приховування кнопки коли користувач зареєстрований-->
		    <li class="nav-item"> <a class="nav-link" href="/logout">Вихід</a> </li>
      @endif
    </ul>
  </div>
</nav>