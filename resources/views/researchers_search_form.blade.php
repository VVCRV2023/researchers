@extends('index')

@section('cont')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 text-center mx-auto my-4">
            <h2 class="text-primary">Пошук дослідника</h2>
 		  
      
           <form method="get" name="form1" action="{{ route('researchers') }}">
            @csrf
            <!-- pib -->
            <div class="form-group">
                <label for="pib">Прізвище, ім'я, по батькові:</label>
                <input type="text" class="form-control" name="pib" placeholder="до 255 символів">
                <small class="form-text text-success">до 255 символів</small>
            </div>
            <!-- gender -->
            <div class="form-group">
               <label for="gender">Виберіть стать:</label>
               <div class="col-lg-6 mx-auto ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender1" value="0" checked>
                        <label class="form-check-label" for="gender1">
                            Не важливо
                        </label>
                    </div>     
                    <div class=" form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="1">
                        <label class="form-check-label" for="gender2">
                            Чол.
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="gender3" value="2">
                        <label class="form-check-label" for="gender3">
                            Жін.
                        </label>
                    </div>
               </div>
            </div>
            <!-- age -->
            <div class="form-group">
                <label for="age">Вкажіть вік дослідника:</label>
                <div class="form-inline justify-content-center">
                    <label for="age1"> з:</label>
                    <input type="number" class="form-control mx-2" name="age1" placeholder="Нижня межа" min="10" max="100" value="18">

                    <label for="age2">по:</label>
                    <input type="number" class="form-control mx-2" name="age2" placeholder="Верхня межа" min="10" max="100" value="80">
                </div>
            </div>
            <!-- adres -->
            <div class="form-group">
                <label for="age">Адреса:</label>
                <div class="form-inline justify-content-center">
                    
                    <div>
                        <label for="country"> Країна:</label>
                        <input type="text" class="form-control mx-2" name="country" placeholder="до 50 символів" value="Україна">
                        <small class="form-text text-success">до 50 символів</small>
                    </div>

                    <div>
                        <label for="city">Місто:</label>
                        <input type="text" class="form-control mx-2" name="city" placeholder="до 50 символів">
                        <small class="form-text text-success">до 50 символів</small>
                    </div>

                    <div>
                        <label for="work">Місце роботи:</label>
                        <input type="text" class="form-control mx-2" name="work" placeholder="до 50 символів">
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
                        <input type="text" class="form-control mx-2" name="degree" placeholder="до 50 символів">
                        <small class="form-text text-success">до 50 символів</small>
                    </div>

                    <div>
                        <label for="ranks">Вчене звання:</label>
                        <input type="text" class="form-control mx-2" name="ranks" placeholder="до 20 символів">
                        <small class="form-text text-success">до 20 символів</small>
                    </div>
                </div>
            </div>
            <!-- interests -->
            <div class="form-group">
                <label for="interests">Сфера інтересів:</label>
                <input type="text" class="form-control" name="interests" placeholder="до 255 символів">
                <small class="form-text text-success">до 255 символів</small>
            </div>
             <!-- scopus -->
             <div class="form-group">
                <label for="scopus">Профіль у Scopus:</label>
                <input type="text" class="form-control" name="scopus" placeholder="до 255 символів">
                <small class="form-text text-success">до 255 символів</small>
            </div>
             <!-- publons -->
             <div class="form-group">
                <label for="publons">Профіль у Google Scholar:</label>
                <input type="text" class="form-control" name="publons" placeholder="до 255 символів">
                <small class="form-text text-success">до 255 символів</small>
            </div>
            <!-- wos -->
            <div class="form-group">
                <label for="wos">Профіль у Web of Science/Publons:</label>
                <input type="text" class="form-control" name="wos" placeholder="до 255 символів">
                <small class="form-text text-success">до 255 символів</small>
            </div>
            <!-- research_gate -->
            <div class="form-group">
                <label for="research_gate">Профіль у Research Gate:</label>
                <input type="text" class="form-control" name="research_gate" placeholder="до 255 символів">
                <small class="form-text text-success">до 255 символів</small>
            </div>
            <!-- citation_index -->
            <div class="form-group">
                <label for="citation_index">Вкажіть бажану кількість цитат:</label>
                <div class="form-inline justify-content-center">
                    <label for="citation_index1"> з:</label>
                    <input type="number" class="form-control mx-2" name="citation_index1" placeholder="Нижня межа" min="0" max="99999" value="0" max="99999">

                    <label for="citation_index2">по:</label>
                    <input type="number" class="form-control mx-2" name="citation_index2" placeholder="Верхня межа" min="0" max="99999" value="99999" max="99999">
                </div>
            </div>
            <!-- hirsch_index -->
            <div class="form-group">
                <label for="hirsch_index">Вкажіть бажаний індекс Хірша:</label>
                <div class="form-inline justify-content-center">
                    <label for="hirsch_index1"> з:</label>
                    <input type="number" class="form-control mx-2" name="hirsch_index1" placeholder="Нижня межа" min="0" value="0" max="999">

                    <label for="hirsch_index2">по:</label>
                    <input type="number" class="form-control mx-2" name="hirsch_index2" placeholder="Верхня межа" min="0" value="999" max="999">
                </div>
            </div>
            <!-- project_ukr -->
            <div class="form-group">
               <label for="project_ukr">Участь у наукових проектах, фінансованих в Україні:</label>
               <div class="col-lg-6 mx-auto ">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_ukr" id="project_ukr1" value="0" checked>
                        <label class="form-check-label" for="project_ukr1">
                            Не важливо
                        </label>
                    </div>     
                    <div class=" form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_ukr" id="project_ukr2" value="1">
                        <label class="form-check-label" for="project_ukr2">
                            Так
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_ukr" id="project_ukr3" value="2">
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
                        <input class="form-check-input" type="radio" name="project_eu" id="project_eu1" value="0" checked>
                        <label class="form-check-label" for="project_eu1">
                            Не важливо
                        </label>
                    </div>     
                    <div class=" form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_eu" id="project_eu2" value="1">
                        <label class="form-check-label" for="project_eu2">
                            Так
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="project_eu" id="project_eu3" value="2">
                        <label class="form-check-label" for="project_eu3">
                           Ні
                        </label>
                    </div>
               </div>
            </div>


             
            
            

              <button type="submit" class="btn btn-primary mx-2 my-2">Показати</button>
			  <button type="reset" class="btn btn-primary">Очистити</button>
        </form>
    </div>
</div>

@endsection