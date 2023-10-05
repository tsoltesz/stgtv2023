<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Http\Request;

use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adddoctor()
    {

        if (Auth::id()) {

            if (Auth::user()->usertype == '1') {

                $doctors = doctor::all();
                return view('admin.add_doctor', compact('doctors'));
            } else {

                $doctors = doctor::all();
                $services = Service::all();

                return view('nopermission');

            }


        } else {
            return view('auth.login');
        }

    }

    public function showdoctor()
    {

        if (Auth::id()) {

            if (Auth::user()->usertype == '1') {

                $doctors = doctor::all();
                return view('admin.show_doctor', compact('doctors'));
            } else {

                $doctors = doctor::all();
                $services = Service::all();

                return view('nopermission');

            }


        } else {
            return view('auth.login');
        }
    }

    public function showservices()
    {

        
        if (Auth::id()) {

            if (Auth::user()->usertype == '1') {

             
        $services = service::all();
        return view('admin.show_services', compact('services'));
            } else {

                $doctors = doctor::all();
                $services = Service::all();

                return view('nopermission');

            }


        } else {
            return view('auth.login');
        }
    }

    public function showappointment()
    {
       

        
        if (Auth::id()) {

            if (Auth::user()->usertype == '1') {

                $appointments = appointment::all();
                return view('admin.show_appointments', compact('appointments'));
            } else {

                $doctors = doctor::all();
                $services = Service::all();

                return view('nopermission');

            }


        } else {
            return view('auth.login');
        }
    }

    public function addservice()
    {
        

        
        if (Auth::id()) {

            if (Auth::user()->usertype == '1') {
                $services = service::all();
                return view('admin.add_service', compact('services'));
            } else {

                $doctors = doctor::all();
                $services = Service::all();

                return view('nopermission');

            }


        } else {
            return view('auth.login');
        }
    }

    public function uploaddoctor(Request $request)
    {

       

        
        if (Auth::id()) {

            if (Auth::user()->usertype == '1') {

                $doctor = new doctor;


                $image = $request->file;
        
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->file->move('doctorimage', $imagename);
        
                $doctor->image = $imagename;
        
                $doctor->name = $request->name;
        
                $doctor->email = $request->email;
        
                $doctor->speciality = $request->speciality;
        
                $doctor->save();
        
        
                return redirect()->back();
            } else {

                $doctors = doctor::all();
                $services = Service::all();

                return view('nopermission');

            }


        } else {
            return view('auth.login');
        }
    }

    public function uploadservice(Request $request)
    {

       

        
        if (Auth::id()) {

            if (Auth::user()->usertype == '1') {
                $service = new Service;


                $image = $request->file;
        
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->file->move('serviceimage', $imagename);
        
                $service->image = $imagename;
        
                $service->name = $request->name;
        
                $service->description = $request->description;
        
        
        
                $service->save();
        
        
                return redirect()->back();
            } else {

                $doctors = doctor::all();
                $services = Service::all();

                return view('nopermission');

            }


        } else {
            return view('auth.login');
        }
    }

    public function deletedoc($id)
    {

       

        
        if (Auth::id()) {

            if (Auth::user()->usertype == '1') {
                $doctor = doctor::find($id);
                $doctor->delete();
        
                return redirect()->back();
            } else {

                $doctors = doctor::all();
                $services = Service::all();

                return view('nopermission');

            }


        } else {
            return view('auth.login');
        }
    }

    public function deleteapp($id)
    {

       

        
        if (Auth::id()) {

            if (Auth::user()->usertype == '1') {
                $appointment= appointment::find($id);
                $appointment->delete();
        
                return redirect()->back();
            } else {

                $doctors = doctor::all();
                $services = Service::all();

                return view('nopermission');

            }


        } else {
            return view('auth.login');
        }
    }

    public function updateappointment($id, Request $request){
        if (Auth::user()->usertype == '1') {
            $appointment = appointment::find($id);
            
            $appointment->date=$request->date;
            $appointment->save();

    
            return redirect()->back();
        } else {

            $doctors = doctor::all();
            $services = Service::all();

            return view('nopermission');

        }

    }
}