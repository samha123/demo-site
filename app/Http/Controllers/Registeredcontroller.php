<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Registeruser;
use App\Models\admin;
use Illuminate\support\facades\DB;
class Registeredcontroller extends Controller
{
    function register(Request $req)
    {
        $registeruser= new registeruser;
    
         $registeruser->where_did_you_hear_about_us=$req->where_did_you_hear_about_us;
         $registeruser->parent_first_name=$req->parent_first_name;
         $registeruser->parent_middle_name=$req->parent_middle_name;
         $registeruser->parent_last_named=$req->parent_last_named;
         $registeruser->relationship_with_the_child=$req->relationship_with_the_child;
         $registeruser->occupation=$req->occupation;
         $registeruser->company_name=$req->company_name;
         $registeruser->moblie_no=$req->moblie_no;
         $registeruser->email=$req->email;
         $registeruser->home_phone=$req->home_phone;
         $registeruser->other_phone_number=$req->other_phone_number;
         $registeruser->child_full_name=$req->child_full_name;
         $registeruser->gender=$req->gender;
         $registeruser->date_of_birth=$req->date_of_birth;

         $registeruser->age=$req->age;
         $registeruser->nationality=$req->nationality;
         $registeruser->primary_language=$req->primary_language;
         $registeruser->secondary_language=$req->secondary_language;
         $registeruser->pervious_school_name=$req->pervious_school_name;
         $registeruser->current_grade=$req->current_grade;
         $registeruser->enrolment_year=$req->enrolment_year;
         $registeruser->grade_to_which_seeking_admission=$req->grade_to_which_seeking_admission;
          
         $registeruser->save();
      
        return redirect('/') ;
    }
    function show()
    {
       
       $users = DB::select('select * from registerusers');
       return view('dashboard',['registerusers'=>$users]);
       }
     
 function admin(Request $req)
       {
           $email = $req->input('email');
           $password = $req->input('password');
           $user=Admin::where(['email'=>$req->email])->first();
           if(!$user || !Hash::check($password,$user->password))
           {
               return "Username or password is not matched";
           }
           else{
               $req->session()->put('user',$user);
               return redirect('dashboard');
           }
        }
}
