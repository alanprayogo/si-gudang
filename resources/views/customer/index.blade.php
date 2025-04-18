@extends('layouts.main')

@section('page-title', 'List Customer')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Table Customer</h5>
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
