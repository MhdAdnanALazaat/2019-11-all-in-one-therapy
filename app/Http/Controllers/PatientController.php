<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    }

    public function info($id){
        $view = Patient::findOrFail($id);
        return view('result',compact('view'));
    }


         public function update($id){
             $data = request()->validate([
                 'svnr' => 'required',
                 'firstname' => 'required',
                 'lastname' => 'required',
                 'email' => 'required',
                 'address' => 'required',
                 'plz' => 'required',
                 'city' => 'required',
                 'country' => 'required',
             ]);
             /*dd($data);*/
             /*dd($id);*/
             DB::table('patients')
                 ->where('id', $id)
                 ->update([
                     'svnr' => $data['svnr'],
                     'firstname' => $data['firstname'],
                     'lastname' => $data['lastname'],
                     'email' => $data['email'],
                     'address' => $data['address'],
                     'plz' => $data['plz'],
                     'city' => $data['city'],
                     'country' => $data['country']
                 ]);
             return  redirect("/patients/");

}}
