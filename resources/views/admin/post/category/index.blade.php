@extends('admin.layouts.app')
@section("title","Category")
@section('main')


<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row product-adding">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h5>Add Category</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add needs-validation">

                        <form action="" >
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Name</label>
                                <input class="form-control" id="validationCustom01" type="text" required="">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-sm btn-primary" type="submit">Add Category</button>
                            </div>
                        </form>
                                             
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h5>Add Description</h5>
                </div>
                <div class="card-body">
        
                    <div id="batchDelete" class="category-table user-list order-table jsgrid" style="position: relative; height: auto; width: 100%;">
                        <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                            <table class="jsgrid-table">
                                <tbody><tr class="jsgrid-header-row">
        
                                    <th style="width: 30px !important;" class="jsgrid-header-cell">No</th>
        
                                    <th style="" class="jsgrid-header-cell jsgrid-align-center">Title</th>
                                
                                    <th style="width: 50px;" class="jsgrid-header-cell">Action</th>
        
                                </tr>
                             
                            </tbody></table>
                        </div>
                        <div class="jsgrid-grid-body">
                            <table class="jsgrid-table">
                                <tbody>
                                 
                                    <tr class="jsgrid-row ">
        
                                        <td style="width: 30px !important;" class="jsgrid-cell">1</td>
                                        <td style="" class="jsgrid-cell">Milon</td>
                                        
                                        <td style="width: 50px;" class="jsgrid-cell action">

                                            <a class=" " href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <a class="delete_notification" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            
                                        </td>
                                    </tr>
                                
                                    
                                </tbody>
                            </table>
                        </div>
             
                        <div class="jsgrid-load-shader" style="display: none; position: absolute; inset: 0px; z-index: 1000;">
                        </div>
                        <div class="jsgrid-load-panel" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->


@endsection
