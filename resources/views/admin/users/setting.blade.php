@extends('admin.layouts.app')
@section("title","Password")
@section('main')


@php

@endphp


<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card tab2-card">
    
                <div class="card-body">
                    <form action="{{ route('setting.password') }}" method="POST" enctype="multipart/form-data" class="needs-validation  user-add" novalidate="">
                        @csrf
                        @method("PUT")
                        <h4>Chane Password</h4>
                        <div class="form-group row">
                          
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Old Passowrd</label>
                            <input name="old_pass" value="" class="form-control col-xl-8 col-md-7" id="validationCustom0" type="password" required="">
                        </div>

                        <div class="form-group row">
                           
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>New Passowrd</label>
                            <input name="new_pass" value="" class="form-control col-xl-8 col-md-7" id="validationCustom0" type="password" required="">
                        </div>

                        <div class="form-group row">
                         
                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Confirm Passowrd</label>
                            <input name="con_pass" value="" class="form-control col-xl-8 col-md-7" id="validationCustom0" type="password" required="">
                        </div>
                   
                        
            


                        <div class="">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->


@endsection
