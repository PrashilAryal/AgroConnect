<?php

namespace App\Http\Controllers;
use App\Models\JobDescription;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signupPage(){
        return view('auth.signup');
    }
    public function loginPage(){
        return view('auth.login');
    }
    public function signup(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed|min:3',
        ]);
        User::Create([
            'name' => $req->name,
            'email' => $req->email,
            'location' => $req->location,
            'role' => $req->role,
            'password' => Hash::make($req->password)
        ]);
        return redirect()->route('loginPage');
    }
    public function login(Request $req){
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email','=',$req->email)->first();
        if($user){
            if(Hash::check($req->password,$user->password)){
                session()->put('userid',$user->id);
                if($user->role == 1){
                      return redirect('/admin-dashboard');
                }
                elseif($user->role == 2){
                    return redirect('/home');
                }elseif($user->role == 3){
                    return redirect('/visitorpage');
                }else{
                    return redirect('/sellerpage');
                }
            }else{
                return back()->with('fail','Password not matched');
            }
        }else {
            return back()->with('fail', 'Email is not registered.');
        }
    }
    public function logout(){
        Session::forget('userid');
        return redirect('/');
    }
  
    public function visitor(){
        return view('Visitor.index');
    }
    public function submit_job_application(Request $req){
        $user = User::find(Session::get('userid'));

        $post = new JobDescription();
        $post->title = $req->job_title;
        $post->description = $req->job_description;
        $post->Noworker = $req->num_workers;
        $post->Salary = $req->salary;
        $post->location = $req->job_location;
        $post->Cname = $req->contact_name;
        $post->Cemail = $req->contact_email;
        $post->Cno = $req->contact_phone;

        $user->JobDescription()->save($post);
        return back();
    }
    public function orderSuccess(){
        return view('farmer.orderSuccessful');
    }
}