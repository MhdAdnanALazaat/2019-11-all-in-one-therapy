<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index() {
        $x = Request('firstname');
        if ($x == ""){
            $patients = Patient::sortable()->paginate(10);
        }
            else{
                $stmt = Patient::query();
                $stmt->select('*')->where("patients.firstname",'like', '%' . $x.'%' );
                $patients = $stmt->sortable()->paginate(10);
            }
        return view('patients', compact('patients'));


}}

