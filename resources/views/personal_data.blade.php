@extends('index')

@section('cont')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 text-center mx-auto my-4">
            <h2 class="text-primary">Профіль дослідника</h2>
 		  
      
           <form method="post" name="form1" action="{{ route('researchers_edit_submit',$data->id_researchers) }}">
            @csrf
            <!-- pib -->
            <div class="form-group">
                <label for="pib">Прізвище, ім'я, по батькові:</label>
                <input type="text" class="form-control" name="pib" placeholder="Введіть ПІБ дослідника" value="{{$data->pib}}" >
            </div>
            <!-- gender -->
            <div class="form-group">
               <label for="gender">Стать:</label>
               <div class="col-lg-6 mx-auto ">
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="0" {{ $data['gender'] == 0 ? 'checked' : '' }} >

                        

                        <label class="form-check-label" for="gender1">
                            Не вказано
                        </label>
                    </div>     
                    <div class=" form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="1" {{ $data['gender'] == 1 ? 'checked' : '' }} >
                        <label class="form-check-label" for="gender2">
                            Чол.
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender3" value="2" {{ $data['gender'] == 2 ? 'checked' : '' }}  >
                        <label class="form-check-label" for="gender3">
                            Жін.
                        </label>
                    </div>
               </div>
            </div>
             <!-- phone -->
             <div class="form-group">
                <label for="phone">Телефон:</label>
                <input type="text" class="form-control" name="phone" placeholder="Введіть телефон" value="{{$data->phone}}" >
            </div>
            <!-- email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="Введіть email" value="{{$data->email}}" >
            </div>
            <!-- year_birth -->
            <div class="form-group">
                <label for="year_birth">Рік народження:</label>
                <input type="number" class="form-control mx-2" name="year_birth" min="1900" max="3000" value="{{$data->year_birth}}" >
            </div>
            <!-- adres -->
            <div class="form-group">
                <label for="age">Адреса:</label>
                <div class="form-inline justify-content-center">
                    <label for="country"> Країна:</label>
                    <input type="text" class="form-control mx-2" name="country" placeholder="Вкажіть країну" value="{{$data->country}}" >

                    <label for="city">Місто:</label>
                    <input type="text" class="form-control mx-2" name="city" placeholder="Вкажіть місто" value="{{$data->city}}" >

                    <label for="work">Місце роботи:</label>
                    <input type="text" class="form-control mx-2" name="work" placeholder="Вкажіть місце роботи" value="{{$data->work}}" >
                </div>
            </div>
            <!-- nauka -->
            <div class="form-group">
                <label for="age">Досягнення:</label>
                <div class="form-inline justify-content-center">
                    <label for="degree"> Науковий ступінь:</label>
                    <input type="text" class="form-control mx-2" name="degree" placeholder="Вкажіть ступінь" value="{{$data->degree}}" >

                    <label for="ranks">Вчене звання:</label>
                    <input type="text" class="form-control mx-2" name="ranks" placeholder="Вкажіть звання" value="{{$data->ranks}}" >
                </div>
            </div>
            <!-- interests -->
            <div class="form-group">
                <label for="interests">Сфера інтересів:</label>
                <input type="text" class="form-control" name="interests" placeholder="Сфера інтересів" value="{{$data->interests}}" >
            </div>
             <!-- scopus -->
             <div class="form-group">
                <label for="scopus">Профіль у Scopus:</label>
                <input type="text" class="form-control" name="scopus" placeholder="Профіль у Scopus" value="{{$data->scopus}}" >
            </div>
             <!-- publons -->
             <div class="form-group">
                <label for="publons">Профіль у Publons:</label>
                <input type="text" class="form-control" name="publons" placeholder="Профіль у Publons" value="{{$data->publons}}" >
            </div>
            <!-- wos -->
            <div class="form-group">
                <label for="wos">Профіль у Web of Science:</label>
                <input type="text" class="form-control" name="wos" placeholder="Профіль у Web of Science" value="{{$data->wos}}" >
            </div>
            <!-- research_gate -->
            <div class="form-group">
                <label for="research_gate">Профіль у Research Gate:</label>
                <input type="text" class="form-control" name="research_gate" placeholder="Профіль у Research Gate" value="{{$data->research_gate}}" >
            </div>
            <!-- citation_index -->
            <div class="form-group">
                <label for="citation_index">Індекси:</label>
                <div class="form-inline justify-content-center">
                    <label for="citation_index"> Цитування:</label>
                    <input type="number" class="form-control mx-2" name="citation_index" placeholder="Цитування" min="0"  max="999" value="{{$data->citation_index}}" >

                    <label for="hirsch_index">Хірша:</label>
                    <input type="number" class="form-control mx-2" name="hirsch_index" placeholder="Хірша" min="0"  max="999" value="{{$data->hirsch_index}}" >
                </div>
            </div>
            <!-- project_ukr -->
            <div class="form-group">
               <label for="project_ukr">Участь у наукових проектах, фінансованих в Україні:</label>
               <div class="col-lg-6 mx-auto ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_ukr" id="project_ukr1" value="0" {{ $data['project_ukr'] == 0 ? 'checked' : '' }} >
                        <label class="form-check-label" for="project_ukr1">
                            Не вказано
                        </label>
                    </div>     
                    <div class=" form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_ukr" id="project_ukr2" value="1" {{ $data['project_ukr'] == 1 ? 'checked' : '' }} >
                        <label class="form-check-label" for="project_ukr2">
                            Так
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_ukr" id="project_ukr3" value="2" {{ $data['project_ukr'] == 2 ? 'checked' : '' }} >
                        <label class="form-check-label" for="project_ukr3">
                           Ні
                        </label>
                    </div>
               </div>
            </div>
            <!-- project_eu -->
            <div class="form-group">
               <label for="project_eu">Участь у наукових проектах, фінансованих в ЄС:</label>
               <div class="col-lg-6 mx-auto ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_eu" id="project_eu1" value="0" {{ $data['project_eu'] == 0 ? 'checked' : '' }} >
                        <label class="form-check-label" for="project_eu1">
                            Не вказано
                        </label>
                    </div>     
                    <div class=" form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_eu" id="project_eu2" value="1" {{ $data['project_eu'] == 1 ? 'checked' : '' }} >
                        <label class="form-check-label" for="project_eu2">
                            Так
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_eu" id="project_eu3" value="2" {{ $data['project_eu'] == 2 ? 'checked' : '' }} >
                        <label class="form-check-label" for="project_eu3">
                           Ні
                        </label>
                    </div>
               </div>
            </div>
            <!-- publications -->
            <div class="form-group">
                <label for="publications">Посилання на основні наукові публікації:</label>
                <textarea class="form-control auto-resize" name="publications" >{{$data->publications}}</textarea>
                <script>
                    const textArea = document.querySelector('.auto-resize');

                    window.addEventListener('DOMContentLoaded', function() {
                        resizeTextArea(textArea);
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

            </div>

           
           


             
            
            

            <button type="submit" class="btn btn-primary mx-2 my-2">Зберегти</button>
			<button type="reset" class="btn btn-primary">Очистити</button>
           
            
        </form>
        <div class="text-right">
            <a  href="{{ route('researchers_del',$data->id_researchers) }}"
                                class="btn btn-danger btn-sm" 
                                onclick="return confirm('Ви впевнені, що хочете видалити профіль?')"
                                data-toggle="tooltip" title="Видалити">
                                Видалити профіль
            </a>
        </div>
    </div>
</div>	

@endsection