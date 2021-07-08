<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HospitalAdmin;
use App\Models\DocSchedule;
use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class ScheduleController extends Controller
{

    public function index()
    {
        $data2 = DocSchedule::orderBy('id','desc')->get();
        return view('schedule',compact(['data2']));
    }

    public function create()
    {
        $data = Doctor::orderBy('id','desc')->get();
        return view('create_schedule', compact(['data']));
    }

    public function store(Request $request)
    {
        
        $request->validate([
         'start_time' => 'required',
         'end_time' => 'required',
        ]);

        $res = new DocSchedule;
        $res->email = $request->input('emails');
        $res->start_time = $request->input('start_time');
        $res->end_time = $request->input('end_time');

        $res->save();
        echo $request->input('emails');


       return redirect('schedule');
    }

    public function show($id)
    {
       $data =  DocSchedule::find($id);
       return view('show_schedule',compact(['data']));
    }

    public function edit($id)
    {
       $data= DocSchedule::find($id);
       return view('edit_schedule',compact(['data']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required',
            'start_time' => 'required|email',
            'end_time' => 'required',
        ]);

        DocSchedule::where('id',$id)->update($request->all());
        return redirect()->back()->with('success','Update Successfully');
        
    }

    public function destroy($id)
    {
        DocSchedule::where('id',$id)->delete();
        return redirect()->back()->with('success','Delete Successfully');
    }

}
