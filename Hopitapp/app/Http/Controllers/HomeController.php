<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Service;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){

        $doctors= doctor::all();
        $services= Service::all();

        if (Auth::id()){

            if (Auth::user()->usertype=='0'){
                return view('welcome',compact('doctors','services'));
            }
            else{
                $appointments=appointment::all();
                return view('admin.show_appointments',compact('appointments'));
            }

        }
        else{
            return redirect()->back();
        }
    }

    public function index(){

        $doctors= doctor::all();
        $services= Service::all();
        

        return view('welcome',compact('doctors','services'));
    }

    public function appointment(){

        $doctors= doctor::all();
        $services= Service::all();

        if (Auth::id()){

                return view('appointment',compact('doctors','services'));
            
            

        }
        else{
            return view('auth.register');
        }
    }

    public function contact(){

        return view('contact');
    }

    public function doctors(){
        
        $doctors= doctor::all();

       
            return view('doctors',compact('doctors'));
        
    }

    public function services(){
        $services= Service::all();

        
        
            return view('services',compact('services'));
        
    }

    public function myappointment(){
        $appointments= appointment::all();

        
        
            return view('myappointments',compact('appointments'));
        
    }

    

    public function uploadappointment(Request $request){

        $doctors= doctor::all();
        $services= Service::all();

        $appoint=new Appointment;
        

        $appoint->email=$request->email;

        $appoint->doctor=$request->doctor;

        $appoint->date=$request->date;

        $appoint->save();


        return view('successappointment',compact('doctors','services'));
    }


    
}
