@extends('index')

@section('cont')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 text-center mx-auto my-4">
            <h2 class="text-primary">Профіль дослідника</h2>
 		  
      
           <form method="get" name="form1">
            @csrf
            <!-- pib -->
            <div class="form-group">
                <label for="pib">Прізвище, ім'я, по батькові:</label>
                <input type="text" class="form-control" name="pib" placeholder="Введіть ПІБ дослідника" value="{{$data->pib}}" readonly>
            </div>
            <!-- gender -->
            <div class="form-group">
               <label for="gender">Стать:</label>
               <div class="col-lg-6 mx-auto ">
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="0" {{ $data['gender'] == 0 ? 'checked' : '' }} {{ $data['gender'] <> 0 ? 'disabled' : '' }} >

                        

                        <label class="form-check-label" for="gender1">
                            Не вказано
                        </label>
                    </div>     
                    <div class=" form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="1" {{ $data['gender'] == 1 ? 'checked' : '' }} {{ $data['gender'] <> 1 ? 'disabled' : '' }}>
                        <label class="form-check-label" for="gender2">
                            Чол.
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender3" value="2" {{ $data['gender'] == 2 ? 'checked' : '' }}  {{ $data['gender'] <> 2 ? 'disabled' : '' }}>
                        <label class="form-check-label" for="gender3">
                            Жін.
                        </label>
                    </div>
               </div>
            </div>
             <!-- phone -->
             <div class="form-group">
                <label for="phone">Телефон:</label>
                <input type="text" class="form-control" name="phone" placeholder="Введіть телефон" value="{{$data->phone}}" readonly>
            </div>
            <!-- email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="Введіть email" value="{{$data->email}}" readonly>
            </div>
            <!-- year_birth -->
            <div class="form-group">
                <label for="year_birth">Рік народження:</label>
                <input type="number" class="form-control mx-2" name="year_birth" min="1900" max="3000" value="{{$data->year_birth}}" readonly>
            </div>
            <!-- adres -->
            <div class="form-group">
                <label for="age">Адреса:</label>
                <div class="form-inline justify-content-center">
                    <div>
                        <label for="country"> Країна:</label>
                        <input type="text" class="form-control mx-2" name="country" placeholder="Вкажіть країну" value="{{$data->country}}" readonly>
                    </div>

                    <div>
                        <label for="city">Місто:</label>
                        <input type="text" class="form-control mx-2" name="city" placeholder="Вкажіть місто" value="{{$data->city}}" readonly>
                    </div>

                    <div>
                        <label for="work">Місце роботи:</label>
                        <input type="text" class="form-control mx-2" name="work" placeholder="Вкажіть місце роботи" value="{{$data->work}}" readonly>
                    </div>
                </div>
            </div>
            <!-- nauka -->
            <div class="form-group">
                <label for="age">Досягнення:</label>
                <div class="form-inline justify-content-center">
                    <div>
                        <label for="degree"> Науковий ступінь:</label>
                        <input type="text" class="form-control mx-2" name="degree" placeholder="Вкажіть ступінь" value="{{$data->degree}}" readonly>
                    </div>

                    <div>
                        <label for="ranks">Вчене звання:</label>
                        <input type="text" class="form-control mx-2" name="ranks" placeholder="Вкажіть звання" value="{{$data->ranks}}" readonly>
                    </div>
                </div>
            </div>
            <!-- interests -->
            <div class="form-group">
                <label for="interests">Сфера інтересів:</label>
                <input type="text" class="form-control" name="interests" placeholder="Сфера інтересів" value="{{$data->interests}}" readonly>
            </div>
             <!-- scopus -->
             <div class="form-group">
                <label for="scopus">Профіль у Scopus:</label>
                <input type="text" class="form-control" name="scopus" placeholder="Профіль у Scopus" value="{{$data->scopus}}" readonly>
            </div>
             <!-- publons -->
             <div class="form-group">
                <label for="publons">Профіль у Google Scholar:</label>
                <input type="text" class="form-control" name="publons" placeholder="Профіль у Publons" value="{{$data->publons}}" readonly>
            </div>
            <!-- wos -->
            <div class="form-group">
                <label for="wos">Профіль у Web of Science/Publons:</label>
                <input type="text" class="form-control" name="wos" placeholder="Профіль у Web of Science" value="{{$data->wos}}" readonly>
            </div>
            <!-- research_gate -->
            <div class="form-group">
                <label for="research_gate">Профіль у Research Gate:</label>
                <input type="text" class="form-control" name="research_gate" placeholder="Профіль у Research Gate" value="{{$data->research_gate}}" readonly>
            </div>
            <!-- citation_index -->
            <div class="form-group">
                <label for="citation_index">Науковометричні показники у Scopus:</label>
                <div class="form-inline justify-content-center">
                    <label for="citation_index"> Кількість цитат:</label>
                    <input type="number" class="form-control mx-2" name="citation_index" placeholder="Цитування" min="0"  max="99999" value="{{$data->citation_index}}" readonly>

                    <label for="hirsch_index">Індекс Хірша:</label>
                    <input type="number" class="form-control mx-2" name="hirsch_index" placeholder="Хірша" min="0"  max="999" value="{{$data->hirsch_index}}" readonly>
                </div>
            </div>
            <!-- project_ukr -->
            <div class="form-group">
               <label for="project_ukr">Участь у наукових проектах, фінансованих в Україні:</label>
               <div class="col-lg-6 mx-auto ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_ukr" id="project_ukr1" value="0" {{ $data['project_ukr'] == 0 ? 'checked' : '' }} {{ $data['project_ukr'] <> 0 ? 'disabled' : '' }}>
                        <label class="form-check-label" for="project_ukr1">
                            Не вказано
                        </label>
                    </div>     
                    <div class=" form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_ukr" id="project_ukr2" value="1" {{ $data['project_ukr'] == 1 ? 'checked' : '' }} {{ $data['project_ukr'] <> 1 ? 'disabled' : '' }}>
                        <label class="form-check-label" for="project_ukr2">
                            Так
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_ukr" id="project_ukr3" value="2" {{ $data['project_ukr'] == 2 ? 'checked' : '' }} {{ $data['project_ukr'] <> 2 ? 'disabled' : '' }}>
                        <label class="form-check-label" for="project_ukr3">
                           Ні
                        </label>
                    </div>
               </div>
            </div>
            <!-- project_eu -->
            <div class="form-group">
               <label for="project_eu">Участь у наукових проектах, фінансованих закордонними організаціями:</label>
               <div class="col-lg-6 mx-auto ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_eu" id="project_eu1" value="0" {{ $data['project_eu'] == 0 ? 'checked' : '' }} {{ $data['project_eu'] <> 0 ? 'disabled' : '' }}>
                        <label class="form-check-label" for="project_eu1">
                            Не вказано
                        </label>
                    </div>     
                    <div class=" form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_eu" id="project_eu2" value="1" {{ $data['project_eu'] == 1 ? 'checked' : '' }} {{ $data['project_eu'] <> 1 ? 'disabled' : '' }}>
                        <label class="form-check-label" for="project_eu2">
                            Так
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_eu" id="project_eu3" value="2" {{ $data['project_eu'] == 2 ? 'checked' : '' }} {{ $data['project_eu'] <> 2 ? 'disabled' : '' }}>
                        <label class="form-check-label" for="project_eu3">
                           Ні
                        </label>
                    </div>
               </div>
            </div>
            <!-- project -->
            <div class="form-group">
                <label for="project">Дані про проекти (назва проекту, грантодавець, рік, обсяг фінансування):</label>
                <textarea class="form-control auto-resize2" name="project" readonly>{{$data->project}}</textarea>
                <script>
                    const textArea2 = document.querySelector('.auto-resize2');
                    textArea2.addEventListener('input', function() {
                        this.style.height = 'auto';
                        this.style.height = this.scrollHeight + 'px';
                    });
                </script>
                <small class="form-text text-success">до 2000 символів</small>
            </div>
            <!-- publications -->
            <div class="form-group">
                <label for="publications">Посилання на основні наукові публікації:</label>
                <textarea class="form-control auto-resize" name="publications" readonly>{{$data->publications}}</textarea>
                <script>
                    const textArea = document.querySelector('.auto-resize');

                    window.addEventListener('DOMContentLoaded', function() {
                        resizeTextArea(textArea);
                        resizeTextArea(textArea2);
                    });

                    function resizeTextArea(textArea) {
                        textArea.style.height = 'auto';
                        textArea.style.height = textArea.scrollHeight + 'px';
                    }


                    textArea.addEventListener('input', function() {
                        this.style.height = 'auto';
                        this.style.height = this.scrollHeight + 'px';
                    });
                </script>
                <small class="form-text text-success">до 2000 символів</small>
            </div>

           
           


             
            
            

              <input type="button"  class="btn btn-primary mx-2 my-2" onclick="history.back();" value="Ok">
        </form>
    </div>
</div>

@endsection