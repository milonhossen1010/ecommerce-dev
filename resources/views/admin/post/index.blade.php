@extends('admin.layouts.app')
@section("title","All Post")
@section('main')


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

                            <th style="width: 100px !important;" class="jsgrid-header-cell jsgrid-align-center">Title</th>
                            
                            <th style="width: 150px;" class="jsgrid-header-cell jsgrid-align-center">Caategories</th>

                            <th style="width: 150px;" class="jsgrid-header-cell">Tags</th>

                            <th style="width: 50px;" class="jsgrid-header-cell">Date</th>
          
                            <th style="width: 100px;" class="jsgrid-header-cell">Action</th>

                        </tr>
                     
                    </table>
                </div>
                <div class="jsgrid-grid-body">
                    <table class="jsgrid-table">
                        <tbody>
                         
                            <tr class="jsgrid-row ">

                                <td style="width: 50px !important;" class="jsgrid-cell">1</td>

                                <td style="width: 100px !important; " class="jsgrid-cell jsgrid-align-center"> 
                                    Milon Hossen
                                </td>

                                <td style="width: 150px;" class="jsgrid-cell"> 
                                    2021-05-04                                </td>
                                 
                                <td style="width: 150px;" class="jsgrid-cell">
                                    2021-05-06                                </td>

                                <td style="width: 50px;" class="jsgrid-cell">
                                    2.00 Hours                                </td>

                                

                                <td style="width: 100px;" class="jsgrid-cell action">
                                    
                                    <a class=" " href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                    <a class=" " href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    
                                    <a class="delete_notification" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    
                                </td>
                            </tr>
                        
                            
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
