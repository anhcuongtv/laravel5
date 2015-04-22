<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about(){
		$data = [
			'Cuong','Tu','Bao'
		];

		return view('pages.about',compact('data'));
	}

}
