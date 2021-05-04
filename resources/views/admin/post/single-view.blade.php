@extends('admin.layouts.app')
@section("title","Week of : To ")
@section('main')

@php
 $array = json_decode($data->working_time);
// echo '<pre>';
//     print_r($array);
// echo '</pre>';

    
@endphp



<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card">
      
        <div class="card-body">
            <div class=" ">
                <h5 class="float-right"> <strong>Date : </strong> {{ $array -> start_date }} <strong> To </strong>{{ $array -> end_date }}</h5>
            </div>
            <div id="batchDelete" class="category-table user-list order-table jsgrid" style="position: relative; height: auto; width: 100%;">
                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                    <table class="jsgrid-table">
                        <tbody><tr class="jsgrid-header-row">

                            <th style="width: 50px !important;" class="jsgrid-header-cell">No</th>

                            <th style="width: 100px !important;" class="jsgrid-header-cell jsgrid-align-center">Day</th>
                            
                            <th style="width: 100px;" class="jsgrid-header-cell jsgrid-align-center">Start Time</th>

                            <th style="width: 100px;" class="jsgrid-header-cell">End Time</th>

                            <th style="width: 50px;" class="jsgrid-header-cell">Break deduction </th>

                            <th style="width: 100px;" class="jsgrid-header-cell">Total</th>

                           

                        </tr>
                     
                    </tbody></table>
                </div>
                <div class="jsgrid-grid-body">
                    <table class="jsgrid-table">
                        <tbody>
                         
                                                      
                       
                            <tr class="jsgrid-row ">
                                <td style="width: 50px !important;" class="jsgrid-cell">1</td>

                                <td style="width: 100px !important; " class="jsgrid-cell jsgrid-align-center">Monday</td>

                                <td style="width: 100px;" class="jsgrid-cell">  {{ $array -> m_start_time }}</td>
                                 
                                <td style="width: 100px;" class="jsgrid-cell"> {{ $array -> m_end_time }} </td>

                                <td style="width: 50px;" class="jsgrid-cell"> {{ $array -> m_breakHR }}:{{ $array -> m_breakMin }}</td>

                                <td style="width: 100px;" class="jsgrid-cell"> {{ $array -> m_total }} </td>
                            </tr>

                            <tr class="jsgrid-row ">
                                <td style="width: 50px !important;" class="jsgrid-cell">2</td>

                                <td style="width: 100px !important; " class="jsgrid-cell jsgrid-align-center">Tuesday</td>

                                <td style="width: 100px;" class="jsgrid-cell">  {{ $array -> t_start_time }}</td>
                                 
                                <td style="width: 100px;" class="jsgrid-cell"> {{ $array -> t_end_time }} </td>

                                <td style="width: 50px;" class="jsgrid-cell"> {{ $array -> t_breakHR }}:{{ $array -> t_breakMin }}</td>

                                <td style="width: 100px;" class="jsgrid-cell"> {{ $array -> t_total }} </td>
                            </tr>

                            <tr class="jsgrid-row ">
                                <td style="width: 50px !important;" class="jsgrid-cell">3</td>

                                <td style="width: 100px !important; " class="jsgrid-cell jsgrid-align-center">Wednesday</td>

                                <td style="width: 100px;" class="jsgrid-cell">  {{ $array -> w_start_time }}</td>
                                 
                                <td style="width: 100px;" class="jsgrid-cell"> {{ $array -> w_end_time }} </td>

                                <td style="width: 50px;" class="jsgrid-cell"> {{ $array -> w_breakHR }}:{{ $array -> w_breakMin }}</td>

                                <td style="width: 100px;" class="jsgrid-cell"> {{ $array -> w_total }} </td>
                            </tr>

                            <tr class="jsgrid-row ">
                                <td style="width: 50px !important;" class="jsgrid-cell">4</td>

                                <td style="width: 100px !important; " class="jsgrid-cell jsgrid-align-center">Thursday</td>

                                <td style="width: 100px;" class="jsgrid-cell">  {{ $array -> th_start_time }}</td>
                                 
                                <td style="width: 100px;" class="jsgrid-cell"> {{ $array -> th_end_time }} </td>

                                <td style="width: 50px;" class="jsgrid-cell"> {{ $array -> th_breakHR }}:{{ $array -> th_breakMin }}</td>

                                <td style="width: 100px;" class="jsgrid-cell"> {{ $array -> th_total }} </td>
                            </tr>

                            <tr class="jsgrid-row ">
                                <td style="width: 50px !important;" class="jsgrid-cell">5</td>

                                <td style="width: 100px !important; " class="jsgrid-cell jsgrid-align-center">Friday</td>

                                <td style="width: 100px;" class="jsgrid-cell">  {{ $array -> f_start_time }}</td>
                                 
                                <td style="width: 100px;" class="jsgrid-cell"> {{ $array -> f_end_time }} </td>

                                <td style="width: 50px;" class="jsgrid-cell"> {{ $array -> f_breakHR }}:{{ $array -> f_breakMin }}</td>

                                <td style="width: 100px;" class="jsgrid-cell"> {{ $array -> f_total }} </td>
                            </tr>

                            <tr class="jsgrid-row ">
                                <td style="width: 50px !important;" class="jsgrid-cell">6</td>

                                <td style="width: 100px !important; " class="jsgrid-cell jsgrid-align-center">Saturday</td>

                                <td style="width: 100px;" class="jsgrid-cell">  {{ $array -> sa_start_time }}</td>
                                 
                                <td style="width: 100px;" class="jsgrid-cell"> {{ $array -> sa_end_time }} </td>

                                <td style="width: 50px;" class="jsgrid-cell"> {{ $array -> sa_breakHR }}:{{ $array -> sa_breakMin }}</td>

                                <td style="width: 100px;" class="jsgrid-cell"> {{ $array -> sa_total }} </td>
                            </tr>

                            <tr class="jsgrid-row ">
                                <td style="width: 50px !important;" class="jsgrid-cell">7</td>

                                <td style="width: 100px !important; " class="jsgrid-cell jsgrid-align-center">Sunday</td>

                                <td style="width: 100px;" class="jsgrid-cell">  {{ $array -> su_start_time }}</td>
                                 
                                <td style="width: 100px;" class="jsgrid-cell"> {{ $array -> su_end_time }} </td>

                                <td style="width: 50px;" class="jsgrid-cell"> {{ $array -> su_breakHR }}:{{ $array -> su_breakMin }}</td>

                                <td style="width: 100px;" class="jsgrid-cell"> {{ $array -> su_total }} </td>
                            </tr>
                                                    
                            
                        </tbody>
                    </table>
                </div>
                <div class="jsgrid-pager-container" style="">
                    <div class="jsgrid-pager">
                        {{-- <span style="font-size: 16px"><strong style="">Hourly Rate: </strong> @php
                            if(isset($array -> hourly_rate)){
                                 echo '$'. $array -> hourly_rate ;
                            }
                            
                        @endphp</span>, --}}
                        {{-- <span style="font-size: 16px"><strong style="">Total pay: </strong> {{ $array -> total_price }} </span>, --}}
                        <span style="font-size: 16px"><strong style="">Total hours: </strong> {{ $array -> total_hrs }} </span>
                    </div>
                </div>
                <div class="jsgrid-load-shader" style="display: none; position: absolute; inset: 0px; z-index: 1000;">
                </div>
                <div class="jsgrid-load-panel" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->


@endsection
