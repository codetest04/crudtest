<?php

namespace Parteek\Par_crud\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class GenReportController extends Controller
{
    public function getTables(){
        
        $tables = array_map('reset',DB::select('SHOW TABLES'));
        return view('parteek.par_crud.home',compact('tables'));
    }
}
