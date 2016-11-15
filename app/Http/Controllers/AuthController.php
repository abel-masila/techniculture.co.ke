<?php 
namespace AquaTech\Models; 
namespace AquaTech\Http\Controllers;
use Illuminate\Http\Request;
use AquaTech\Models\User;
use Illuminate\Support\Facades\Input;
use Auth;

class AuthController extends Controller
{
	
	public function postRegister(Request $request){
		$this->validate($request,[
			'email'=>'required|unique:users|email|max:255',
			'username'=>'required|unique:users|alpha_dash|max:20',
			'password'=>'required|max:8',
		]);
		User::create([
			'username'=>$request->input('username'),
			'email'=> $request->input('email'),
			'county'=>$request->input('county'),
			'password'=>bcrypt($request->input('password')),
		]);

		return redirect()->route('home')->with('info',"Your account has been created!");
	}

	public function postLogin(Request $request){
		$this->validate($request, [
        'l_email'=> 'required',
        'l_password'=> 'required',
      ]);
		$email=$request->input('l_email');
		$password=$request->input('l_password');
      if(!Auth::attempt(['email'=>$email,'password'=>$password],$request->has('remember'))){
        return redirect()->back()->with('info','Could not sign you in with those details!');
      }
      return redirect()->route('home')->with('info', 'You are now signed in.');
	}

	 public function getSignout(){
    Auth::logout();
    return redirect()->route('home');
  }
}
?>