@extends('layouts.main')

@section('page-title', 'Dashboard')

@section('content')
    <!-- dashboard start -->
    <div class="row dashboard-header">
        <div class="col-lg-3 col-md-6">
            <a href="">
                <div class="card dashboard-product">
                    <span>Role</span>
                    <h2 class="dashboard-total-products">4500</h2>
                    <div class="side-box">
                        <i class="ti-lock text-primary-color"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6">
            <a href="">
                <div class="card dashboard-product">
                    <span>User</span>
                    <h2 class="dashboard-total-products">37,500</h2>
                    <div class="side-box">
                        <i class="ti-user text-warning-color"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6">
            <a href="">
                <div class="card dashboard-product">
                    <span>Customer</span>
                    <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                    <div class="side-box">
                        <i class="ti-user text-info-color"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6">
            <a href="">
                <div class="card dashboard-product">
                    <span>HE Warehouse</span>
                    <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                    <div class="side-box">
                        <i class="ti-home text-primary-color"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6">
            <a href="">
                <div class="card dashboard-product">
                    <span>SP Warehouse</span>
                    <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                    <div class="side-box">
                        <i class="ti-home text-warning-color"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6">
            <a href="">
                <div class="card dashboard-product">
                    <span>Heavy Equipment</span>
                    <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                    <div class="side-box">
                        <i class="ti-truck text-info-color"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6">
            <a href="">
                <div class="card dashboard-product">
                    <span>Spare Part</span>
                    <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                    <div class="side-box">
                        <i class="ti-archive text-primary-color"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6">
            <a href="">
                <div class="card dashboard-product">
                    <span>Rental</span>
                    <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                    <div class="side-box">
                        <i class="ti-file text-warning-color"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6">
            <a href="">
                <div class="card dashboard-product">
                    <span>Maintenance</span>
                    <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                    <div class="side-box">
                        <i class="ti-credit-card text-info-color"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6">
            <a href="">
                <div class="card dashboard-product">
                    <span>Restock</span>
                    <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                    <div class="side-box">
                        <i class="ti-shopping-cart text-primary-color"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6">
            <a href="">
                <div class="card dashboard-product">
                    <span>Income</span>
                    <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                    <div class="side-box">
                        <i class="ti-money text-success-color"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6">
            <a href="">
                <div class="card dashboard-product">
                    <span>Expenses</span>
                    <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                    <div class="side-box">
                        <i class="ti-money text-danger-color"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- dashboard end -->

    <!-- analytics start -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Bar chart</h5>
                </div>
                <div class="card-block">
                    <div id="barchart" style="min-width: 250px; height: 330px; margin: 0 auto"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Last Transaction</h5>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="m-b-0 photo-table table">
                            <thead>
                                <tr class="text-uppercase">
                                    <th>No</th>
                                    <th>Transaction</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Maintenance</td>
                                    <td>
                                        Completed
                                    </td>
                                    <td>October 21, 2015</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Restock</td>
                                    <td>
                                        Completed
                                    </td>
                                    <td>October 25, 2015</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- analytics end -->
@endsection
