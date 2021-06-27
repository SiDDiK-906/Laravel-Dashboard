<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function about1(){
		$var = "Section.";
		// return view('about',compact('var'));
		// return view('0hello.about'); 
		return view('about',[
			'var' => $var,
		]);
	}
    function contact(){
		$a = 55;
		$b = 10;
		return view('contact',[
			'res' => $a + $b,
		]);
	}
	function loopPractice(){
		return view('loopPractice',[
			// 'data' => ['one','too','three'],
			'data' => [],
		]);
	}
	function headFoot(){
		return view('headerFooter');
	}
}