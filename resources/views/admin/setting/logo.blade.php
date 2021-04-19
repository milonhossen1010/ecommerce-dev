@extends('admin.layouts.app')
@section("title","Site identify")
@section('main')


@php
   
@endphp


<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card tab2-card">
    
                <div class="card-body">
                    <form action="{{ route('logo.update') }}" method="POST" enctype="multipart/form-data" class="needs-validation  user-add" novalidate="">
                        @csrf 
                        <h4>Chane Password</h4>
                        <div class="form-group row">
                          
                            <label for="validationCustom0" class="col-xl-3 col-md-4">Site Title</label>
                            <input name="title" value="{{ $setting -> site_identify }}" class="form-control col-xl-8 col-md-7" type="text" required="">
                        </div>

                        <div class="form-group row">
                           
                            <label for="validationCustom0" class="col-xl-3 col-md-4">Copy Rights text</label>
                            <input name="crt" value="{{ $setting -> crt }}" class="form-control col-xl-8 col-md-7" type="text" required="">
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-xl-3 col-md-4"><span class=" text-white">*</span> Logo</label>
                            <div class="col-xl-8 col-md-7   add-product">
                                    
                                <img style="width: auto !important; height: 80px !important; border-radius: 0 !important;" id="cl1-load" class=" mb-2 img-size-fix lazyloaded" src="{{ asset('/') }}media/images/{{ $setting -> logo }}" alt="">
                                <ul class="file-upload-product">
                                    <li>
                                        <div style="background: #333; border-radius: 3px;width: 100px; height: 30px;" class="box-input-file bg-black">
                                            
                                            <input name="logo" id="cl1" class="upload" type="file">
                                            <i style="color: #f9f871" class="fa fa-upload"></i>
                                            <label style="font-size: 12px;" for="cl1" class=" fs mb-0 pl-1 text-white">UPLOAD</label>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
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
