<?php  
namespace AquaTech\Http\Controllers;

class HomeController extends Controller
{
	public function index()
	{
		return view('home');
	}

	public function blog(){
		return view('blog');
	}
}
?>