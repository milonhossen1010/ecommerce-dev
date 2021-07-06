@extends('admin.layouts.app')
@section("title","Category")
@section('main')


<!-- Container-fluid starts-->

<div id="category" class="container-fluid">
    <div class="row product-adding">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h5>Add Category</h5>
                </div>
                <div class="card-body">
                    <div class="digital-add">

                        <form class="preventDefault" action="">
                            <div class="form-group">
                                
                                <label class="col-form-label pt-0 "><span class="text-danger">*</span> Name</label>

                                <h3 style="background-color: #dc3545;" class="badge badge-danger" v-if="category.check"><span v-html="category.name"></span> category already exist!</h3>

                                <input @keyup="checkCategory()" name="brand" v-model="category.name" class="form-control" type="text">
                               
                            </div>
                            <div class="form-group">
                                <button @click="addCategory" class="btn btn-sm btn-primary" type="submit">Add
                                    Category</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">

                    <div id="batchDelete" class="category-table user-list order-table jsgrid"
                        style="position: relative; height: auto; width: 100%;">
                        <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                            <table class="jsgrid-table">
                                <tbody>
                                    <tr class="jsgrid-header-row">

                                        <th style="width: 25px !important;" class="jsgrid-header-cell">No</th>

                                        <th style="" class="jsgrid-header-cell jsgrid-align-center">Title</th>
                                        <th style="width:35px" class="jsgrid-header-cell jsgrid-align-center">Status</th>

                                        <th style="width: 50px;" class="jsgrid-header-cell">Action</th>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="jsgrid-grid-body">
                            <table class="jsgrid-table">
                                <tbody>

                                    <tr v-for="(category, index) in category.all" class="jsgrid-row ">

                                        <td style="width: 25px !important;" v-html="index+1" class="jsgrid-cell"></td>
                                        <td style="" v-html="category.name" class="jsgrid-cell"></td>
                                        <td style="width:35px" class="jsgrid-cell">
                                            <label class="switch">
                                                <input class="status" v-model="category.status"
                                                 @click="changeStatus(category.id)" type="checkbox">
                                                <span class="slider round "></span>
                                            </label>
                                        </td>

                                        <td style="width: 50px;" class="jsgrid-cell action">

                                            <a @click="editCategory(category.id)" data-toggle="modal" href="#"><i
                                                    class="fa fa-pencil" aria-hidden="true"></i></a>

                                            <a @click="deleteCategory(category.id, $event)" class="delete_notification"
                                                href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>

                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                        <div class="jsgrid-load-shader"
                            style="display: none; position: absolute; inset: 0px; z-index: 1000;">
                        </div>
                        <div class="jsgrid-load-panel"
                            style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please,
                            wait...</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="edit_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Physical Product</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation">
                        <div class="form">
                            <div class="form-group">
                                <label for="validationCustom01" class="mb-1">Category Name :</label>
                                <input class="form-control" v-model="category.edit" type="text">
                                <input v-model="category.id" type="hidden">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button @click="updateCategory()" class="btn btn-primary" type="submit">Save</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->


@endsection
