@extends('index')

@section('cont')

<div class="row">
    <div class="col-12 text-center">
        <h1 class="text-primary">Дослідники по обраному фільтру</h1>
        
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="text-dark table-primary">
                        <th scope="col" ></th>
                        <th scope="col" >ПІБ</th>
                        <th scope="col" >Телефон</th>
                        <th scope="col" >Email</th>
                        <th scope="col" >Рік народження</th>
                        <th scope="col" >Країна</th>
                        <th scope="col" >Місто</th>
                        <th scope="col" >Ступінь</th>
                        <th scope="col" >Звання</th>
                        <th scope="col" >Сфера інтересів</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $element) <!-- Цикл перебирає змінну data (вказана у контролері), а кожний окремий елемент буде у змінній $element-->
                    <tr class="text-dark">
                        <td>
                            <a href="{{ route('researchers_profile',$element->id_researchers) }}" 
                                class="btn btn-warning btn-sm"
                                data-toggle="tooltip" title="Профіль">Профіль
                            </a>
                        </td>
                        <td>{{ $element->pib }}</td>
                        <td>{{ $element->phone }}</td>
                        <td>{{ $element->email }}</td>
                        <td>{{ $element->year_birth }}</td>
                        <td>{{ $element->country }}</td>
                        <td>{{ $element->city }}</td>
                        <td>{{ $element->degree }}</td>
                        <td>{{ $element->ranks }}</td>
                        <td>{{ $element->interests }}</td>
                    </tr>
                    @endforeach  
                </tbody>
            </table>


        </div>    
    </div>
</div>

@endsection