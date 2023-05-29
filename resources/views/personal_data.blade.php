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
                <input type="text" class="form-control" name="pib" placeholder="до 255 символів" value="{{$data->pib}}" >
                <small class="form-text text-success">до 255 символів</small>
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
                <input type="text" class="form-control" name="phone" placeholder="до 150 символів" value="{{$data->phone}}" >
                <small class="form-text text-success">до 150 символів</small>
            </div>
            <!-- email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="до 255 символів" value="{{$data->email}}" >
                <small class="form-text text-success">до 255 символів</small>
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
                    <div>
                        <label for="country"> Країна:</label>
                        <input type="text" class="form-control mx-2" name="country" placeholder="до 50 символів" value="{{$data->country}}" >
                        <small class="form-text text-success">до 50 символів</small>
                    </div>

                    <div>
                        <label for="city">Місто:</label>
                        <input type="text" class="form-control mx-2" name="city" placeholder="до 50 символів" value="{{$data->city}}" >
                        <small class="form-text text-success">до 50 символів</small>
                    </div>

                    <div>
                        <label for="work">Місце роботи:</label>
                        <input type="text" class="form-control mx-2" name="work" placeholder="до 50 символів" value="{{$data->work}}" >
                        <small class="form-text text-success">до 50 символів</small>
                    </div>
                </div>
            </div>
            <!-- nauka -->
            <div class="form-group">
                <label for="age">Досягнення:</label>
                <div class="form-inline justify-content-center">
                    <div>
                        <label for="degree"> Науковий ступінь:</label>
                        <input type="text" class="form-control mx-2" name="degree" placeholder="до 50 символів" value="{{$data->degree}}" >
                        <small class="form-text text-success">до 50 символів</small>
                    </div>

                    <div>
                        <label for="ranks">Вчене звання:</label>
                        <input type="text" class="form-control mx-2" name="ranks" placeholder="до 20 символів" value="{{$data->ranks}}" >
                        <small class="form-text text-success">до 20 символів</small>
                    </div>
                </div>
            </div>
            <!-- interests -->
            <div class="form-group">
                <label for="interests">Сфера інтересів:</label>
                <input type="text" class="form-control" name="interests" placeholder="до 255 символів" value="{{$data->interests}}" >
                <small class="form-text text-success">до 255 символів</small>
            </div>
             <!-- scopus -->
             <div class="form-group">
                <label for="scopus">Профіль у Scopus:</label>
                <input type="text" class="form-control" name="scopus" placeholder="до 255 символів" value="{{$data->scopus}}" >
                <small class="form-text text-success">до 255 символів</small>
            </div>
             <!-- publons -->
             <div class="form-group">
                <label for="publons">Профіль у Google Scholar:</label>
                <input type="text" class="form-control" name="publons" placeholder="до 255 символів" value="{{$data->publons}}" >
                <small class="form-text text-success">до 255 символів</small>
            </div>
            <!-- wos -->
            <div class="form-group">
                <label for="wos">Профіль у Web of Science/Publons:</label>
                <input type="text" class="form-control" name="wos" placeholder="до 255 символів" value="{{$data->wos}}" >
                <small class="form-text text-success">до 255 символів</small>
            </div>
            <!-- research_gate -->
            <div class="form-group">
                <label for="research_gate">Профіль у Research Gate:</label>
                <input type="text" class="form-control" name="research_gate" placeholder="до 255 символів" value="{{$data->research_gate}}" >
                <small class="form-text text-success">до 255 символів</small>
            </div>
            <!-- citation_index -->
            <div class="form-group">
                <label for="citation_index">Науковометричні показники у Scopus:</label>
                <div class="form-inline justify-content-center">
                    <label for="citation_index"> Кількість цитат:</label>
                    <input type="number" class="form-control mx-2" name="citation_index" placeholder="Цитування" min="0"  max="99999" value="{{$data->citation_index}}" >

                    <label for="hirsch_index">Індекс Хірша:</label>
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
               <label for="project_eu">Участь у наукових проектах, фінансованих закордонними організаціями:</label>
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
            <!-- project -->
            <div class="form-group">
                <label for="project">Дані про проекти (назва проекту, грантодавець, рік, обсяг фінансування):</label>
                <textarea class="form-control auto-resize2" name="project" >{{$data->project}}</textarea>
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
                <textarea class="form-control auto-resize" name="publications" >{{$data->publications}}</textarea>
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