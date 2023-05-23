<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\researchers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class researchers_controller extends Controller
{
    
    public function personal_data() { 
        $user = Auth::user();
        $id_researchers = $user->id_researchers;
        $researchers = new researchers;
        return view('personal_data', ['data' => $researchers->where('id_researchers', '=', $id_researchers)->first()]);

    }

    public function researchers_edit_submit($id_researchers, Request  $req) { 
        
        $researchers = researchers::find($id_researchers); //редагуємо об'єкт класу kafedry (що у моделі). find - пошук по ключовому полю       
        $researchers->pib=$req->input('pib');
        $researchers->gender=$req->input('gender');

        if ($req->filled('phone')){
            $researchers->phone=$req->input('phone');
        }
        
        if ($req->filled('email')){
        $researchers->email=$req->input('email');
        }

        $researchers->year_birth=$req->input('year_birth');

        if ($req->filled('country')){
        $researchers->country=$req->input('country');
        }

        if ($req->filled('city')){
        $researchers->city=$req->input('city');
    }
        
        if ($req->filled('work')){
        $researchers->work=$req->input('work');
    }

        if ($req->filled('degree')){
        $researchers->degree=$req->input('degree');
    }

        if ($req->filled('ranks')){
        $researchers->ranks=$req->input('ranks');
    }

        if ($req->filled('interests')){
        $researchers->interests=$req->input('interests');
    }

        if ($req->filled('scopus')){
        $researchers->scopus=$req->input('scopus');
    }

        if ($req->filled('publons')){
        $researchers->publons=$req->input('publons');
    }

        if ($req->filled('wos')){
        $researchers->wos=$req->input('wos');
    }

        if ($req->filled('research_gate')){
        $researchers->research_gate=$req->input('research_gate');
    }






        $researchers->citation_index=$req->input('citation_index');
        $researchers->hirsch_index=$req->input('hirsch_index');
        $researchers->project_ukr=$req->input('project_ukr');
        $researchers->project_eu=$req->input('project_eu');
        $researchers->publications=$req->input('publications');
        $researchers->save(); //виконання редагування на сервері
        return redirect('/researchers_search_form'); 
        //переадресація на головну сторінку. Переадресація на сторінку по імені маршруту: return redirect()->route('kafedry_add');
        //Переадресація на сторінку по імені маршруту з параметром id_kafedry: return redirect()->route('kafedry_add',$id_kafedry);
    }


    public function researchers_del_submit($id_researchers) { 
        
        researchers::find($id_researchers)->delete();
        return redirect('/'); 
    }
    
    
    public function researchers(Request  $req) { 

         
            //+
            $user = Auth::user();
            if (!$user)
            {
            return view('start');
            }
            //fin+


        $query = researchers::query();

        $pib = $req->input('pib');
        $gender = $req->input('gender');
        $age1 = $req->input('age1');
        $age2 = $req->input('age2');
        $interests = $req->input('interests');
        $scopus = $req->input('scopus');
        $publons = $req->input('publons');
        $wos = $req->input('wos');
        $research_gate = $req->input('research_gate');
        $citation_index1 = $req->input('citation_index1');
        $citation_index2 = $req->input('citation_index2');
        $hirsch_index1 = $req->input('hirsch_index1');
        $hirsch_index2 = $req->input('hirsch_index2');
        $project_ukr = $req->input('project_ukr');
        $project_eu = $req->input('project_eu');
        $country = $req->input('country');
        $city = $req->input('city');
        $work = $req->input('work');
        $degree = $req->input('degree');
        $ranks = $req->input('ranks');


        //country
        $query->where('country', 'LIKE', "%$country%");

        //city
        $query->where('city', 'LIKE', "%$city%");

        //work
        $query->where('work', 'LIKE', "%$work%");

        //degree
        $query->where('degree', 'LIKE', "%$degree%");

        //ranks
        $query->where('ranks', 'LIKE', "%$ranks%");

        //pib
        $query->where('pib', 'LIKE', "%$pib%");

        //gender
        if ($gender > 0) {
            $query->where('gender', '=', $gender);
        }

        //age
        $currentYear = Carbon::now()->year;
        $age11=$currentYear-$age1;
        $age21=$currentYear-$age2;
        $query->where('year_birth', '<=', $age11);
        $query->where('year_birth', '>=', $age21);

        //interests
        $query->where('interests', 'LIKE', "%$interests%");

        //scopus
        $query->where('scopus', 'LIKE', "%$scopus%");

        //publons
        $query->where('publons', 'LIKE', "%$publons%");


        //wos
        $query->where('wos', 'LIKE', "%$wos%");

        //research_gate
        $query->where('research_gate', 'LIKE', "%$research_gate%");

        //citation_index
        $query->where('citation_index', '<=', $citation_index2);
        $query->where('citation_index', '>=', $citation_index1);

        //hirsch_index
        $query->where('hirsch_index', '<=', $hirsch_index2);
        $query->where('hirsch_index', '>=', $hirsch_index1);

        //project_ukr
        if ($project_ukr > 0) {
            $query->where('project_ukr', '=', $project_ukr);
        }

        //project_eu
        if ($project_eu > 0) {
            $query->where('project_eu', '=', $project_eu);
        }
        
        
        $data = $query->get();

        return view('researchers', ['data' => $data]);
   

    }


    public function researchers_profile($id_researchers) { //функція отримує параметр id з маршруту
        $researchers = new researchers;
        return view('researchers_profile', ['data' => $researchers->where('id_researchers', '=', $id_researchers)->first()]);

    }

    public function postSignin(Request $request)
    {
		
		if (! Auth::attempt($request->only('email', 'password'), $request->has('remember')))
		{
		   
            $text = "Невірний логін або пароль.";
            return view('start')->with('text', $text);
		}
		else 
        {
		    return redirect('/researchers_search_form');
        }
	}

    public function postReg(Request $request) //додавання користувача
    {
        $user = researchers::create([
            'email'    => $request->input('email'),
            'pib'     => $request->input('name'),
            'password' => bcrypt($request->input('password'))
        ]);

        Auth::loginUsingId($user->id_researchers); //автоматична авторизація після додавання користувача

        return redirect('/researchers_search_form');
     }

     public function perform()
    {
     
        Session::flush(); //видалення всіх даних сесії
        Auth::logout(); //вихід користувача з системи
        return redirect('/');
        
    }

}
