<?php

namespace App\Http\Controllers;

use App\Models\Timecard;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;

class TimecardController extends Controller
{
    //Page view
    public function index()
    {
        $user = Auth::user();
        $timecard = Timecard::find(1);
        return view('admin.timecard.index', [
            'user'  => $user
        ]);
    }

    //Data store
    public function store(Request $request)
    {


   
 
        $this->validate($request, [ 
            'hourly_rate'   =>  'required:timecards',
        ]);

        $date_time = [
           
                'start_date'        =>  $request -> start_date,
                'end_date'          =>  $request -> end_date,
                'm_start_time'      => $request -> m_start_time,
                'm_end_time'        => $request -> m_end_time,
                'm_breakHR'         => $request -> breakHR,
                'm_breakMin'        => $request -> breakMin,
                'm_total'           => $request -> m_total,
                't_start_time'      => $request -> t_start_time,
                't_end_time'        => $request -> t_end_time,
                't_breakHR'         => $request -> breakHR2,
                't_breakMin'        => $request -> breakMin2,
                't_total'           => $request -> t_total,
                'w_start_time'      => $request -> w_start_time,
                'w_end_time'        => $request -> w_end_time,
                'w_breakHR'         => $request -> breakHR3,
                'w_breakMin'        => $request -> breakMin3,
                'w_total'           => $request -> w_total,
                'th_start_time'     => $request -> th_start_time,
                'th_end_time'       => $request -> th_end_time,
                'th_breakHR'        => $request -> breakHR4,
                'th_breakMin'       => $request -> breakMin4,
                'th_total'          => $request -> th_total,
                'f_start_time'      => $request -> f_start_time,
                'f_end_time'        => $request -> f_end_time,
                'f_breakHR'         => $request -> breakHR5,
                'f_breakMin'        => $request -> breakMin5,
                'f_total'           => $request -> f_total,
                'sa_start_time'     => $request -> sa_start_time,
                'sa_end_time'       => $request -> sa_end_time,
                'sa_breakHR'        => $request -> breakHR6,
                'sa_breakMin'       => $request -> breakMin6,
                'sa_total'          => $request -> sa_total,
                'su_start_time'     => $request -> su_start_time,
                'su_end_time'       => $request -> su_end_time,
                'su_breakHR'        => $request -> breakHR7,
                'su_breakMin'       => $request -> breakMin7,
                'su_total'          => $request -> su_total,
                'total_price'       => $request -> total_price,
                'total_hrs'         => $request -> total_hrs,
                'hourly_rate'       => $request -> hourly_rate,
            
        ];

         $json_data = json_encode( $date_time );
    

       Timecard::create([
           'name'           =>  Auth::user()->name,
           'working_time'   =>  $json_data,
           'user_id'        =>  Auth::user()->id
       ]);

      return redirect() -> route('timecard.index') -> with('success', 'Added successful!');
       
    }

    //Delete data
    public function delete($id)
    {
       $time = Timecard::find($id);

       $time -> delete();
       return redirect() -> back()->with('success', 'Delete Successful!');
    }


    //View single data
    public function view($id)
    {
       $data = Timecard::find($id);

       return view('admin.timecard.single-view', [
           'data'       =>      $data
       ]);
    }








}
