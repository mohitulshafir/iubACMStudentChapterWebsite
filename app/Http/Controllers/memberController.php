<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Helper;
use App\Models\member;
use App\Models\user;

use Notification;
use App\Notifications\SendEmailNotification;

class memberController extends Controller
{
    public function signin(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        // dd($user);
        if ($user) {
            if ($user->password == $request->password) {
                $request->session()->put('LoggedUser', $user);
                
                if ($user->email == 'iubacmstudentchapter@gmail.com'){
                    session()->put('userType', 'Admin');
                    return redirect()->route('dashboard');
                }
                else {
                    return redirect()->back()->with('emailFail', 'The email does not exist!');
                }
            }
        } else {
            return redirect()->back()->with('emailFail', 'The email does not exist!');
        }
    }

    public function signout()
    {
        session()->pull('userType');
        session()->pull('LoggedUser');
        return view('login');
    }

    
    function memRegistration(){
        return view('registration');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'studentID'=>'required|max:255|unique:members',
            'fbURL'=>'required|max:500|unique:members',
            'email'=>'required|max:255|unique:members',
            'phone'=>'required|regex:/(01)[0-9]{9}/|unique:members',
            'image'=>'required|max:300',
        ]);
        
        $new_user = new member();
        $new_user-> name= $request-> name;
        $new_user-> email= $request-> email;
        $new_user-> phone= $request-> phone;
        $new_user-> dob= $request-> dob;
        $new_user-> studentID= $request-> studentID;
        $new_user-> department= $request-> department;
        $new_user-> gender= $request-> gender;
        $new_user-> address= $request-> address;
        $new_user-> fbURL= $request-> fbURL;
        $new_user-> hearAbout= $request-> hearAbout;
        if ($request-> interest == NULL) {
            $new_user->interest = "N/A";
        } else {
            $new_user->interest = $request-> interest;
        }
        
        $new_user->expectation = $request-> expectation;

        $name =$request->email. '.jpg';
        $new_user->image = $request-> image;
        $request->image->move(public_path('memberImage'), $name);
        
        $new_user-> memberID = 'IUBACM-' . $request->studentID;

        $save = $new_user->save();
        return redirect()->back()->with(['message' => 'Thanks! We have received your application. We will contact you soon!']);
        
    }

    public function memberList()
    {
        $member = member::all();
        return view('member', compact('member'));
    }

    
}