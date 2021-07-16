<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescription;
use App\Models\MedPost;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use Validator;
use Storage;


class PostPrescription extends Controller
{
    public function store_pres(Request $request){

        $rules = [];


        foreach($request->input('name') as $key => $value) {
            $rules["name.{$key}"] = 'required';

        }

        foreach($request->input('test_name') as $key => $value) {
            $rules["test_name.{$key}"] = 'required';
            
        }



        $validator = Validator::make($request->all(), $rules);

        $output = "";
        if ($validator->passes()) {

            $index = count($request->input('name')) - 1;
            echo '<script>alert("'.$index.'"); </script>';
            $i = 0;

            foreach($request->input('name') as $name => $value) {
              
               
                if($i == $index){
                    $output = $output.$value;

                }else{
                     $output = $output.$value."|";
                }
                $i += 1;
            }

            $output = $output."\n";

            $i = 0;
            $index = count($request->input('time')) - 1;
            foreach($request->input('time') as $name => $value) {
              
               
                if($i == $index){
                    $output = $output.$value;

                }else{
                     $output = $output.$value."|";
                }
                $i += 1;
            }

            $i = 0;
            $output = $output."\n";
            $index = count($request->input('continue')) - 1;
            foreach($request->input('continue') as $name => $value) {
              
               
                if($i == $index){
                    $output = $output.$value;

                }else{
                     $output = $output.$value."|";
                }
                $i += 1;
            }

            $output = $output."\n";
            $i = 0;
            $index = count($request->input('intake')) - 1;
            foreach($request->input('intake') as $name => $value) {
              
               
                if($i == $index){
                    $output = $output.$value;

                }else{
                     $output = $output.$value."|";
                }
                $i += 1;
            }

            $output = $output."\n";
            $i = 0;
            $index = count($request->input('describe')) - 1;
            foreach($request->input('describe') as $name => $value) {
              
               
                if($i == $index){
                    if(strpos($value, "\n") !== FALSE) {
                        $output = $output.str_replace(array("\n"), '', $value);
                      }else{
                        $output = $output.$value;
                      }
                    

                }else{
                    if(strpos($value, "\n") !== FALSE) {
                        $output = $output.str_replace(array("\n"), '', $value).'|';
                      }else{
                        $output = $output.$value.'|';
                      }
                }
                $i += 1;
            }
            $output = $output."\n";

            $i = 0;
            $index = count($request->input('test_name')) - 1;
            foreach($request->input('test_name') as $name => $value) {
              
               
                if($i == $index){
                    $output = $output.$value;

                }else{
                     $output = $output.$value."|";
                }
                $i += 1;
            }
            $i = 0;
            $output = $output."\n";
            $index = count($request->input('reason')) - 1;
            foreach($request->input('reason') as $name => $value) {
              
               
                if($i == $index){
                    $output = $output.$value;

                }else{
                     $output = $output.$value."|";
                }
                $i += 1;
            }

            $output = $output."\n";
            $i = 0;
            $index = count($request->input('hospital')) - 1;
            foreach($request->input('hospital') as $name => $value) {
              
               
                if($i == $index){
                    $output = $output.$value;

                }else{
                     $output = $output.$value."|";
                }
                $i += 1;
            }

            $output = $output."\n";
            $i = 0;
            $index = count($request->input('advice')) - 1;
            foreach($request->input('advice') as $name => $value) {
              
               
                if($i == $index){
                    if(strpos($value, "\n") !== FALSE) {
                        $output = $output.str_replace(array("\n"), '', $value);
                      }else{
                        $output = $output.$value;
                      }
                    

                }else{
                    if(strpos($value, "\n") !== FALSE) {
                        $output = $output.str_replace(array("\n"), '', $value);
                      }else{
                        $output = $output.$value;
                      }
                }
                $i += 1;
            }

            $output = $output."\n";
            $i = 0;
            $index = count($request->input('tips')) - 1;
            foreach($request->input('tips') as $name => $value) {
              
               
                if($i == $index){
                    if(strpos($value, "\n") !== FALSE) {
                        $output = $output.str_replace(array("\n"), '', $value);
                      }else{
                        $output = $output.$value;
                      }
                    

                }else{
                    if(strpos($value, "\n") !== FALSE) {
                        $output = $output.str_replace(array("\n"), '', $value);
                      }else{
                        $output = $output.$value;
                      }
                }
                $i += 1;
            }



           // $request['output'] = $output;
          // echo '<script>alert("'.$output.'"); </script>';

       
          $d = date("Y_m_d_h_i");
          $pres_path = 'prescriptions/'.$request->input('post_id').'_'.$d.'.txt';

          Storage::put($pres_path, $output . PHP_EOL, FILE_APPEND);
          $data = $request->input();

         
  
          $pres= Prescription::all();
  
         
  
          Prescription::insert([
              'doctor_email' => session('doctor'),
              'patient_email' => $request->pat_email,
              'information' => 'storage/app/'.$pres_path,
              'created_at' => \Carbon\Carbon::now()->toDateTimeString()
              
          ]);
          $x = $request->input('post_id');
          $count = DB::select("select prescription_count from med_posts where id='$x'");
          $count = $count[0]->prescription_count;

          
          $count = $count + 1;
        
          MedPost::where('id', $request->input('post_id'))->update(['prescription_count'=> $count]);

          if($count == 3){
            return redirect('/doctorhome');
            
          }else{
            return "success";
            return response()->json(['success'=>'done']);
          }

          
          

            

            
        }


        return response()->json(['error'=>$validator->errors()->all()]);
    }

    }

