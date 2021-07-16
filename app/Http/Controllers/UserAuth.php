<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\SpecialistDoctor;
use App\Models\HospitalAdmin;
use App\Models\DocSchedule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    public function userLogin(Request $request){
        $data = $request->input();
        
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:255',
        ]);

        if($data['userType'] == "doctor"){

           

            $d = Doctor::where('email', $data['email'])->value('password');
            if(Hash::check($data['password'], $d)){
                $request->session()->put('doctor', $data['email']);
                    return redirect('/doctorhome');

            }else{
                $errors = 'Invalid Login';
                return redirect('/login')->withErrors($errors);

            }
            /*
            foreach($d as $x){
                //echo $x;
                if($x['email'] == $data['email'] and  Hash::check($data['password'], $x['password'])){
                    $request->session()->put('doctor', $data['email']);
                    return redirect('home');
                    break;
                }
            }
            echo "Invalid Login";
*/
           
        }else if ($data['userType'] == "patient"){
            $d = Patient::where('email', $data['email'])->value('password');
            if(Hash::check($data['password'], $d)){
                $request->session()->put('patient', $data['email']);
                    return redirect('home');

            }else{
                $errors = 'Invalid Login';
                return redirect('/login')->withErrors($errors);

            }
            
             

        }else if ($data['userType'] == "specialist"){
            $d = SpecialistDoctor::where('email', $data['email'])->value('password');
            if(Hash::check($data['password'], $d)){
                $request->session()->put('specialist', $data['email']);
                    return redirect('home');

            }else{
                $errors = 'Invalid Login';
                return redirect('/login')->withErrors($errors);

            }
           
               
            
        }else if ($data['userType'] == "admin"){
            $d = Admin::where('email', $data['email'])->value('password');
            if(Hash::check($data['password'], $d)){
                $request->session()->put('admin', $data['email']);
                    return redirect('home');

            }else{
                $errors = 'Invalid Login';
                return redirect('/login')->withErrors($errors);

            }

               

           
        }else if($data['userType'] == "hospital_admin"){

            $d = HospitalAdmin::where('email', $data['email'])->value('password');
            if($data['password'] == $d){
                $request->session()->put('hospital_admin', $data['email']);
                $data2 = DocSchedule::orderBy('id','desc')->get();
                return view('schedule',compact(['data2']));

            }else{
                $errors = 'Invalid Login';
                return redirect('/login')->withErrors($errors);

            }
            

          

           
        }else{

        }
    }

    function random_username($string) {
        $code = "";
        //$ind = 0;
        $str = str_split($string);
        foreach($str as $x){
        //$ind += 1;
            $code = $code.ord($x);
            //echo $ind;
        }
        $username = substr($code, 0, 4) + substr($code, -1, 4) + substr(time(), 0, 5) + substr(mt_rand(), 0, 3);
        return $username;
    }

    public function userRegister(Request $request){

        $data = $request->input();

        

        if($data['userType'] == "patient"){
            $validated = $request->validate([
                'email' => 'required|email|unique:patients',
                'password' => 'required|max:255',
                'fname' => 'required|max:255',
                'lname' => 'required|max:255',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
                'propic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:11048',
                'age' => 'required|integer|min:8|max:100',
                'gender' => 'required|max:6',
                'blood' => 'required|max:10'
            ]);
            
            $d = Patient::all();
            
            foreach($d as $x){
               // echo $x;
                if($x['email'] == $data['email']){
                    return view('login');
                    break;
                }
            }
            $imageName = time().'.'.$request->propic->extension();  
            $request->propic->move(public_path('patient_propics'), $imageName);

            $full = $request->fname.$request->lname;
            $id = $this->random_username($full);

            Patient::insert([
                'userid' => $id,
                'email' => $request->email,
                'fname' => $request->fname,
                'lname' => $request->lname,
                'phone' => $request->phone,
                'propic' => "patient_propics/".$imageName,
                'password' => Hash::make($request->password),
                'age' => $request->age,
                'gender' => $request->gender,
                 'bloodgroup' => $request->blood,
                 'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                
            ]);

            return view('login');
           
        }

        else if($data['userType'] == "doctor"){
            $d = Doctor::all();
            $validated = $request->validate([
                'email' => 'required|email|unique:doctors',
                'password' => 'required|max:255',
                'fname' => 'required|max:255',
                'homeaddress' => 'required|max:255',
                'chamberaddress' => 'required|max:255',
                'hospital' => 'required|max:255',
                'nidno' => 'required|max:255',
                'medcollege' => 'required|max:255',
                'gradyear' => 'required|integer',
                'licenseno' => 'required|integer',
                'experience' => 'required|integer',
                'degree' => 'required|max:255',
                'lname' => 'required|max:255',
                'propic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:11048',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
                'age' => 'required|integer|min:8|max:100',
                'gender' => 'required|max:6',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            foreach($d as $x){
                //echo $x;
                if($x['email'] == $data['email']){
                    return view('login');
                    break;
                }
            }

            $imageName = time().'.'.$request->propic->extension();  
            $request->propic->move(public_path('doctor_propics'), $imageName);

            Doctor::insert([
                'email' => $request->email,
                 'fname' => $request->fname,
                 'homeaddress' => $request->homeaddress,
                 'chamberaddress' => $request->chamberaddress,
                 'hospital' => $request->hospital,
                 'nidno' => $request->nidno,
                 'medcollege' => $request->medcollege,
                 'gradyear' => $request->gradyear,
                 'licenseno' => $request->licenseno,
                 'experience' => $request->experience,
                 'degree' => $request->degree,

                'lname' => $request->lname,
                'propic' => "doctor_propics/".$imageName,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'age' => $request->age,
                'gender' => $request->gender,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);

            return view('login');
           
        }
        else if($data['userType'] == "specialist"){
            $d = SpecialistDoctor::all();
            
            $validated = $request->validate([
                'email' => 'required|email|unique:specialist_doctors',
                'fname' => 'required|max:255',
                'homeaddress' => 'required|max:255',
                'chamberaddress' => 'required|max:255',
                'hospital' => 'required|max:255',
                'nidno' => 'required|max:255',
                'medcollege' => 'required|max:255',
                'gradyear' => 'required|integer',
                'licenseno' => 'required|integer',
                'experience' => 'required|integer',
                'degree' => 'required|max:255',
                'field' => 'required|max:255',
                'lname' => 'required|max:255',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
                'propic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:11048',
                'password' => 'required|max:255',
                'age' => 'required|integer|min:8|max:100',
                'gender' => 'required|max:6',
            ]);

            foreach($d as $x){
               // echo $x;
                if($x['email'] == $data['email']){
                    return view('login');
                    break;
                }
            }
            $imageName = time().'.'.$request->propic->extension();  
            $request->propic->move(public_path('specialist_propics'), $imageName);

            SpecialistDoctor::insert([
                'email' => $request->email,
                'fname' => $request->fname,
                'lname' => $request->lname,
                'homeaddress' => $request->homeaddress,
                 'chamberaddress' => $request->chamberaddress,
                 'hospital' => $request->hospital,
                 'nidno' => $request->nidno,
                 'medcollege' => $request->medcollege,
                 'gradyear' => $request->gradyear,
                 'licenseno' => $request->licenseno,
                 'experience' => $request->experience,
                 'degree' => $request->degree,
                 'field' => $request->field,
                'propic' => "specialist_propics/".$imageName,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'age' => $request->age,
                'gender' => $request->gender,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);

            return view('login');
           
        } else if($data['userType'] == "admin"){
            $d = Admin::all();
            $validated = $request->validate([
                'email' => 'required|email|unique:mysql2.admins,email',
                'password' => 'required|max:255'
            ]);
            foreach($d as $x){
                //echo $x;
                if($x['email'] == $data['email']){
                    return view('login');
                    break;
                }
            }

            Admin::insert([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);

            return view('login');
           
        }else{


        }

    }
}
