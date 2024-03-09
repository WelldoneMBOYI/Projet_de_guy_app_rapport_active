<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoordinationController extends Controller
{
    //

    

    public function decision_admin()
    {
        
        return view('coordination.decision_admin');
    }

    public function decision_tech()
    {
        
        return view('coordination.decision_tech');
    }

    public function decision_acad()
    {
        
        return view('coordination.decision_acad');
    }


    

    public function decision_admin_done()
    {
        
        return view('coordination.decision_done.decision_admin_done');
    }

    public function decision_tech_done()
    {
        
        return view('coordination.decision_done.decision_tech_done');
    }

    public function decision_acad_done()
    {
        
        return view('coordination.decision_done.decision_acad_done');
    }

}
