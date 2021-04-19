<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
   public function index()
   {
    $uer_id = Auth::user()->id;
    $user = User::find($uer_id);

    return view('admin.users.profile', compact('user'));
   }

   //Edit profile
   public function edit(Request $request)
   {
    $uer_id = Auth::user()->id;
    $user = User::find($uer_id);

    if ($user -> email !== $request -> email) {
        $this -> validate($request,[
            'email'     => 'unique:users'
        ]);
    } 
  

    //Image function
    if( $request -> hasFile('img') ){
        $profile_img = $request -> file('img');
        $profile_pic = strtolower($request->first_name). "'s-profile-photo" . rand(1,100) .'.'. $profile_img -> getClientOriginalExtension();
        $profile_img -> move(public_path('media/images/users'), $profile_pic );


        if ($user -> image !== 'avatar.jpg') {
             //  Existing image delete
            $profile_path = 'media/images/users/' . $user->image;

            if(file_exists($profile_path)){
                unlink($profile_path);
            
            }

         }
   
    } else{
        $profile_pic = $user->image;
    }

  
    
    
    $user -> name = $request -> name;
    $user -> email = $request -> email;
    $user -> image = $profile_pic;
    $user -> UPDATE();

    return redirect() -> back() -> with('success', 'Profile update Successful!');
   }

   //Profile Delete
   public function delete(Request $request)
   {
       $user = User::find($request -> user_id);

       $user -> delete();
       return redirect()->route('login')->with('success', 'Account delete successful!');
   }


   //All users show
   public function all()
   {
        
       $all_users = User::all();
       return view('admin.users.all-users', compact('all_users'));
   }

   //User Delete
   public function allUsersDelete($id)
   {
    $user = User::find($id);

    if ($user -> image !== 'avatar.jpg') {
        //  Existing image delete
       $profile_path = 'media/images/users/' . $user->image;

       if(file_exists($profile_path)){
           unlink($profile_path);
       }
    }

   $user -> delete();

   return redirect()->back()->with('success','User delete successful!!');
   }

   //User Edit
   public function userEdit($id)
   {
       $user = User::find($id);

       return view('admin.users.edit', ['user' => $user]);
   }

   //user update
   public function userUpdate(Request $request)
   {
       $user = User::find($request -> id);

       $user -> name    = $request -> name;
       $user -> email   = $request -> email;
       $user -> role    = $request -> role;
       $user -> update();

       return redirect() -> back() -> with('success', 'Update Successful!');
   }





}
