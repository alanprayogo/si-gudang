@extends('layouts.main')

@section('page-title', 'Role & Menu Access')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Role Permission</h5>
                    <a class="btn btn-primary waves-effect waves-light f-right" data-toggle="tooltip" data-placement="top"
                        title="Add Role" href="#" role="button" data-original-title="Add User">
                        <i class="ti-plus"></i> Add Role
                    </a>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-sm-12 table-responsive">
                            <table class="table-hover table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Role Name</th>
                                        <th>Permission Access</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td class="text-center">
                                            <a class="btn btn-warning waves-effect waves-light" data-toggle="tooltip"
                                                data-placement="top" title="" href="#" role="button"
                                                data-original-title="edit ">
                                                <i class="ti-pencil"></i>
                                            </a>
                                            <a class="btn btn-danger waves-effect waves-light" data-toggle="tooltip"
                                                data-placement="top" title="Delete" href="#" id="">
                                                <i class="ti-trash"></i>
                                            </a>

                                            <form action=""
                                                id="" method="POST" style="display:none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Role Menu</h5>
                    <a class="btn btn-primary waves-effect waves-light f-right" data-toggle="tooltip" data-placement="top"
                        title="Add Role" href="#" role="button" data-original-title="Add User">
                        <i class="ti-plus"></i> Add Menu
                    </a>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-sm-12 table-responsive">
                            <table class="table-hover table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Role Name</th>
                                        <th>Menu Access</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td class="text-center">
                                            <a class="btn btn-warning waves-effect waves-light" data-toggle="tooltip"
                                                data-placement="top" title="" href="#" role="button"
                                                data-original-title="edit ">
                                                <i class="ti-pencil"></i>
                                            </a>
                                            <a class="btn btn-danger waves-effect waves-light" data-toggle="tooltip"
                                                data-placement="top" title="Delete" href="#" id="">
                                                <i class="ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
