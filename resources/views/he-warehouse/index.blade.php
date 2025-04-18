@extends('layouts.main')

@section('page-title', 'Manage Heavy Duty Warehouse')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Table Heavy Duty Warehouse</h5>
                    <a class="btn btn-primary waves-effect waves-light f-right" data-toggle="tooltip" data-placement="top"
                        title="" href="" role="button" data-original-title="Add User">
                        <i class="ti-plus"></i> Add Warehouse
                    </a>
                </div>
                <div class="card-block">
                    <div class="row">
                        <div class="col-sm-12 table-responsive">
                            <table class="table-hover table">
                                <thead>
                                    <tr>
                                        <th style="width: 1%;">No</th>
                                        <th style="width: 25%;">Fullname</th>
                                        <th style="width: 25%;">Email</th>
                                        <th style="width: 22%;">Role</th>
                                        <th class="text-center" style="width: 7%;">Status</th>
                                        <th class="text-center" style="width: 20%; ">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>name</td>
                                        <td>email</td>
                                        <td>role</td>
                                        <td>
                                            <label class="label label-lg label-success">Active</label>
                                            {{-- <div class="label-main m-l-2">
                                                @if ($user->status)
                                                @else
                                                    <label class="label label-lg label-default">Non Active</label>
                                                @endif
                                            </div> --}}
                                        </td>

                                        <td class="text-center">
                                            <a class="btn btn-warning waves-effect waves-light" data-toggle="tooltip"
                                                data-placement="top" title="" href="" role="button"
                                                data-original-title="edit ">
                                                <i class="ti-pencil"></i>
                                            </a>
                                            <a class="btn btn-danger waves-effect waves-light" data-toggle="tooltip"
                                                data-placement="top" title="Delete" href="" id="">
                                                <i class="ti-trash"></i>
                                            </a>

                                            <form action="" id="" method="POST" style="display:none;">
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
    </div>
@endsection
