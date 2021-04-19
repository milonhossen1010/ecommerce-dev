@extends('admin.layouts.app')
@section("title","Timesheets")
@section('main')

@php
    use Illuminate\Support\Facades\Auth;
    $array = json_decode($user -> ww );
   
@endphp


   


<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card">

        <div class="card-body">
        
            <div id="batchDelete" class="category-table user-list order-table jsgrid"
                style="position: relative; height: auto; width: 100%;">
                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                    <table class="jsgrid-table">
                        <tr class="jsgrid-header-row">

                            <th style="width: 50px !important;" class="jsgrid-header-cell">No</th>

                            <th style="width: 100px !important;" class="jsgrid-header-cell jsgrid-align-center">Name</th>
                            
                            <th style="width: 100px;" class="jsgrid-header-cell jsgrid-align-center">Start Date</th>

                            <th style="width: 100px;" class="jsgrid-header-cell">End Date</th>

                            <th style="width: 50px;" class="jsgrid-header-cell">Working Hours</th>

                            {{-- <th style="width: 100px;" class="jsgrid-header-cell">Total Pay</th> --}}

                            <th style="width: 100px;" class="jsgrid-header-cell">Action</th>

                        </tr>
                     
                    </table>
                </div>
                <div class="jsgrid-grid-body">
                    <table class="jsgrid-table">
                        <tbody>
                         
                         @foreach ($array as $item)
                             
                       
                            <tr class="jsgrid-row ">

                                <td style="width: 50px !important;" class="jsgrid-cell">{{ $loop -> index + 1 }}</td>

                                <td style="width: 100px !important; " class="jsgrid-cell jsgrid-align-center"> 
                                    {{ $item -> name }}
                                </td>

                                <td style="width: 100px;" class="jsgrid-cell"> 
                                    @php
                                    $arr = json_decode($item -> working_time);
                                        echo $arr -> start_date;
                                    @endphp
                                </td>
                                 
                                <td style="width: 100px;" class="jsgrid-cell">
                                    @php
                                    $arr = json_decode($item -> working_time);
                                   
                                        echo $arr -> end_date;
                                    
                                @endphp
                                </td>

                                <td style="width: 50px;" class="jsgrid-cell">
                                    @php
                                    $arr = json_decode($item -> working_time);
                                        echo $arr -> total_hrs. ' Hours';
                                    @endphp
                                </td>

                                {{-- <td style="width: 100px;" class="jsgrid-cell">
                                    @php
                                    $arr = json_decode($item -> working_time);
                                        echo '$'. $arr -> total_price;
                                    @endphp
                                </td> --}}

                                <td style="width: 100px;" class="jsgrid-cell action">
                                    
                                    <a class=" " href="{{ route('timecard.view', $item -> id ) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    {{-- <a class=" " href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a> --}}
                                    <a class="delete_notification" href="{{ route('timecard.delete', $item -> id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    
                                </td>
                            </tr>
                            @endforeach
                        
                            
                        </tbody>
                    </table>
                </div>
     
                <div class="jsgrid-load-shader" style="display: none; position: absolute; inset: 0px; z-index: 1000;">
                </div>
                <div class="jsgrid-load-panel"
                    style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->


@endsection
