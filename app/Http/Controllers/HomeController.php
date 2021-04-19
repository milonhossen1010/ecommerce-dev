<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('admin.timecard.index', [
            'user'  => $user
        ]);
    }

    //Setting 
    public function setting()
    {
       return view('admin.users.setting');
    }

    //Password change 
    public function password(Request $request)
    {
        $db_pass = Auth::user()->password;
        $id = Auth::user()->id;
       $old_pass = $request-> old_pass;
       $new_pass = $request-> new_pass;
       $con_pass = $request-> con_pass;

       if(Hash::check($old_pass, $db_pass)){
            if($new_pass ==  $con_pass){
                $auth = User::find($id);

                $auth -> password = Hash::make($new_pass);
                $auth -> update();
                
                Auth::logout();
                return redirect()  -> back() -> with('success','Password change successful!');

            }else{
                return redirect()->back()->with('error', 'Confirm Password Not Match!');
            }
       }else{
        return redirect()->back()->with('error', 'Old Password Not Match!');
       }
    }
}
