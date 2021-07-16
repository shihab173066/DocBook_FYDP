<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedPost;
use Illuminate\Support\Carbon;

class PostController extends Controller
{
    public function post(Request $request){
        $data = $request->input();

        $validated = $request->validate([
            'details' => 'required|max:1000',
            'post_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:11048',
            'pdf'=> 'mimes:pdf|max:100000',
        ]);

        $d = MedPost::all();

        $imageName = time().'.'.$request->post_img->extension();  
        $request->post_img->move(public_path('patient_post_images'), $imageName);

        $pdfName = time().'.'.$request->pdf->extension();  
        $request->pdf->move(public_path('patient_post_pdfs'), $pdfName);

        MedPost::insert([
            'patient_email' => $request->email,
            'post_type' => $request->posttype,
            'problem_type' => $request->problemtype,
            'details' => $request->details,
            'image' => "patient_post_images/".$imageName,
            'pdf' => "patient_post_pdfs/".$pdfName,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'prescription_count' => 0,
            'specialist_count' => 0
            
        ]);

        return redirect()->back()->with('message', 'Medical Issue Posted Successfully! :)');



        


    }
}
