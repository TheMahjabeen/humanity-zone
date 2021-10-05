<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use App\Models\Hospitals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateProfileController extends Controller
{

    public function hospital(Request $request) {
        if ($request->isMethod('post')) {
            $credentials = $request->validate([
                'branch' => ['required'],
            ]);
            $hospital = new Hospitals();
            $hospital->branch = $credentials['branch'];
            if ($hospital->save()) {
                $user = Auth::user();
                $user->userable_id = $hospital->id;
                $user->userable_type = Hospitals::class;
                $user->save();
                return 'Created your Hospital Profile as: ' . $hospital->branch .' by: '. $hospital->user->name;
            }
            return 'Something went wrong';
        }

        return view('create-hospital-profile');
    }

    public function doctor(Request $request) {
        if ($request->isMethod('post')) {
            $credentials = $request->validate([
                'charges' => ['required'],
                'hospital' => ['required'],
                'specialization' => ['required'],
            ]);
            $doctor = new Doctors();
            $doctor->charges = $credentials['charges'];
            $doctor->hospital_id = $credentials['hospital'];
            $doctor->specialization = $credentials['specialization'];
            if ($doctor->save()) {
                $user = Auth::user();
                $user->userable_id = $doctor->id;
                $user->userable_type = Doctors::class;
                $user->save();
                return 'Created your Doctor Profile specialized in: ' . $doctor->specialization .' in hospital: '. $doctor->hospital->branch;
            }
            return 'Something went wrong';
        }

        return view('create-doctor-profile', ['hospitals' => Hospitals::all()]);
    }
}
