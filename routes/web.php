<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostPrescription;

Route::post('user', [UserAuth::class, 'userLogin']);
Route::post('reg', [UserAuth::class, 'userRegister']);
Route::post('home/post_issue', [PostController::class, 'post']);

Route::view('home', 'home');
Route::view('register', 'register');
Route::view('hospitalad', 'hospitalad');
Route::get('/hospitalad', function () {
    if(session()->has('hospital_admin')){
        $se = session('hospital_admin');
        $info = DB::select("select * from hospital_admins where email='$se'");
       // $doc_data = DB::select("select * from doc_schedules inner join doctors on doc_schedules.email=doctors.email");
       $doc_data =  DB::select("select * from doctors");
       return view('hospitalad', compact('info', 'doc_data'));
    
    }else{
        return view('login');
    }

    
});
Route::get('/home', function () {
    if(session()->has('doctor')){
        $se = session('doctor');
        $info = DB::select("select * from doctors where email='$se'");
        return view('home', ['info' => $info]);
    } else if(session()->has('patient')){
        $se = session('patient');
        $info = DB::select("select * from patients where email='$se'");
        //echo $info;

        return view('home', ['info' => $info]);
    } else if(session()->has('specialist')){
        $se = session('specialist');
        $info = DB::select("select * from specialist_doctors where email='$se'");

        return view('home', ['info' => $info]);
    } else if(session()->has('admin')){
        $se = session('admin');
        $info = DB::select("select * from admins where email='$se'");

        return view('home', ['info' => $info]);
    } else if(session()->has('hospital_admin')){
        $se = session('hospital_admin');
        $info = DB::select("select * from hospital_admins where email='$se'");

        return view('hospitalad', ['info' => $info]);
    }else{
        return view('login');
    }

    
})->name('home');

Route::get('/doctorhome', function () {
    if(session()->has('doctor')){
        $se = session('doctor');
        $post_info = DB::select("select * from med_posts");
        $doc_info = DB::select("select * from doctors where email='$se'");
        $patient_info = DB::select("select * from patients");
        return view('doctorhome', ['post_info' => $post_info, 'doc_info'=>$doc_info, 'patient_info' => $patient_info]);
    
    }else{
        return view('login');
    }

    
})->name('doctorhome');
Route::get('/register', function(){
    return view('register');
})->name('dochome');

Route::get('/', function () {
    

    return view('welcome');
});
Route::get('/login', function(){
    return view('login');
});
Route::get('/logout', function () {
    if(session()->has('doctor')){
        session()->pull('doctor');
    } if(session()->has('patient')){
        session()->pull('patient');
    } if(session()->has('specialist')){
        session()->pull('specialist');
    } if(session()->has('admin')){
        session()->pull('admin');
    }if(session()->has('hospital_admin')){
        session()->pull('hospital_admin');
    }

    return view('login');
});
Route::get('schedule', [ScheduleController::class, 'index']);
Route::get('schedule/{id}', [ScheduleController::class, 'destroy']);
Route::get('create_schedule/', [ScheduleController::class, 'create']);
Route::post('add_schedule', [ScheduleController::class, 'store']);
Route::get('home/consultation', function(){
    $se = session('patient');
    $info = DB::select("select * from patients where email='$se'");
    return view('consultation',  ['info' => $info]);
})->name('consul');

Route::get('/home/viewpost/{id}', function($id){
    $se = session('doctor');
    

    $post_info = DB::select("select * from med_posts where id='$id'");

        $doc_info = DB::select("select * from doctors where email='$se'");
        $patient_info = DB::select("select * from patients");

    return view('viewpost',  ['post_info' => $post_info, 'doc_info' => $doc_info, 'patient_info'=>$patient_info]);
})->name('view_post');

Route::get('/home/viewpost/give/{id}', function($id){
    $se = session('doctor');
    $post_info = DB::select("select * from med_posts where id='$id'");
    $post_info = $post_info[0];
        $doc_info = DB::select("select * from doctors where email='$se'");
        $patient_info = DB::select("select * from patients");

    return view('prescription',  ['id' => $id, 'post_info' => $post_info, 'doc_info' => $doc_info, 'patient_info'=>$patient_info]);
})->name('give_pres');


Route::post('home/add_pres/', [PostPrescription::class, 'store_pres'])->name('add_pres');
