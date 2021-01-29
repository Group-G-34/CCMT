<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patientcontroller extends Controller
{
    function loadpatient(){
        return view('/admin/patient');
    }
}
?>
