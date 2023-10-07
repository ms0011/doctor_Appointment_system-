<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;


class ViewController extends Controller
{
    public function viewLayout()
    {

        return view('layouts.app');

    }

    public function viewDoctorIndex()
    {
        $doctors = Doctor::all();
        return view('doctors.index',compact('doctors'));



    }
    public function viewDoctorEdit()
    {
        $doctors = Doctor::all();
        return view('doctors.edit',compact('doctors'));



    }

    public function viewDoctorCreate()
    {
        return view('doctors.create');
    }


    public function viewPatientIndex()
    {
        $doctors = Patient::all();
        return view('patients.indexs',compact('patients'));



    }

    public function viewPatientCreate()
    {
        return view('patients.creates');
    }

    public function viewPatientEdit()
    {
        $doctors = Doctor::all();
        return view('patients.edit',compact('patients'));



    }

}


