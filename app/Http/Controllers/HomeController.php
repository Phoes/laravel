<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
class HomeController extends Controller
{
	public function index(){
		return view('welcome')->with('name',"CoE");
	}
	public function  hello(){

		return view('index');
	}
    public function report(Request $request){
    	
    	$validator = Validator::make($request->all(),$this->rules(), $this->messages());
    	if($validator->passes()){
    		return view('home')->with('name', $request->name)
    		                   ->with('age', $request->age);
    	} else{
            return back()->withErrors($validator)->withInput();
    	}
       
  }
  public function rules() {
  	return [
         'name' => 'required|alpha',
         'age' =>  'required|numeric'
  	];
  }
  public function messages() {
  	return [
          'name.required' => 'ห้ามว่าง',
          'name.alpha'  => 'ห้ามเป็นตัวเลข',
          'age.required' => 'ห้ามว่าง',
          'age.numeric'  =>  'ห้ามเป็นตัวหนังสือ',
        ];
  }
    //
}
