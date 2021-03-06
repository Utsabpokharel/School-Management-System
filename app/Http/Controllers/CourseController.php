<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academic;

class CourseController extends Controller
{
    public function __construct(){
    	$this->middleware('web');
    }

    public function getManageCourse(){
    	return view('courses.manageCourse');
    }

    public function postInsertAcademic(Request $request){
    	if ($request->ajax()){
    		return response(Academic::create($request->all()));
    	}
    }
}
